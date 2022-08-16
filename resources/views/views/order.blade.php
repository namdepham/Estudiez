@extends('admin::layouts.master')

@section('title', 'Order')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Order</h3>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $key => $order)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->code }}</td>
                                        <td>
                                            @if($order->status == 0)
                                                <span class="status--process">Processed</span>
                                            @else
                                                <span class="status--denied">Denied</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($order->status == 1)
                                            <a href="{{ route('active_order', $order->id) }}" class="btn btn-outline-success">Processed</a>
                                            @else
                                            @endif
                                            <a href="{{ route('detail_order', $order->id) }}" class="btn btn-outline-primary"><i class="fa fa-list"></i> Detail</a>
{{--                                            <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $orders->links() }}
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
