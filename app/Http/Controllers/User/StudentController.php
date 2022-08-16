<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ClassLopHoc;
use App\Models\SubjectResource;
use App\Models\User;
use App\Models\UserSubject;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function viewScore(): Renderable
    {
        $id = Auth::guard()->user()->id;
        $data = UserSubject::query()
            ->join('subjects', 'user_subject.id_sub', '=', 'subjects.id')
            ->where('user_subject.id_user', $id)
            ->get();

        return view('user.student.score')->with(compact('data'));
    }

    public function viewResource(): Renderable
    {
        $data = Auth::guard()->user()->id;
        $user = User::find($data);
        $data = $user->subjects()->pluck('id_sub');
        $data = SubjectResource::query()
            ->join('subjects', 'subjects.id', '=', 'subject_resource.subject_id')
            ->join('resources', 'resources.id', '=', 'subject_resource.resource_id')
            ->whereIn('subject_resource.subject_id', $data)
            ->get();

        return view('user.student.resource')->with(compact('data'));
    }

    public function viewRevision(): Renderable
    {
        $data = Auth::guard()->user()->id;
        $user = User::find($data);
        $data = $user->subjects()->pluck('id_sub');
        $data = ClassLopHoc::query()
            ->join('subjects', 'subjects.id', '=', 'classes.id_subject')
            ->whereIn('id_subject', $data)
            ->get();

        return view('user.student.revision')->with(compact('data'));
    }
}
