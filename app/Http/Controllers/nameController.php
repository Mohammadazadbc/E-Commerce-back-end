<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class nameController extends Controller
{
    function showName(){
        return Name::all();
    }
    function addName(Request $req){
        $cart = new Name();
        $cart->firstname = $req->firstname;
        $cart->lastname = $req->lastname;
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
        $mem = Name::find($id);
        $mem->firstname = $req->firstname;
        $mem->lastname = $req->lastname;
        $mem->member_id = $req->member_id;     
        $rlt = $mem->save();
        if($rlt){
            return ["data"=>" updated"];
        }
        else{
             return ["data"=>" updated has been faild"];
        }
    }
    function deleteName($id){
        $date = Name::find($id);
        $resutl = $date->delete();

        if($resutl){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succesfully"];
        }

    }
}
