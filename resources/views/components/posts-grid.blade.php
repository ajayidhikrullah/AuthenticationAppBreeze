@props(['posts'])
<x-post-featured-card :post="$posts[0]"/> {{-- fetches first post title based on category --}}

<div class="lg:grid lg:grid-cols-6">
    {{-- fetches posts and skip the first post as it has been shown above --}}
    @foreach ($posts->skip(1) as $post)
        <x-post-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3':'col-span-2'}}"/>
    @endforeach            
</div>