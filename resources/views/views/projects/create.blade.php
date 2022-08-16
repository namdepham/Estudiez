@extends('admin::layouts.master')

@section('title', 'Add Project')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- add category -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Project</h3>
                        </div>
                        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="card-body card-block">
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="name" class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name category" class="form-control">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="image" class="form-control-label">Image</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="file" id="image" name="image" value="{{ old('image') }}" lass="form-control">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
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
