@extends('layouts._layout')

@section('content')
<div class="home">
    <div class="home_container">
        <div class="home_content">
            <div class="home_title">Registration</div>
            <div class="breadcrumbs">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="/">Home</a></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <form action="/createuser/login"  class="">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="hoten" class="form-control" placeholder="Họ và tên...">
                @if($errors -> has('hoten'))
                    <span class="help-block">
                        <strong>{{$errors -> first('hoten')}}</strong>
                    </span><br>
                @endif 
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username...">
                @if($errors -> has('username'))
                    <span class="help-block">
                        <strong>{{$errors -> first('username')}}</strong>
                    </span><br>
                @endif 
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password...">
                @if($errors -> has('password'))
                    <span class="help-block">
                        <strong>{{$errors -> first('password')}}</strong>
                    </span><br>
                @endif 
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email...">
                @if($errors -> has('email'))
                    <span class="help-block">
                        <strong>{{$errors -> first('email')}}</strong>
                    </span><br>
                @endif 
            </div>
            <div class="form-group">
                <label for="">Sống tại</label>
                <select name="thanhpho" id="" class="form-control">
                    <option value="0"></option>
                    <option name="thanhpho">TP.HCM</option>            
                </select>
                @if($errors -> has('thanhpho'))
                    <span class="help-block">
                        <strong>{{$errors -> first('thanhpho')}}</strong>
                    </span><br>
                @endif 
            </div>
            <button type="submit" class="btn btn-primary float-right col-md-4">Create Account</button>
        </form>
    </div><br><br><br><br>
@endsection