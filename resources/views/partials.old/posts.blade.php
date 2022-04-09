@extends('partials.layout')


    @section('banner')

        <h1>My Blog Posts</h1>
    @endsection

    @section('content')

        @foreach ($posts as $post)
        {{-- {{dd($posts)}} --}}

            <article>
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>


                {{-- fetch category names/properties--}}
                {{--
                <p>
                    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                </p> --}}

                <p>
                    This was published by: <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                </p>

                
            </article>
        @endforeach    
    @endsection