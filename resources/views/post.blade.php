<x-layout>
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
                This was published by: <a href="/authors/{{$post->author->username}}">{{$post->author->username}}</a>
            </p>

            <div>
                {{$post->body}}
            </div>
        </article>


        <a href="/">Go Back please</a>
    {{-- @endforeach --}}
</x-layout>