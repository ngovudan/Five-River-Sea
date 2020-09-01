@extends('layouts.master')
@section('title')
    <p class="navbar-brand">Page</p>
@endsection
<!-- Menu -->
@section('dashboard')
<li>
    <a href="/admin">
      <i class="now-ui-icons design_app"></i>
      <p>Dashboard</p>
    </a>
</li>
@endsection

@section('page')
<li class="active">
    <a href="/admin/page">
        <i class="now-ui-icons education_atom"></i>
        <p>Bài viết</p>
    </a>
</li>
@endsection

@section('sanpham')
<li>
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

<!-- Hết menu -->

<!-- Content -->
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Bài viết</h5>
                    <a href="/admin/blog/Create" class="btn btn-primary">Tạo bài viết</a>
                </div>
                <div class="card-body">
                <table id="example" class="table table-hover">
                    <thead class="fonts-size">
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Người bán</th>
                            <th>Mô tả</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Thành phố</th>
                            <th>Báo cáo</th>
                            <th>Hình ảnh</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
