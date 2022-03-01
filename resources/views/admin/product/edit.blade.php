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
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" placeholder="name" name="name">
                </div>
                <div class="form-group">
                    <label>details</label>
                    <input type="text" class="form-control" placeholder="details" name="details">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label>meta tags</label>
                    <input type="text" class="form-control" placeholder="meta tags" name="meta_tags">
                </div>

                <div class="form-group">
                    <label>model</label>
                    <input type="text" class="form-control" placeholder="model" name="model">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <option disabled selected>Choose Category</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select class="form-control" name="status">
                        <option disabled selected>Choose status</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>vender_id</label>
                    <select class="form-control" name="vender_id">
                        <option disabled selected>Choose vender_id</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>store_id</label>
                    <select class="form-control" name="store_id">
                        <option disabled selected>Choose store_id</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>weight</label>
                    <input type="number" class="form-control"   name="weight">
                </div>
                <div class="form-group">
                    <label>weight_class</label>
                    <input type="number" class="form-control"  name="weight_class">
                </div>


                <button class="btn btn-info px-5 btn-lg">Update</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop