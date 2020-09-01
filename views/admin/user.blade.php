@extends('layouts.master')
@section('title')
    <p class="navbar-brand">User</p>
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
<li class="active">
  <a href="/admin/user">
    <i class="now-ui-icons users_single-02"></i>
    <p>User Profile</p>
  </a>
</li>
@endsection

@section('table')
<li>
    <a href="/admin/table">
      <i class="now-ui-icons design_bullet-list-67"></i>
      <p>Table List</p>
    </a>
</li>
@endsection
<!-- Hết menu -->
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
    <div class="card">
        <div class="card-header ">
            <h5 class="title">User</h5>
            <div class="col-md-2" style="margin-left: -15px">
                <a class="btn btn-primary btn-block">Thêm người mới</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table fonts-size">
                
                <thead>
                    <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <th>Họ và tên</th>
                        <th>Địa chỉ</th>
                        <th>Liên hệ</th>
                        <th>Ngày tham gia</th>
                        <th>Cấp bậc</th>
                        <th>Thành phố</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                    <tr>
                        <th><input type="checkbox" name="{{$users->iduser}}" id=""></th>
                        <th>{{$users->hoten}}</th>
                        <th>{{$users->diachi}}</th>
                        <th>{{$users->lienhe}}</th>
                        <th>{{$users->ngaythamgia}}</th>
                        <th>{{$users->capbac}}</th>
                        <th>{{$users->thanhpho}}</th>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
        <div id="nav-neo" class="col-md-12">
            {{$user -> links()}};
        </div>            
        <script>
            $('#nav-neo nav ul').addClass('justify-content-center');
        </script>
    </div>
</div>
</div>
@endsection