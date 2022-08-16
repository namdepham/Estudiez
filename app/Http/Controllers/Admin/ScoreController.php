<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserSubject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function editMark(int $id)
    {
        $data = UserSubject::findOrFail($id);

        return view('admin.score.edit')->with(compact('data'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateMark(int $id, Request $request)
    {
        $data = UserSubject::findOrFail($id);
        $data->score = $request->input('score');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('student.index');
    }
}
