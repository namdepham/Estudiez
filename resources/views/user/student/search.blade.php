@extends('user.layouts.master')
@section('title', 'View score')
@section('main-content')
    <div class="container" style="margin-top: 100px;margin-left: 50%">
        <div class="flex">
            <span class="__text">Tìm tên sinh viên</span>
            <form action="{{ route('search') }}" method="post">
                @csrf
                <input class="StudentSrc form-control" name="name" placeholder="Nhập tên sinh viên" style="width: 40%">
                <input type="submit" class="btn btn-success"/>
            </form>
        </div>
    </div>
@endsection
