@extends('layouts._layout')
@section('content')
<div class="container p-5 text-dark" style="color:#c5c5c5;">
    
        <div class="my-2 p-0 d-flex flex-row">
            <a href="#" class="pr-2  bd-highlight d-flex justify-content-start">Trang chủ</a>
            <a href="#" class=" bd-highlight d-flex justify-content-start ">{{$detail->nameCategory}}</a>
        </div>
        <div class="row p-0">
        <div class="col-sm-6">
        <img class="img_slider d-block mx-auto " src="{{asset('images')}}/{{$detail->hinhanh}}" alt="First slide">
                <!-- <div class="container p-0">
                    <h3>{{$detail->tensanpham}}</h3>
                    <h3 class="text-danger">{{$detail->gia}} VND</h3>
                    <h4><i class="fa fa-map-marker" aria-hidden="true" style="font-size:20px;margin-right:10px"></i><strong>{{$detail->thanhpho}}</strong></h4>
                    <div class=""><i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;margin-right:10px"></i> <strong>{{$detail->ngaydang}}</strong></div>
                    <p>{{$detail->mota}}</p>
                </div> -->

            

            </div>

            


        <div class="col-sm-6 px-3" >
                <div class="container p-0" style="border-top:1px solid #c7c7c7;">
                    <h3>{{$detail->tensanpham}}</h3>
                    <h4 class="text-danger"><strong>{{$detail->gia}} VND</strong></h4>
                    <h4><i class="fa fa-map-marker" aria-hidden="true" style="font-size:20px;margin-right:10px"></i> {{$detail->quan}}/{{$detail->thanhpho}}</h4>
                    <div class=""><i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;margin-right:10px"></i>{{$detail->ngaydang}}</div>
                    <p>{{$detail->mota}}</p>
                </div>
            <div class="d-flex flex-row my-2 py-2 "style="border-top:1px solid #c7c7c7;">
                <div class="pt-0 px-0   justify-content-start">
                    <img src="{{asset('images/sach.jpg')}}" class=" align-items-center user_avt_mini" alt="">
                </div>
                <div class="pt-0 px-3">
                    <a href=""><p class="d-inline text-dark">{{$detail->tennguoiban}}</p></a>
                    <p class="d-inline "><small> / người mới tạo</small></p>
                    <a href="" class="d-block text-center call_button">Xem trang</a>
                </div>
            </div>
            <div class="d-flex px-0">
                <div class=" flex-fill bd-highlight">Ngày tham gia: <strong>19/06/2019</strong></div>
                <div class="flex-fill bd-highlight">Số sản phẩm đã bán: <strong>2</strong></div>
            </div>
            <div class="d-flex flex-column ">
                <div class="py-2"> <strong>Nhắn tin với người này:</strong></div>
                @if(!session('user'))
                    <a href="" data-toggle="modal" data-target="#myModal" class="call_button text-center" style="font-size:18px;">CHAT NGAY!</a>
                @else
                    <!-- <form action="/chat">
                        <input type="hidden" value="{{ session('user')->iduser }}" name="nguoigui">
                        <input type="hidden" value="{{ $detail->iduser }}" name="nguoinhan">     
                        <button type="submit" class="call_button text-center" style="font-size:18px;">CHAT NGAY!</button>
                    </form> -->


                    <a href="/chat/{{$detail->id_user}}" class="call_button text-center" style="font-size:18px;">CHAT NGAY!</a>
                @endif
            </div>


        </div>
</div>
        
        <!-- SẢN PHẨM LIÊN QUAN -->
        <div class="container-fluid p-0  mt-2 " style="border-top:1px solid #c7c7c7;">
        <h3 class="text-uppercase my-2">sản phẩm liên quan</h3>
        <div class="row my-2">
        @foreach($relate as $value)
            <div class="col-sm-4 my-3 text-dark">
                <div class="container p-0 ">
                        <a href=""><img src="{{asset('images')}}/{{$value->hinhanh}}" class="box_image"  alt=""></a>
                        <h4 class="">{{$value->tensanpham}}</h4>
                        <h4 class="text-danger"><strong>{{$value->gia}}</strong></h4>
                        <a class="call_button" href="#">liên hệ</a>
                </div>
            </div>
        @endforeach
        </div>
        </div>
        

</div>
@endsection