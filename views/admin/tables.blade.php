@extends('layouts.master')
@section('title')
    <p class="navbar-brand">Sản phẩm</p>
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
<li>
    <a href="/admin/page">
        <i class="now-ui-icons education_atom"></i>
        <p>Bài viết</p>
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

@section('sanpham')
<li>
    <a href="/admin/product">
        <i class="now-ui-icons shopping_box"></i>
        <p>Sản phẩm</p>
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

@section('table')
<li class="active">
    <a href="/admin/table">
      <i class="now-ui-icons design_bullet-list-67"></i>
      <p>Table List</p>
    </a>
</li>
@endsection

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
            <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead class=" text-primary">
                    <th>
                    Name
                    </th>
                    <th>
                    Country
                    </th>
                    <th>
                    City
                    </th>
                    <th class="text-right">
                    Salary
                    </th>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        Dakota Rice
                    </td>
                    <td>
                        Niger
                    </td>
                    <td>
                        Oud-Turnhout
                    </td>
                    <td class="text-right">
                        $36,738
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Minerva Hooper
                    </td>
                    <td>
                        Curaçao
                    </td>
                    <td>
                        Sinaai-Waas
                    </td>
                    <td class="text-right">
                        $23,789
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Sage Rodriguez
                    </td>
                    <td>
                        Netherlands
                    </td>
                    <td>
                        Baileux
                    </td>
                    <td class="text-right">
                        $56,142
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Philip Chaney
                    </td>
                    <td>
                        Korea, South
                    </td>
                    <td>
                        Overland Park
                    </td>
                    <td class="text-right">
                        $38,735
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Doris Greene
                    </td>
                    <td>
                        Malawi
                    </td>
                    <td>
                        Feldkirchen in Kärnten
                    </td>
                    <td class="text-right">
                        $63,542
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Mason Porter
                    </td>
                    <td>
                        Chile
                    </td>
                    <td>
                        Gloucester
                    </td>
                    <td class="text-right">
                        $78,615
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Jon Porter
                    </td>
                    <td>
                        Portugal
                    </td>
                    <td>
                        Gloucester
                    </td>
                    <td class="text-right">
                        $98,615
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Name
                            </th>
                            <th>
                            Country
                            </th>
                            <th>
                            City
                            </th>
                            <th class="text-right">
                            Salary
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                Dakota Rice
                            </td>
                            <td>
                                Niger
                            </td>
                            <td>
                                Oud-Turnhout
                            </td>
                            <td class="text-right">
                                $36,738
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Minerva Hooper
                            </td>
                            <td>
                                Curaçao
                            </td>
                            <td>
                                Sinaai-Waas
                            </td>
                            <td class="text-right">
                                $23,789
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Sage Rodriguez
                            </td>
                            <td>
                                Netherlands
                            </td>
                            <td>
                                Baileux
                            </td>
                            <td class="text-right">
                                $56,142
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Philip Chaney
                            </td>
                            <td>
                                Korea, South
                            </td>
                            <td>
                                Overland Park
                            </td>
                            <td class="text-right">
                                $38,735
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Doris Greene
                            </td>
                            <td>
                                Malawi
                            </td>
                            <td>
                                Feldkirchen in Kärnten
                            </td>
                            <td class="text-right">
                                $63,542
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Mason Porter
                            </td>
                            <td>
                                Chile
                            </td>
                            <td>
                                Gloucester
                            </td>
                            <td class="text-right">
                                $78,615
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Jon Porter
                            </td>
                            <td>
                                Portugal
                            </td>
                            <td>
                                Gloucester
                            </td>
                            <td class="text-right">
                                $98,615
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection