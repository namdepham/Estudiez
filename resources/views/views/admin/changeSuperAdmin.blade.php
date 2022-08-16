@extends('admin::layouts.master')

@section('title', 'Chang Admin Status')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- add category -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Change Super Admin</h3>
                            </div>
{{--                            <form action="{{ route('changeSuperAdmin.update',$data) }} " method="post" class="form-horizontal">--}}
                                @method('PUT')
                                @csrf
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Role</label>
                                        </div>
{{--                                        @foreach($data as $row)--}}
                                        <div class="col-md-5">
                                            <input type="text" id="name" name="name"
                                                   placeholder="Name category" class="form-control" value="{{$data->role_id}}">
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
{{--                                        @endforeach--}}
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

