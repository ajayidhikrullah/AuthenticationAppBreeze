@extends('partials.layout')


    @section('banner')

        <h1>My Blog Posts</h1>
    @endsection

    @section('content')
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>


                {{-- fetch category names/properties--}}
                <p>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                </p>

                
            </article>
        @endforeach    
    @endsection