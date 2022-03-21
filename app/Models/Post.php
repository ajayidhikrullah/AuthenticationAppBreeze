<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory;
// mass assignment for security purpose, those fields in DB that needs to have a value when creating them
//$Post::create(['title' => 'my first title', 'excerpt'=>'first excerpt'...]) etc

    protected $fillable = ['title', 'body', 'excerpt'];
}
