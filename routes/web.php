<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/', [PostController::class, 'index'])->name('home');
//this route shows our POSTS, route by slug column name and not ID
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//**********************************************close POST ROUTE 

// Route::get('categories/{category:slug}', function (Category $category){
//         return view('posts', [
//             // 'posts'=>$category->post->load(['category', 'author'])
//             'posts'=>$category->post,
//             'currentCategory' => $category, //shows current category in dropdown upon loading d page
//             'categories' => Category::all() //shows all categories wen click on d dropdown
//             // dd($category)
//         ]);
//     });

// get authors cateroy post only
Route::get('authors/{author:username}', function (User $author){//fetched post by author username which User
    // dd($author->post);
    return view('posts.index', [
        'posts' => $author->posts
        // 'categories' => Category::all()
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
