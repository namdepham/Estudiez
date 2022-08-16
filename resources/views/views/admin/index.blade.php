@extends('admin::layouts.master')

@section('title', 'Admin')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Admin</h3>
                            <div class="table-data__tool-right">
                                <a href="{{ route('admins.create') }}" class="btn btn-outline-success">
                                    <i class="zmdi zmdi-plus mr-1"></i>Add item
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr  class="text-center">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th colspan="3"  class="text-center">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $row)
                                    <tr  class="text-center">
                                        <td>{{++$key}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phonenumber}}</td>
                                        <td>
                                            <a href="{{ route('admins.edit',$row) }}" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                        </td>
                                        <td>
                                            <form action ="{{ Route('admins.destroy', $row) }}" method="POST">
                                                @method ('DELETE')
                                                @csrf
                                                <button  type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
{{--                                            @if((Auth::guard('admin')->user())->hasRole('super_admin'))--}}
{{--                                            <form action ="{{ Route('changeSuperAdmin.edit', $row) }}" method="POST">--}}
{{--                                                @method ('put')--}}
{{--                                                @csrf--}}
{{--                                                <button  type="submit" class="btn btn-outline-success">Update Admin</button>--}}
{{--                                            </form>--}}
{{--                                            @endif--}}
                                            <button><a href="{{ Route('changeSuperAdmin.edit', ['id'=>$row]) }}">Update Super Admin</a></button>
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

