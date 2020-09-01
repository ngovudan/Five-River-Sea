@extends('layouts._layout')
@section('content')
<div class="container p-5">
        <div class="row p-0">
            @foreach($product as $i)
            <div class="col-sm-4 my-3 text-dark">
                <div class="container p-0 ">
                        <a href="/detail/{{$i->id}}"><img src="{{asset('images')}}/{{$i->hinhanh}}" class="box_image"   style="height:400px;" alt=""></a>
                        <h4 class="">{{$i->tensanpham}}</h4>
                        <h4 class="text-danger"><strong>{{$i->gia}} VND</strong></h4>
                        <a class="call_button" href="#">liên hệ</a>
                </div>
            </div>
            @endforeach
            <div class="d-block">{{$product ->links()}}</div>
</div>


@endsection