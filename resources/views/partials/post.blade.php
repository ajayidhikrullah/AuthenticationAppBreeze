@extends('partials.layout')

    @section('content')
    {{-- @foreach ($posts as $post) --}}
        <article>

            
            <h1>{{$post->title}}</h1>
            {{-- <div>
                {{$post->body}} <hr>
                This was published by: <b>{{$post->category->name}}</b>
            </div> --}}
            
        {{-- show each category names/properties/slug--}}
            {{-- <p>
                This was published by: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p> --}}

            <p>
                This was published by: <a href="#">{{$post->user->name}}</a>
            </p>

            <div>
                {{$post->excerpt}}
            </div>
        </article>


        <a href="/">Go Back please</a>
    {{-- @endforeach --}}


    @endsection