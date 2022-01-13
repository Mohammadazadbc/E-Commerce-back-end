<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $table="produits";

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function cart(){
        return $this->belongsTo(Carts::class);
    }
}
