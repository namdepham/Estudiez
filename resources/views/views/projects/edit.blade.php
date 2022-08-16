@extends('admin::layouts.master')

@section('title', 'Edit Project')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- add category -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Project</h3>
                        </div>
                        <form action="{{ route('projects.update', $project) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PATCH')
                            <div class="card-body card-block">
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="name" class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="name" name="name"  value="{{ old('name', $project->name) }}"
                                               placeholder="Name category" class="form-control">
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
                                        <input type="file" id="image" name="image" class="form-control">
                                        <img src="/storage/{{ $project->image }}" alt="" height="100px" width="100px">
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
