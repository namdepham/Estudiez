@extends('user.layouts.master')
@section('title', 'View score')
@section('main-content')
    <div class="container" style="margin-top:100px; margin-right: 120px">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="#" class="btn btn-primary btn-xs pull-right">Your Score</a>
                <tr>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Score</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                @foreach($data as $row)
                <tr >
                    <td>1</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->score }}</td>
                    <td class="text-center" style="color: red; font-weight: bold" bgcolor="aqua">
                        {{ $row->score > 4 ? 'PASS':'FAILED' }}
                    </td>
                @endforeach
            </table>
        </div>
    </div>
@endsection
