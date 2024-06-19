


@extends('layout.index')

@section('container')
    {{-- <h1 class="mb-5">Popst Category: {{ $category }}</h1> --}}

    @foreach ($posts as $post)
    <article class="mb-5">

        <h2><a href="/posts/{{ $post->slug }}">Judul:{{ $post->titel }}</a></h2>
      
        <p>Pesan:{{ $post->exerpt }}</p>
    </article>

    @endforeach
@endsection