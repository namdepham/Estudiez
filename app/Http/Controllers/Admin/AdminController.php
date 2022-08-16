<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreRequest;
use App\Models\Admin;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * List resource.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        $data = Admin::query()->orderBy('id','desc')->paginate(5);

        return view('admin.admins.list')->with(compact('data'));
    }
    /**
     * Create resource.
     *
     * @return void
     */
    public function create(): Renderable
    {
        $data =  Admin::all();

        return view('admin.admins.create')->with(compact('data'));
    }

    /**
     * Store a resource.
     *
     * @param AdminStoreRequest $request
     * @return RedirectResponse
     */
    public function store(AdminStoreRequest $request): RedirectResponse
    {
        if ($request->has('avatar'))
        {
            $filePath = $request['avatar']->storeAs('uploads', request('avatar')->getClientOriginalName(), 'public');
        }
        $input = [
            'name' => $request->get('name'),
            'phonenumber' => $request->get('phonenumber'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'avatar' =>  $filePath,
        ];
        Admin::create($input);

        return redirect()->route('admin.index');
    }

    /**
     * Show detail resource.
     *
     * @param int $id
     * @return Renderable
     */
    public function show(int $id)
    {
        $data = Admin::findOrFail($id);

        return view('admin.admins.edit')->with(compact('data'));
    }

    /**
     * @param AdminStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        if ($request->has('avatar'))
        {
            $filePath = $request['avatar']->storeAs('uploads', request('avatar')->getClientOriginalName(), 'public');
        }
        $data = Admin::findOrFail($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phonenumber = $request->input('phonenumber');
        $data->avatar = $filePath;
        $data->save();

        return redirect()->route('admin.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = Admin::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.index');
    }
}
