

@extends('layout.index')


@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            
           

            <h2 class="mb-3"> <a href="javascript:void(0);" class="btn btn-primary" onclick="history.back()"><i class="bi bi-arrow-left"></i></a> {{ $post->titel }}</h2>

            
        <p>By: <a href="/posts?author={{ $post->author->username }}on-none">{{ $post->author->name }}</a> In <a href="/posts?category={{$post->Category->slug}}">{{ $post->Category->name}}</a></p>

        @if ($post->image)
        <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

        </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        @endif


        <article class="my-3 fs-5">

            {!! $post->body !!} <br>
        </article>

        </div>
    </div>
</div>

 

    
@endsection