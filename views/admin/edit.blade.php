
@extends('layouts.master')
@section('title')
    
@endsection
<!-- Phần menu -->
@section('dashboard')
<li>
    <a href="/admin">
      <i class="now-ui-icons design_app"></i>
      <p>Dashboard</p>
    </a>
</li>
@endsection

@section('page')
<li>
    <a href="/admin/page">
        <i class="now-ui-icons education_atom"></i>
        <p>Bài viết</p>
    </a>
</li>
@endsection
@section('sanpham')
<li class="active">
    <a href="/admin/product">
        <i class="now-ui-icons shopping_box"></i>
        <p>Sản phẩm</p>
    </a>
</li>
@endsection

@section('gallery')
<li>
  <a href="/admin/gallery">
      <i class="now-ui-icons ui-1_bell-53"></i>
      <p>Thư viện</p>
  </a>
</li>
@endsection

@section('gallery')
<li>
    <a href="/admin/gallery">
        <i class="now-ui-icons ui-1_bell-53"></i>
        <p>Thư viện</p>
    </a>
</li>
@endsection

@section('user')
<li>
  <a href="/admin/user">
    <i class="now-ui-icons users_single-02"></i>
    <p>User Profile</p>
  </a>
</li>
@endsection
<!-- 
@section('table')
<li>
    <a href="/admin/table">
      <i class="now-ui-icons design_bullet-list-67"></i>
      <p>Table List</p>
    </a>
</li>
@endsection -->

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="container">
<div class="card">
        <div class="card-header">
          Create flight
        </div>
        <div class="card-body">
          <form method="post" action="">
          @csrf
          <div class="form-group">
                <label for="name">Id user</label>
                <input type="text" class="form-control" name="origin" value="" />
            </div>
            <div class="form-group">
                <label for="name">tensanpham</label>
                <input type="text" class="form-control" name="origin" value="" />
            </div>
            <div class="form-group">
                <label for="des">idCategory</label>
                <input type="text" class="form-control" name="destination" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">tennguoiban</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">mota</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">hinhanh</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">gia</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">phone</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">thanhpho</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            <div class="form-group">
                <label for="dur">quan</label>
                <input type="number" class="form-control" name="duration" value=""/>
            </div>
            
            <button type="submit" class="btn btn-block btn-danger">Update</button>
          </form>
        </div><!--end card body-->
      </div><!--end card-->
      </div>
      @endsection