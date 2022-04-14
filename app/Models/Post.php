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

    //eager load from DB, to reduce the database query
    protected $with = ['category', 'author'];

    //SEARCH
    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            $query
                ->where('title', 'like', '%' . $search . '%') //SELECT * FROM posts WHERE title like '%is whatever we search for%';
                ->orWhere('body', 'like', '%' . $search . '%');    

                        //search by categories
            $query->when($filters['category'] ?? false, function($query, $category){
                $query
                    ->whereHas('category', function($query, $category){
                        $query->where('slug', $category);
                    });
            });
        });


    }

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
    public function author(){ //previously used as user_id
        return $this->belongsTo(User::class, 'user_id');
    }
}