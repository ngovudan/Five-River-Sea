<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\DB;
class userController extends Controller
{
    function user_detail($id){
        $product_detail= DB::table('products')->where('id_user','=',$id)->get();
        $user_detail= DB::table('tbluser')->join('products','products.id_user','=','tbluser.iduser')
        ->where('tbluser.iduser',$id)->get();
        return view('user_detail')->with('product',$product_detail)->with(['user'=>$user_detail[0]]);
    }
    function edit($id){
        return view('user_edit');
    }
}