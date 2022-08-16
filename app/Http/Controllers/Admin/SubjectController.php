<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResourceRequest;
use App\Http\Requests\SubjectStoreRequest;
use App\Models\Resource;
use App\Models\Subject;
use App\Models\SubjectResource;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * list subject.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data = Subject::query()->orderBy('id','desc')->paginate(5);
        $dataResource = SubjectResource::query()
            ->join('subjects', 'subjects.id', '=', 'subject_resource.subject_id')
            ->join('resources', 'resources.id', '=', 'subject_resource.resource_id')
            ->get();
        return view('admin.subject.list')->with(compact('data','dataResource'));
    }

    public function create(): Renderable
    {
        $data = Resource::all();

        return view('admin.subject.create')->with(compact('data'));
    }

    /**
     * Store a resource.
     *
     * @param SubjectStoreRequest $request
     * @return RedirectResponse
     */
    public function store(SubjectStoreRequest $request): RedirectResponse
    {
        $dataResources = $request->get('resource');
//
//        $subject = new Subject([
//            'name' => $request->get('name')
//        ]);
//        $subject->save();
        $data = [
            'name' => $request->get('name'),
        ];
        $subject = Subject::create($data);
        $subject->resources()->attach($dataResources);

        return redirect()->route('subject.index');
    }

    /**
     * Show detail resource.
     *
     * @param int $id
     * @return Renderable
     */
    public function show(int $id)
    {
        $dataSubject = Subject::findOrFail($id);
        $dataResource = Resource::all();

        return view('admin.subject.edit')->with(compact('dataSubject', 'dataResource'));
    }

    /**
     * @param SubjectStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SubjectStoreRequest $request, int $id): RedirectResponse
    {
        $subject = Subject::find($id);
        $dataSubject = $subject->resources()->pluck('resource_id')->toArray();
        $idResourceRequests =  $request->input('resource');
        $attachIds = array_diff($idResourceRequests, $dataSubject);
        $detachIds = array_diff($dataSubject, $idResourceRequests);

        if ($attachIds) {
            $subject->name = $request->get('name');
            $subject->save();
            $subject->resources()->attach($attachIds);
        }
        if ($detachIds) {
            $subject->name = $request->get('name');
            $subject->save();
            $subject->resources()->detach($detachIds);
        }

        return redirect()->route('subject.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = Subject::findOrFail($id);
        $data->delete();
        return redirect()->route('subject.index');
    }
}
