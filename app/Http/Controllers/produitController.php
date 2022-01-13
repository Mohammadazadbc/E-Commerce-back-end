<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

class produitController extends Controller
{
    function showProduit(){
        return Produits::all();
    }

    function addProduit(Request $req){
        $pro = new Produits();
        $pro->ProductId = $req->ProductId;
        $pro->carts_id = $req->carts_id;
        $pro->quantity = $req->quantity;
        $resutl = $pro->save();
        if($resutl){
            return ["data"=>"has been save"];
        }
        else{
            return ["data"=>"has been faild"];
        }
    }
    function deleteProduit($id){
        $delpro = Produits::find($id);
        $resutl = $delpro->delete();

        if($resutl){
            return ["data"=>"has been deleted"];
        }
        else{
            return ["mission"=>"failed succesfully"];
        }

    }
}
