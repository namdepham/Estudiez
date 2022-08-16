@extends('admin::layouts.master')

@section('title', 'Add Category')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- add category -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add category</h3>
                        </div>
                        <form action="{{ route('categories.store') }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="card-body card-block">
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        <label for="name" class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="name" name="name"
                                               placeholder="Name category" class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group justify-content-center">
                                    <div class="col-md-1">
                                        Product
                                    </div>
                                    <div class="col-md-5" >
                                        @foreach($product as $line)
                                            <input type="checkbox" name="category[]" value="{{$line->id}}"/>&nbsp; {{$line->name}} <br>
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
