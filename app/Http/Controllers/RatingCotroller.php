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
