@extends('admin::layouts.master')

@section('title', 'Project')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Project</h3>
                            <div class="table-data__tool-right">
                                <a href="{{ route('projects.create') }}" class="btn btn-outline-success">
                                    <i class="zmdi zmdi-plus mr-1"></i>Add item
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $key => $project)
                                        <tr class="justify-content-center">
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td><img src="/storage/{{ $project->image }}" alt="" height="100px" width="100px"></td>
                                            <td>
                                                @if($project->status == null)
                                                    <span class="status--process">Processed</span>
                                                @else
                                                    <span class="status--denied">Denied</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex float-right">
                                                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-primary mr-1"><i class="fa fa-edit"></i> Edit</a>
                                                    <form action="{{ route('projects.destroy', $project) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $projects->links() }}
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
