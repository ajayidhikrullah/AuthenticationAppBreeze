<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//************************************ */ start POST ROUTE//
//new routes for testing and learning
// dd(Post::all());
// dd (Post::all()->title);
// dd(Post::find(2)->title);
//route to home
Route::get('/', function(){
    
    /*******
    check for logs
        \Illuminate\Support\facades\DB::listen(function ($query){
            logger($query->sql, $query->bindings);
        });
    */

    // $posts = Post::findorfail();
    // return view('partials.posts');
    
    return view('posts', [
        // 'posts' => Post::all() //fetch post all data in DB tb
        // 'posts' => Post::latest()->with('category', 'author')->get()
        'posts' => Post::latest()->get()
    ]);
});

// route by slug column name and not ID
Route::get('posts/{post:slug}', function (Post $post){
    // return view('partials.post', [
    //     'post' => Post::findOrFail($slug)
    // ]);

    return view('post', [
        'post' => $post
    ]);
});

//**********************************************close POST ROUTE 

Route::get('categories/{category:slug}', function (Category $category){
        return view('posts', [
            // 'posts'=>$category->post->load(['category', 'author'])
            'posts'=>$category->post,
            // dd($category)
        ]);
    });

// get authors cateroy post only
Route::get('authors/{author:username}', function (User $author){//fetched post by author username which User
    // dd($author->post);
    return view('posts', [
        'posts' => $author->posts
    ]);
});



/* initial Routes.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
*/


//////////////////////////___________________________
