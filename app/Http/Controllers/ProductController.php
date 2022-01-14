<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function showProduct(){
        return Product::all();
    }

    function addProduct(Request $req){
        $pro = new Product();
        $pro->title = $req->title;
        $pro->price = $req->price;
        $pro->description = $req->description;
        $pro->category = $req->category;
        $pro->image = $req->image;
        $resutl = $pro->save();
        if($resutl){
            return ["data"=>"has been save"];
        }
        else{
            return ["data"=>"has been faild"];
        }
    }
    function update(Request $req, $id){
        $upro = Product::find($id);
        $upro->title = $req->title;
        $upro->price = $req->price;
        $upro->description = $req->description;
        $upro->category = $req->category;       
        $upro->image = $req->image;       
        $rlt = $upro->save();
        if($rlt){
            return ["data"=>" updated"];
        }
        else{
             return ["data"=>" updated has been faild"];
        }
    }
    
    function deleteProduct($id){
        $dpro = Product::find($id);
        $resutl = $dpro->delete();

        if($resutl){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succesfully"];
        }

    }
    
    
}
