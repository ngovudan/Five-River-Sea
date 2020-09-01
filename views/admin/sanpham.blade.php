
@extends('layouts.master')
@section('title')
    <p class="navbar-brand">Sản phẩm</p>
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
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="title">SẢN PHẨM</h3>
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
                        @foreach($innercat as $innercats)
                        @foreach($productt as $products)
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td id="editt">{{ $products->tensanpham }}</td>
                            <td>{{ $products->gia }}</td>
                            <td>{{ $products->soluong }}</td>
                            <td>{{ $products->tennguoiban }}</td>
                            <td style="width: 150px;">{{ $products->mota }}</td>
                            <td>{{ $innercats->nameCategory }}</td>
                            <td><strong>{{$products->trangthai==1?"Đã duyệt":"Chưa duyệt"}}</strong></td>
                            <td>{{$products->thanhpho}}</td>
                            <td>{{$products->baocao}}</td>
                            <td style="width: 100px; height: 150px;"><img src="{{asset('images')}}/{{ $products->hinhanh }}" alt="" srcset=""></td>
                            <td><a href="#">Thông tin chi tiết</a></td>
                            <td><a href="#">Xóa</a></td>
                            <td><a href="/admin/upduyet/{{ $products-> id}}" class="btn btn-primary">Duyệt</a></td>
                            <td><a href="/admin/koduyet/{{ $products-> id}}" class="btn btn-primary">Bỏ Duyệt</a></td>
                            
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                        $('#editt').hover(
                            function(){
                                $(this).append($('<h6 style="position: relative;"><a href="#">Chỉnh sửa chi tiết</a></h6>'));
                            }, function(){
                                $(this).find('h6').last().remove();
                            }
                        );
                    });
                </script>
                
            </div>
            </div>
        </div>
    </div>
@endsection