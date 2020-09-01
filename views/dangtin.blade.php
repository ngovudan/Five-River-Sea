@extends('layouts._layout')
@section('content')
@if(!session('user'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="title align-middle">LOGIN</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="text-align: center">
                        <form action="/login" class="text-center justify-content-center">
                            <label for="">Email:</label><br>
                            <input type="text" id="forms" placeholder="Điền email vào đây..." name="email" style="padding: 5px; width: 300px;"><br>
                            @if($errors -> has('email'))
                                <span class="help-block">
                                    <strong>{{$errors -> first('email')}}</strong>
                                </span><br>
                            @endif 
                            <label for="">Password:</label><br>
                            <input type="password" name="password" id="forms" placeholder="Điền password vào đây..." id="" style="padding: 5px; width: 300px;"><br>
                            @if($errors -> has('password'))
                                <span class="help-block">
                                    <strong>{{$errors -> first('password')}}</strong>
                                </span><br>
                            @endif 
                            <a href="#" style="padding: 5px;">Quên mật khẩu?</a>
                            <button type="submit" id="submitt" class="btn btn-primary" style="margin-top: 5px; margin-left: 120px;">Login</button>
                        </form><br>
                        <a href="/createuser" class="btn btn-success col-md-8">Tạo tài khoản</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="blog">
    
        <div class="section_container">
            <div class="container">
                <h1>Đăng Tin Của Bạn</h1>
                <form action="{{ route('addimage')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Chọn danh mục đăng tin</label>
                        <select class="form-control" id="" name="danhmuc" id="danhmuc">
                            <option disabled>-- Chọn danh mục --</option>
                            @foreach($listcate as $cate)
                                <option value="{{ $cate->idCategory }}">{{ $cate->nameCategory }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="hidden" class="form-control" placeholder="" value="{{ session('user')->iduser }}" name="id_user">
                    </div>
                    <div class="form-group">
                        <label for="">Thành Phố</label>
                        <input type="text" class="form-control" placeholder="" name="thanhpho">
                        @if($errors->has('thanhpho'))
                            <p>Vui lòng nhập thành phố- {{$errors->first('thanhpho')}}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="">Quận</label>
                        <input type="text" class="form-control" placeholder="" name="quan">
                        @if($errors->has('quan'))
                            <p>Vui lòng nhập quận - {{$errors->first('quan')}}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="name" placeholder="VD: Quần lửng nữ màu kem size M">
                        @if($errors->has('name'))
                            <p>Vui lòng
nhập tiêu đề - {{$errors->first('name')}}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tên người bán</label>
                        <input type="text" class="form-control" placeholder="" name="tennguoiban">
                        
                    </div>
                    <div class="form-group">
                        <label for="">Gia</label>
                        <input type="text" class="form-control" placeholder="" name="gia">
                        @if($errors->has('gia'))
                            <p>Vui lòng nhập giá - {{$errors->first('gia')}}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" placeholder="" name="phone">
                        @if($errors->has('phone'))
                            <p>Vui lòng nhập số điện thoại - {{$errors->first('phone')}}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                        @if($errors->has('image'))
                            <p>Bạn chưa chọn hình ảnh - {{$errors->first('image')}}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả chi tiết</label>
                    <textarea class="form-control _16tLs7dZ58oB3l8shll3x8" placeholder="Viết tiếng việt có dấu
                    - Loại quần áo
                    - Nam/nữ
                    - Kích cỡ: S,M,L
                    - Nhãn hiệu
- Chất liệu, màu sắc" name="post" rows="12" id="" maxlength="1000"></textarea>
                    @if($errors->has('post'))
                            <p>Vui lòng nhập mô tả chi tiết - {{$errors->first('post')}}</p>
                            @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Save data</button>
                </form>
                <!--<form action="{{ route('addimage')}}" method="post">
                    <div class="form-group">
                        <label>Chọn danh mục đăng tin</label>
                        <select class="form-control" id="" name="danhmuc" id="danhmuc">
                            <option disabled>-- Chọn danh mục --</option>
                            @foreach($listcate as $cate)
                                <option value="{{ $cate->idCategory }}">{{ $cate->nameCategory }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chọn tỉnh, thành phố</label>
                        <select class="form-control dynamic" id="" name="thanhpho" id="thanhpho" data-dependent="quan">
                            <option value="">-- Chọn tỉnh, thành phố --</option>
                            <option value="HCM">Thành phố HCM</option>
                            <option value="">Hà nội</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quận, huyện, thị xã</label>
                        <select class="form-control dynamic" id="" name="quan" id="quan" data-dependent="phuong">
                            <option value="">-- Chưa chọn quận, huyện --</option>
                            <option value="">Quận 1</option>
                            <option value="">Quận 2</option>
                            <option value="">Quận 3</option>
                            <option value="">Quận 4</option>
                            <option value="">Quận 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phường, xã, thị trấn</label>
                        <select class="form-control" id="" name="phuong" id="phuong">
                            <option value="">-- Chưa chọn quận, xã --</option>
                            <option value="">Phường 1</option>
                            <option value="">Phường 2</option>
                            <option value="">Phường 3</option>
                            <option value="">Phường 4</option>
                            <option value="">Phường 5</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" multiple>
                            <label class="custom-file-label"></label>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label>Tên người bán</label>
                        <input type="string" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>Hình thức</label>
                        <select name="hinhthuc" id="">
                            <option value=""></option>
                            <option value="">Tôi bán</option>
                            <option value="">Tôi mua</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="title" placeholder="VD: Quần lửng nữ màu kem size M">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả chi tiết</label>
                    <textarea class="form-control _16tLs7dZ58oB3l8shll3x8" placeholder="Viết tiếng Việt có dấu
                    - Loại quần áo
                    - Nam/nữ
                    - Kích cỡ: S,M,L
                    - Nhãn hiệu
                    - Chất liệu, màu sắc" name="detail" rows="12" id="" maxlength="1000"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-black">Đăng Bán</button>
                        
                </form>
                !-->
                
            </div>
        </div>
    </div>
@endif
@endsection