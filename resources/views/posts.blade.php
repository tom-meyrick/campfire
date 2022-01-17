<x-layout>
    @foreach($posts as $post)
    <article class="mt-5 mb-5">
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
        <p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
    <div>
    {{ $post->excerpt }}
    </div>
    <hr/>
            </article>
        @endforeach
</x-layout>

