@extends('admin.layouts.master')

@section('title', 'Edit Admin')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- add category -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit admin</h3>
                            </div>
                            <form action="{{ route('admin.update', $data) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Name</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="type" name="name"
                                                   placeholder="Name " class="form-control" value="{{$data->name}}">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Email</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="type" name="email"
                                                   placeholder="Name email" class="form-control" value="{{$data->email}}">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Phone</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="type" name="phonenumber"
                                                   placeholder="Name phonenumber" class="form-control" value="{{$data->phonenumber}}">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Avatar</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="file" id="" name="avatar"
                                                   placeholder="Avatar" class="form-control" value="{{$data->avatar}}">
                                            <img src="{{asset('storage/'.$data->avatar)}}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- END add category -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
