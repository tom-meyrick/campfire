<x-layout>
<article>
    <h1>
        {{ $post->title }}
    </h1>
    <div>      <p>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    </p>
        {!! $post->body !!}
    </div>
</article>
<a href="/">Go back</a>
</x-layout>
