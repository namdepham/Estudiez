@extends('admin::layouts.master')

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
                                <h3>Edit category</h3>
                            </div>
                            <form action="{{ route('admins.update',$data) }} " method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Name</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="name" name="name"
                                                   placeholder="Name category" class="form-control" value="{{$data->name}}">
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Password</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="password" id="name" name="password"
                                                   placeholder="Password" class="form-control" value="{{$data->password}}">
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Email</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="email" id="name" name="email"
                                                   placeholder="Email" class="form-control" value="{{$data->email}}">
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Phone</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="name" name="phonenumber"
                                                   placeholder="Phone number" class="form-control" value="{{$data->phonumber}}">
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
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
