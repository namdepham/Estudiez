@extends('admin::layouts.master')

@section('title', 'Add Product')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- add category -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add product</h3>
                        </div>
                        <form action=" {{ route('products.store') }} " method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body card-block">
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="name" class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="name" name="name"
                                               placeholder="Name category" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="description" class="form-control-label">Description</label>
                                    </div>
                                    <div class="col-md-5">
                                        <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="price" class="form-control-label">Price</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="number" id="price" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="image" class="form-control-label">Image</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="file" id="image" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        Category
                                    </div>
                                    <div class="col-md-5" >
                                            @foreach($category as $line)
                                                <input type="checkbox" name="product[]" value="{{$line->id}}"/> &nbsp;{{$line->name}} <br>
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
