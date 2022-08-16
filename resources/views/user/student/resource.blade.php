@extends('user.layouts.master')
@section('title', 'View resource')
@section('main-content')
    <div class="container" style="float:;margin-top:100px; margin-right: 120px">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="#" class="btn btn-primary btn-xs pull-right">Your Score</a>
                <tr>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Resource Type</th>
                    <th>Resource Content</th>
                </tr>
                </thead>
                @foreach($data as $row => $key)
                    <tr >
                        <td> {{ ++$row }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->type }}</td>
                        <td>{{ $key->content }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
