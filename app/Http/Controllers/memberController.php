<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class memberController extends Controller
{
    public function showMember(){
        return Members::all();
    }
    function addMember(Request $req){
        $mem = new Members();
        $mem->email = $req->email;
        $mem->username = $req->username;
        $mem->password = $req->password;
        $mem->phone = $req->phone;
        $resutl = $mem->save();
        if($resutl){
            return ["message"=>"data has been save"];
        }
        else{
            return ["message"=>" data has been faild"];
        }
    }
    function update(Request $req, $id){
        $mem = Members::find($id);
        $mem->email = $req->email;
        $mem->username = $req->username;
        $mem->password = $req->password;
        $mem->phone = $req->phone;       
        $rlt = $mem->save();
        if($rlt){
            return ["data"=>" updated"];
        }
        else{
             return ["data"=>" updated has been faild"];
        }
    }
    function deleteMember($id){
        $dmem = Members::find($id);
        $result = $dmem->delete();
        if($result){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succesfully"];
        }
    }
    function login(Request $req){
        $user = Members::where(['username'=>$req->username, 'password'=>$req->password])->first();
    
        if(!$user){
            return ["message"=> " username or password incorrect"];
        }
        else{
            
            return ["message"=>"welcome"];
        }
    
    }
}
