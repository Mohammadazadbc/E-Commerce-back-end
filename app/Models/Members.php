<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Members extends Model
{
    use HasFactory;
    protected $table="members";
    public function name(){
        return $this->hasMany(Name::class);
    }
    public function adress(){
        return $this->hasMany(Adress::class);
    }
}
