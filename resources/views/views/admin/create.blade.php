@extends('admin::layouts.master')

@section('title', 'Add admin')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- add category -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Add Admin</h3>
                            </div>
                            <form action=" {{ route('admins.store') }} " method="post" class="form-horizontal" >
                                @csrf
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Name</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="name" name="name" placeholder="Name admin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="password" class="form-control-label">Password</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="password" name="password" id="description" rows="9" placeholder="Password..." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="email" class="form-control-label">Email</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="abc@gmail.com">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="phonenumber" class="form-control-label">Phonenumber</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="phonenumber" name="phonenumber" class="form-control">
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

