<?php

namespace App\Http\Controllers\User;

use App\Constants\UserType;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSubject;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function searchChildren()
    {
        return view('user.student.search');
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $data = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->where('type', '=', UserType::STUDENT)
            ->get();

        // Return the search view with the resluts compacted
        return view('user.student.list', compact('data'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewDetail(int $id)
    {
        $data = UserSubject::query()
            ->join('subjects', 'user_subject.id_sub', '=', 'subjects.id')
            ->where('user_subject.id_user', $id)
            ->get();

        return view('user.student.score')->with(compact('data'));
    }
}
