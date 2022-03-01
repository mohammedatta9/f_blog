@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Post</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    <img width="150" src="{{ asset('uploads/'. $post->image) }}" alt="">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                        <option
                        value="{{ $category->id }}"
                        {{ $category->id == $post->category_id ? 'selected' : '' }}
                        {{-- {{ $category->id != $post->category_id ?: 'selected' }} --}}
                        >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Excerpt</label>
                    <input type="text" class="form-control" placeholder="Title" name="excerpt" value="{{ $post->excerpt }}">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" placeholder="Body" rows="5" name="body">{{ $post->body }}</textarea>
                </div>

                <button class="btn btn-info px-5 btn-lg">Update</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop