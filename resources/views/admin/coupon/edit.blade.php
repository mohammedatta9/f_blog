@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit coupon</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            @include('admin.includes.errors')
            <form action="{{ route('coupons.update', $coupon->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" placeholder="name" name="name">
                </div>
                <div class="form-group">
                    <label>product</label>
                    <select class="form-control" name="product_id">
                        <option disabled selected>Choose product</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>start date</label>
                    <input type="date" class="form-control" placeholder="start date" name="start_date">
                </div>
                <div class="form-group">
                    <label>end date</label>
                    <input type="date" class="form-control" placeholder="end date" name="end_date">
                </div>
                <div class="form-group">
                    <label>amount</label>
                    <input type="number" class="form-control"   name="amount">
                </div>
                <div class="form-group">
                    <label>minimum amount</label>
                    <input type="number" class="form-control"   name="minimum_amount">
                </div>
                <div class="form-group">
                    <label>quantity</label>
                    <input type="number" class="form-control"   name="quantity">
                </div>
                <div class="form-group">
                    <label>minimum quantity</label>
                    <input type="number" class="form-control"   name="minimum_quantity">
                </div>
                <div class="form-group">
                    <label>type pereot</label>
                    <select class="form-control" name="type_pereot">
                        <option disabled selected>Choose type pereot</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label>type status number</label>
                    <select class="form-control" name="type_status_number">
                        <option disabled selected>Choose type status number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>type user</label>
                    <select class="form-control" name="user_id">
                        <option disabled selected>Choose user</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <label>code</label>
                    <input type="text" class="form-control" placeholder="code" name="code">
                </div>
                <div class="form-group">
                    <label>valid for new customer</label>
                    <select class="form-control" name="valid_for_newcustomer">
                        <option disabled selected>Choose valid for new customer</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>valid for old</label>
                    <select class="form-control" name="valid_for_old">
                        <option disabled selected>Choose valid for old</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>valid for all</label>
                    <select class="form-control" name="valid_for_all">
                        <option disabled selected>Choose valid for all</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <button class="btn btn-info px-5 btn-lg">Update</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@stop