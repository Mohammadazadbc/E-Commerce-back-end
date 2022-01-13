<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adress;

class adressController extends Controller
{
    function showAdress(){
        return Adress::all();
    }
    function addAdress(Request $req){
        $cart = new Adress();
        $cart->city = $req->city;
        $cart->street = $req->street;
        $cart->number = $req->number;
        $cart->zipcode = $req->zipcode;
        $cart->member_id = $req->member_id;
        $resutl = $cart->save();
        if($resutl){
            return ["data"=>"has been save"];
        }
        else{
            return ["data"=>"has been faild"];
        }
    }
    function update(Request $req, $id){
        $mem = Adress::find($id);
        $mem->city = $req->city;
        $mem->street = $req->street;
        $mem->number = $req->number;
        $mem->zipcode = $req->zipcode;       
        $mem->member_id = $req->member_id;       
        $rlt = $mem->save();
        if($rlt){
            return ["data"=>" updated"];
        }
        else{
             return ["data"=>" updated has been faild"];
        }
    }
    function deleteAdress($id){
        $date = Adress::find($id);
        $resutl = $date->delete();

        if($resutl){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succesfully"];
        }

    }
}
