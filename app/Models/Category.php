<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function post(){ /*3*///a Category hasmany POST
        //hasOne, hasMany, belongsTo, belongsToMany

        return $this->hasMany/*2*/(Post::class); //associated to Post
    }
}
