<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\productt;
use\App\catalog;
class productController extends Controller
{
    function product($id){
        $cate_product=catalog::all();
        if($id==1){
            $ListProduct=productt::where('trangthai','=','1')->paginate(6);
        }
        else{
            $ListProduct=productt::where('idCategory','=',$id)->where('trangthai','=','1')->paginate(6); 
        }
        $data=['cate_product'=>$cate_product,'product'=>$ListProduct];
        return view('ibuy',$data);
    }
    function detail($id){
        $detail=productt::where('products.id',$id)
        ->join('catalog','catalog.idCategory','=','products.idCategory')
        ->get();
        foreach ($detail as $key => $value) {
            $idCategory = $value->idCategory;
        }
        $related_product=productt::where('catalog.idCategory',$idCategory)
        ->join('catalog','catalog.idCategory','=','products.idCategory')
        ->get();
        return view('detail',['detail'=>$detail[0],'relate'=>$related_product]);

    }
}