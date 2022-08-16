@extends('admin.layouts.master')

@section('title', 'Student')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Student List</h3>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr  class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Average</th>
                                    <th>Avatar</th>
                                    <th>Status</th>
                                    <th colspan="2"  class="text-center">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $row)
                                    <tr  class="text-center">
                                        <td>{{++$key}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <a href=" {{ route('list.mark', $row->id) }}">List mark</a>
                                        </td>
                                        <td>
                                            @if(  $row->avatar == null)
                                                Photo is null
                                            @else
                                                <img style="height: 100px" src="{{asset('storage/'.$row->avatar)}}">
                                            @endif
                                        </td>
                                        <td>
                                            {{ $dataAverage >= 4 ? 'PASS': 'FAILED' }}
                                        </td>
                                        <td>
                                            <a href="{{ route('student.edit', $row->id) }}" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                        </td>
                                        <td>
                                            @if(Auth::guard('admin')->user()->type == \App\Constants\AdminType::SUPER_ADMIN)
                                            <form action ="{{ route('student.destroy', $row->id) }}" method="POST">
                                                @method ('DELETE')
                                                @csrf
                                                <button  type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                            @else
                                                You don't have rights to do this!
                                            @endif
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
