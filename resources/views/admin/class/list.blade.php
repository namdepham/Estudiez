@extends('admin.layouts.master')

@section('title', 'Class')

@section('content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Subjects</h3>
                            <div class="table-data__to  ol-right">
                                <a href="{{ route('class.create') }}" class="btn btn-outline-success">
                                    <i class="zmdi zmdi-plus mr-1"></i>Add class
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr  class="text-center">
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Note</th>
                                    <th colspan="3"  class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $row)
                                    <tr  class="text-center">
                                        <td>{{++$key}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->started_at}}</td>
                                        <td>{{$row->ended_at}}</td>
                                        <td>{{$row->note}}</td>
                                        <td>
                                            <form action ="{{ route('class.destroy', $row) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button  type="submit" class="btn btn-outline-danger">Cancel</button>
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

