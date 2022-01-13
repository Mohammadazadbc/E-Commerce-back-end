<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";
    public function rate(){
        return $this->hasMany(Rating::class);
    }
    public function produit(){
        return $this->hasMany(Produits::class);
    }
}
