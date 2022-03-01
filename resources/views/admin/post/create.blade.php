@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Post</h1>
    </div>

     <!-- Content Row -->
     <div class="row">
        <div class="col-12">
        @include('admin.includes.errors')
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Excerpt</label>
                    <input type="text" class="form-control" placeholder="Title" name="excerpt">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" placeholder="Body" rows="5" name="body"></textarea>
                </div>

                <button class="btn btn-success px-5 btn-lg">Save</button>
            </form>


</div>
<!-- /.container-fluid -->
@stop