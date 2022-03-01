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
                        <th>action</th>
                        <th>action</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><img width="100" src="{{ asset('uploads/products/'. $product->image) }}" alt=""></td>

                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop