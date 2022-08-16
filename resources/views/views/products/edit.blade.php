@extends('admin::layouts.master')

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
                        <form action="{{ route('products.update', $data) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                                        <input type="text" id="name" name="name"
                                               placeholder="Name category" class="form-control" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="description" class="form-control-label">Description</label>
                                    </div>
                                    <div class="col-md-5">
                                        <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control">{{$data->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="price" class="form-control-label">Price</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="number" id="price" name="price" class="form-control" value="{{$data->price}}">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="image" class="form-control-label">Image</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="file" id="image" name="image" class="form-control">
                                        <img src="{{asset('storage/'.$data->image)}}">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="status" class="form-control-label">Status</label>
                                    </div>
                                    <div class="col-md-5">
                                        <select required="required" class="form-control" name="status">
                                           @if($data->status == 1)
                                                <option value="1" checked>In stock</option>
                                                <option value="2">Out of stock</option>

                                            @else
                                                <option value="2" checked>Out of stock</option>
                                                <option value="1">In stock</option>
                                            @endif
                                        </select>
{{--                                        <input type="number" id="status" name="status" class="form-control" value="{{$data->status}}" max="2" min="1" step="1">--}}
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
