<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Post /*1*/ extends Model //a POST~~~~~\
{
    use HasFactory;
// mass assignment for security purpose, those fields in DB that needs to have a value when creating them
//$Post::create(['title' => 'my first title', 'excerpt'=>'first excerpt'...]) etc

    // protected $fillable = ['title', 'body', 'category_id', 'slug', 'excerpt'];
    protected $guarded = []; //everything is fillable but except some fileds that is in guarded

    public function getRouteKeyName(){
        return 'slug';
    }

    //fetches post by category
    // this is called eloquent Relationship

    public function category(){ /*3*///a POST belongs to a Category
        //hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo/*2*/(Category::class); //associated to Category
    }

    //a post belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }
}