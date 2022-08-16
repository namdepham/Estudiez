<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LineStoreRequest;
use App\Http\Requests\ResourceRequest;
use App\Models\Line;
use App\Models\Resource;
use App\Models\Subject;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineController extends Controller
{
    /**
     * List resource.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        $data = Line::query()->orderBy('id','desc')->paginate(5);

        return view('admin.line.list')->with(compact('data'));
    }
    /**
     * Create resource.
     *
     * @return void
     */
    public function create(): Renderable
    {
        $dataSubject =  Subject::all();
        return view('admin.line.create')->with(compact('dataSubject'));
    }

    /**
     * Store a resource.
     *
     * @param LineStoreRequest $request
     * @return RedirectResponse
     */
    public function store(LineStoreRequest $request): RedirectResponse
    {
        $input = [
            'name' => $request->get('name'),
            'phonenumber' => $request->get('phonenumber'),
        ];
        $line = Line::create($input);
        $line->subject()->attach($request->get('subject'));

        return redirect()->route('line.index');
    }

    /**
     * Show detail resource.
     *
     * @param int $id
     * @return Renderable
     */
    public function show(int $id)
    {
        $data = Line::findOrFail($id);

        return view('admin.line.edit')->with(compact('data'));
    }

    /**
     * @param LineStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(LineStoreRequest $request, int $id): RedirectResponse
    {
        $data = Line::findOrFail($id);
        $data->name = $request->input('name');
        $data->phonenumber = $request->input('phonenumber');
        $data->save();

        return redirect()->route('line.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = Line::findOrFail($id);
        $data->delete();

        return redirect()->route('line.index');
    }
}
