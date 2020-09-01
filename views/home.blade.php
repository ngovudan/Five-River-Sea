@extends('layouts._layout')
@section('content')
    <!-- Home -->
    <div class="boxes">
        <div class="section_container">
            <div class="container">
            <div class="banner1">
                <h2 class="text-white text-uppercase">Đảm bảo</h2>
                <h2 class="text-white text-uppercase">An toàn</h2>
                <h2 class="text-white text-uppercase">Uy tín</h2>
                <p>Trang web bắt đầu hoạt động vào tháng 6/2020.<br> Kết nối người mua với người bán với nhau tạo ra<br> một công động mạnh mẻ</p>
                <a href="#" class="my-2 text-white" style="text-decoration:white;cursor:pointer">Thăm quan ngay!</a>
            </div>
            <h3 class="text-uppercase text-dark mt-5">Khám phá danh mục</h3>
                <div class="row">
                    
                    <!-- Box -->
                    
                    @foreach($listcate as $i)
                    
                    <div class="col-lg-4 box_col mt-5">
                        <div class="box">
                            <div class="box_image"><img src="{{asset('images')}}/{{$i->bg}}" alt=""></div>
                            <div class="box_title trans_200"><a href="/category/{{$i->idCategory}}">{{$i->nameCategory}}</a></div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Box -->

                </div>
            </div>
        </div>
    </div>

    <!-- Categories -->

    <!-- Products -->


    <!-- Maps -->


@endsection