<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $fillable = ['name','espace','jardinier_id'];

    public function jardinier(){
        return $this->belongsTo(Jardinier::class);
    }
}
