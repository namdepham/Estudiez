@extends('admin.layouts.master')

@section('title', 'Resource')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Resource List</h3>
                            <div class="table-data__tool-right">
                                <a href="{{ route('resource.create') }}" class="btn btn-outline-success">
                                    <i class="zmdi zmdi-plus mr-1"></i>Add more resources
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr  class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Content</th>
                                    <th colspan="2"  class="text-center">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $row)
                                    <tr  class="text-center">
                                        <td>{{++$key}}</td>
                                        <td>{{$row->type}}</td>
                                        <td>{{$row->content}}</td>
                                        <td>
                                            <a href="{{ route('resource.edit', $row) }}" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                        </td>
                                        <td>
                                            <form action ="{{ route('resource.destroy', $row->id) }}" method="POST">
                                                @method ('DELETE')
                                                @csrf
                                                <button  type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{$data->links()}}
                            </div>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
