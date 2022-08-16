<?php

namespace App\Http\Controllers\User;

use App\Constants\AdminType;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Jobs\SendFeedBack;
use App\Models\Admin;
use App\Models\FeedBack;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $teacher = Admin::where('type', '=', AdminType::TEACHER)->get();
        $gallery = Gallery::all();

        return view('user.home')->with(compact('gallery', 'teacher'));
    }

    /**
     * Log out user.
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('user.home');
    }

    /**
     * User registration.
     *
     * @return Renderable
     */
    public function showRegisterForm(): Renderable
    {
        return view('user.registration');
    }

    /**
     * User registration
     * @param UserStoreRequest $request
     * @return RedirectResponse
     */
    public function register(UserStoreRequest $request): RedirectResponse
    {
        if ($request->has('avatar')) {
            $filePath = $request['avatar']->storeAs('uploads', request('avatar')->getClientOriginalName(), 'public');
        }
        $input = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'type' => $request->get('type'),
            'avatar' => $filePath,
        ];
        User::create($input);

        return redirect()->route('login');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function sendFeedBack(Request $request): RedirectResponse
    {
        $feedback = new FeedBack();
        $feedback->name = $request->get('name');
        $feedback->email = $request->get('email');
        $feedback->message = $request->get('message');
        $feedback->save();

        $user = User::find(1);
        $message = [
            'email' => $feedback->email,
            'name' => $feedback->name,
            'message' => $feedback->message,
        ];
        SendFeedBack::dispatch($message, $user)->delay(now()->addMinute(1));

        return redirect()->back();
    }
}

