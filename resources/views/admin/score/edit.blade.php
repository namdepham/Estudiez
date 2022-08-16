@extends('admin.layouts.master')

@section('title', 'Update score')

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
                                <h3>Update score</h3>
                            </div>
                            <form action=" {{ route('update.mark', $data) }}"  enctype="multipart/form-data" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            Score
                                        </div>
                                        <div class="col-md-5" >
                                            <input type="number" name="score" min="0" max="10" step="0.5" value="{{ $data->score }}"/>
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            Status
                                        </div>
                                        <div class="col-md-5" >
                                            <input type="number" name="status" min="1" max="2" step="1" value="{{ $data->status }}"/>
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
