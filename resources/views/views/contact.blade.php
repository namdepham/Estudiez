@extends('admin::layouts.master')

@section('title', 'Contact')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Contact</h3>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $contact)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->content }}</td>
                                        <td>
                                            @if($contact->status == 1)
                                                <span class="status--denied">Denied</span>
                                            @else
                                                <span class="status--process">Processed</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($contact->status == 1)
                                                <a href="{{ route('contact.process', $contact) }}" class="btn btn-outline-success">Processed</a>
                                            @else

                                            @endif
                                            <a href="{{ route('contact.destroy', $contact) }}" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $data->links() }}
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
