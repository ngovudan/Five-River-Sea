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
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Create blog</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('postFile')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <input type="file" class="form-control" name="imgB"/>
                        </div>
                        <div class="form-group">
                            <label for="des">Name</label>
                            <input type="text" class="form-control" name="nameB"/>
                        </div>
                        <div class="form-group">
                            <label for="des">Description</label>
                            <input type="text" class="form-control" name="descriptionB"/>
                        </div>
                        <div class="form-group">
                            <label for="des">Content</label>
                            <textarea id="contentB" type="text" class="form-control" name="contentB"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dur">Date</label>
                            <input type="date" class="form-control" name="dayB"/>
                        </div>
                        <div class="form-group">
                            <label for="des">View</label>
                            <input type="number" class="form-control" name="view"/>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-block btn-danger">Create blog</button>
                    </form>
                </div><!--end card body-->

                <div class="card-footer">
                @if(count($errors->all()) >0 )
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
            CKEDITOR.replace( 'contentB' );
        </script>
@endsection
