@extends('admin.layouts.master')

@section('title', 'Update classes')

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
                                <h3>Add classes</h3>
                            </div>
                            <form action=" {{ route('class.update') }} " method="post" class="form-horizontal">
                                @method('put')
                                @csrf
                                <div class="card-body card-block">
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="name" class="form-control-label">Subject</label>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="form-control" name="id_subject">
                                                @foreach($data as $row)
                                                    <option value="{{ $row->id }}"> {{$row->name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="content" class="form-control-label">Note</label>
                                        </div>
                                        <div class="col-md-5">
                                            <textarea name="note" id="content" rows="9" placeholder="Content..." class="form-control" >{{ $dataClass->note }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="content" class="form-control-label">Start date</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="date" name="started_at" value="{{ $dataClass->started_at }}"/>
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center">
                                        <div class="col-md-1">
                                            <label for="content" class="form-control-label">End date</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control" type="date" name="ended_at" value="{{ $dataClass->ended_at }}"/>
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