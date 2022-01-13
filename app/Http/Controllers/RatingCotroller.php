<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingCotroller extends Controller
{
    //
    function showRating(){
        return Rating::all();
    }
    function addRating(Request $req){
        
        $rate = new Rating();
        $rate->rate = $req->rate;
        $rate->count = $req->count;
        $rate->product_id = $req->product_id;
        $resutl = $rate->save();
        if($resutl){
            return ["data"=>"has been saved"];
        }
        else{
            return ["data"=>"has not been saved"];
        }
    
    }
    function update(Request $req, $id){
        $mem = Rating::find($id);
        $mem->rate = $req->rate;
        $mem->count = $req->count;
        $mem->product_id = $req->product_id;  
        $rlt = $mem->save();
        if($rlt){
            return ["data"=>" updated"];
        }
        else{
             return ["data"=>" updated has been faild"];
        }
    }
    function deleteRate($id){
        $drate = Rating::find($id);
        $resutl = $drate->delete();
        if($resutl){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succssfuly"];
        }
    }   

}
