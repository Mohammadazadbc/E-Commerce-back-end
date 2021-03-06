<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
class cartController extends Controller
{
    function showCart(){
        return Carts::all();
    }
    function addCart(Request $req){
        $cart = new Carts();
        $cart->date = $req->date;
        $resutl = $cart->save();
        if($resutl){
            return ["data"=>"has been save"];
        }
        else{
            return ["data"=>"has been faild"];
        }
    }
    function update(Request $req, $id){
        $cart = Carts::find($id);
        $cart->date = $req->date;    
        $rlt = $cart->save();
        if($rlt){
            return ["data"=>" updated"];
        }
        else{
             return ["data"=>" updated has been faild"];
        }
    }
    function deleteProduct($id){
        $date = Carts::find($id);
        $resutl = $date->delete();

        if($resutl){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succesfully"];
        }

    }
}
