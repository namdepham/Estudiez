<?php

namespace App\Http\Controllers\Admin;

use App\Constants\UserType;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserSubject;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController
{
    /**
     * list subject.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data =  User::query()
            ->paginate(5);
        $dataAverage = UserSubject::query()->groupBy('id_user')->average('score');
        return view('admin.student.list')->with(compact('data','dataAverage'));
    }

    /**
     * Show detail resource.
     *
     * @param int $id
     * @return Renderable
     */
    public function show(int $id): Renderable
    {

        $student = User::findOrFail($id);
        $dataSubject = Subject::all();

        return view('admin.student.edit')->with(compact('student', 'dataSubject'));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $student = User::find($id);
        $idSubjectRequests =$request->get('subject');
        $idSubjects =  $student->subjects()->pluck('id_sub')->toArray();

        $attachIds = array_diff($idSubjectRequests, $idSubjects);
        $detachIds = array_diff($idSubjects, $idSubjectRequests);

        if ($attachIds)
        {
            $student->subjects()->attach($attachIds);
        }
        if($detachIds)
        {
            $student->subjects()->detach($detachIds);
        }

        return redirect()->route('student.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('student.index');
    }

    /**
     * @param int $id
     * @return Renderable
     *
     */
    public function listMark(int $id): Renderable
    {
        $data = DB::table('user_subject')
            ->join('subjects', 'subjects.id', '=', 'id_sub')
            ->join('users', 'users.id','=', 'id_user')
            ->where('id_user', $id)
            ->select('user_subject.*', 'subjects.name as subject' , 'users.name')
            ->get();

        return view('admin.score.list')->with(compact('data'));
    }


}
