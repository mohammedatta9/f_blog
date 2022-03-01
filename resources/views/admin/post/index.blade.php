 @extends('admin.master')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ ($post->category) ? $post->category->name : 'Uncategories' }}</td>
                        <td><img width="100" src="{{ asset('uploads/'. $post->image) }}" alt=""></td>
                        <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
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
                @stop
