<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassStoreRequest;
use App\Models\ClassLopHoc;
use App\Models\Subject;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ClassController extends Controller
{
    /**
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data = ClassLopHoc::query()
            ->join('subjects', 'subjects.id', '=', 'classes.id_subject')
            ->paginate(5);
        return view('admin.class.list')->with(compact('data'));
    }

    /**
     * Create resource.
     *
     * @return void
     */
    public function create(): Renderable
    {
        $data = Subject::all();

        return view('admin.class.create')->with(compact('data'));
    }

    /**
     * Store a resource.
     *
     * @param ClassStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ClassStoreRequest $request): RedirectResponse
    {
        $class = new ClassLopHoc();
        $class->id_subject = $request->input('id_subject');
        $class->started_at = $request->get('started_at');
        $class->ended_at = $request->get('ended_at');
        $class->note = $request->get('note');
        $class->save();

        return redirect()->route('class.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = Subject::findOrFail($id)->classes()->pluck('id');
        $dataClass = ClassLopHoc::findOrFail($data);
        $dataClass->each->delete();

        return redirect()->route('class.index');
    }

}
