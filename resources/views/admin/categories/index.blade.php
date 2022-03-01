@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All CAtegories</h1>
    </div>

    <style>
        .table td, .table th {vertical-align: middle}
    </style>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop