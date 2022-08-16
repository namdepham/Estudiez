@extends('user.layouts.master')
@section('title', 'View revision')
@section('main-content')
    <div class="container" style="float:;margin-top:100px; margin-right: 120px">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="#" class="btn btn-primary btn-xs pull-right">Your Score</a>
                <tr>
                    <th>ID</th>
                    <th>Subject Name</th>
                    <th>Start at</th>
                    <th>End at</th>
                    <th>Note</th>
                </tr>
                </thead>
                @foreach($data as $row => $key)
                    <tr >
                        <td> {{ ++$row }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->started_at }}</td>
                        <td>{{ $key->ended_at }}</td>
                        <td>{{ $key->note }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
