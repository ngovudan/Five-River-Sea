<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\ProductM;
use\App\CategoryM;
class productController extends Controller
{
    function product($id){
        $ListProduct=ProductM::where('iddanhmuc','=',$id)->get();
        return view('ibuy',['product'=>$ListProduct]);
    }
    function detail($id){
        $detail=ProductM::where('idsanpham',$id)->get();
        return view('detail',['detail'=>$detail[0]]);
    }
}
