<x-layout>
    
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card/>

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card/>
            <x-post-card/>
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>          
        </div>
    </main>











    
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

</x-layout>