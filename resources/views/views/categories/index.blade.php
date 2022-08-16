@extends('admin::layouts.master')

@section('title', 'Category')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Category</h3>
                            <div class="table-data__tool-right">
                                <a href="{{ route('categories.create') }}" class="btn btn-outline-success">
                                    <i class="zmdi zmdi-plus mr-1"></i>Add item
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $key => $row)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>
                                        <div class="d-flex float-right">
                                            <a href="{{ route('categories.edit',$row->id) }}" class="btn btn-outline-primary mr-1"><i class="fa fa-edit"></i> Edit</a>
                                            <form action ="{{ Route('categories.destroy', $row) }}" method="POST">
                                                @method ('DELETE')
                                                @csrf
                                                <button  type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
