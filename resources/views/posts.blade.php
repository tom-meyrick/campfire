<x-layout>
    @foreach($posts as $post)
    <article class="mt-5 mb-5">
        <h1>
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h1>
    <div>
    {{ $post->excerpt }}
    </div>
    <hr/>
            </article>
        @endforeach
</x-layout>

