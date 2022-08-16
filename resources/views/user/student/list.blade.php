@extends('user.layouts.master')
@section('title', 'View score')
@section('main-content')
    <div class="container" style="margin-top: 100px;margin-left: 50%">
        <div class="flex">
            <span class="__text">Tìm tên sinh viên</span>
            <form>
                <input style="float: left; width: 40%" class="StudentSrc form-control" type="name"
                       placeholder="Nhập tên sinh viên" style="width: 40%">
                <input type="submit" class="btn btn-success"/>
            </form>
        </div>
    </div>
    <div class="container" style=" margin-top:50px; margin-right: 50px ">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </tr>
                </thead>
                @foreach($data as $row => $key)
                    <tr>
                        <td> {{ ++$row }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->email }}</td>
                        <td><img style="height: 100px" src="{{asset('storage/'.$key->avatar)}}"></td>
                        <td>
                            <a href="{{ route('view.details', $key->id) }}">View</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
