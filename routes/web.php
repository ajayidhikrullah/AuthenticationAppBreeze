<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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




//new routes for testing and learning
// dd(Post::all());
// dd (Post::all()->title);
// dd(Post::find(2)->title);

Route::get('/', function(){
    // $posts = Post::findorfail();
    // return view('partials.posts');
    
    return view('partials.posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post){
    return view('partials.post', [
        'post' => Post::findOrFail($slug)
    ]);

    // return view('partials.post', [
    //     'post' => $post
    // ]);
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
