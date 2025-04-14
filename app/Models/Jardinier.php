<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jardinier extends Model
{
    protected $fillable = ['name'];

    public function jardins(){
        return $this->hasMany(Jardin::class);
    }
}
