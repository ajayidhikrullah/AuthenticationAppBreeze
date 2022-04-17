<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        //
    public function index(){
                //check request from search
        // var_dump(request('search'));exit();
        /* SEARCH */

        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
            // 'categories' => Category::all(),
        ]);
        // $posts = Post::latest();
    
        /*******
        check for logs
            \Illuminate\Support\facades\DB::listen(function ($query){
                logger($query->sql, $query->bindings);
            });
        */

        // $posts = Post::findorfail();
        // return view('partials.posts');

        //OLD
        // return view('posts', [
            // 'posts' => Post::all() //fetch post all data in DB tb
            // 'posts' => Post::latest()->with('category', 'author')->get()
            // 'posts' => $posts->get(),
            // 'categories' => Category::latest()->get()
        // ]);
    }

    //show posts method/function
    public function show(Post $post){
            // return view('partials.post', [
        //     'post' => Post::findOrFail($slug)
        // ]);

        return view('post', [
            'post' => $post
        ]);
    }
}
