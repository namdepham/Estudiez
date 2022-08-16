@extends('admin.layouts.master')

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
                                <h3>Add lines</h3>
                            </div>
                            <form action=" {{ route('line.store') }} " method="post" class="form-horizontal">
                                @csrf
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Phone</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="name" name="phonenumber"
                                                   placeholder="Phonenumber" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="content" class="form-control-label">Name</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="name" name="name"
                                                   placeholder="Name" class="form-control">                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="content" class="form-control-label">Subject</label>
                                        </div>
                                        <div class="col-md-5" >
                                            @foreach($dataSubject as $subject)
                                                <input type="checkbox" name="subject[]" value="{{$subject->id}}"/> &nbsp;{{$subject->name}} <br>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
