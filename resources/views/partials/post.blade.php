@extends('partials.layout')

    @section('content')
    {{-- @foreach ($posts as $post) --}}
        <article>
            <h1>{{$post->title}}</h1>

            <div>
                {{$post->excerpt}}
            </div>
        </article>

        <a href="/">Go Back please</a>
    {{-- @endforeach --}}


    @endsection