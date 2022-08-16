@extends('admin::layouts.master')

@section('title', 'Product')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Product</h3>
                            <div class="table-data__tool-right">
                                <a href="{{ route('products.create') }}" class="btn btn-outline-success">
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
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th colspan="2"  class="text-center">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $row)
                                <tr  class="text-center">
                                    <td>{{++$key}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->name}}</td>
                                    <td><img src="{{asset('storage/'.$row->image)}}"></td>
                                    <td>{{$row->price}}</td>
                                    <td>
                                        @if($row->status ==1 )
                                            <span class="status--process">In Stock</span>
                                        @else
                                            <span class="status--denied">Out of Stock</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('products.edit',$row->id) }}" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                    <td>
                                        <form action ="{{ Route('products.destroy', $row) }}" method="POST">
                                            @method ('DELETE')
                                            @csrf
                                            <button  type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
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
