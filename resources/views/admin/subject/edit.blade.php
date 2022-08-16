@extends('admin.layouts.master')

@section('title', 'Edit Product')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- add category -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit product</h3>
                            </div>
                            <form action="{{ route('subject.update', $dataSubject) }}" method="post" class="form-horizontal">
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
                                            <input readonly type="text" id="name" name="name"
                                                   placeholder="Name category" class="form-control" value="{{$dataSubject->name}}">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            Resource
                                        </div>
                                        <div class="col-md-5" >
                                            @foreach($dataResource as $resource)
                                                <input  type="checkbox" name="resource[]" value="{{$resource->id}}"/> &nbsp;{{$resource->content}} <br>
                                            @endforeach
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
