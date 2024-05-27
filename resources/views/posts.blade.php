
@extends('layout.main')


@section('title','Berita & Acara')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>


    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="cari" value="{{ request('cari') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>



        @if ($posts->count())
        <div class="card mb-3">
          @if ($posts[0]->image)
          <div style="max-height: 400px; overflow: hidden;">
              <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">

          </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
          @endif
          
            <div class="card-body text-center">
              <h5 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{ $posts[0]->titel }}</a></h5>
             
              <p>
                <small class="text-muted">
                By: <a href="/posts?author={{ $posts[0]->author->username}}" class="text-decoration-none"> {{ $posts[0]->author->name }}</a> In <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a>{{ $posts[0]->created_at->diffForHumans() }}</small>   </p>
              <p class="card-text">{{ $posts[0]->exerpt }}</p>
              <a href="/posts/{{$posts[0]->slug}}" class="btn btn-danger mb-5 mt-3">Read More...</a>

            </div>
          </div>
       

          <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    
               
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2 text-light"><a href="/posts?category={{$post->category->slug}}" class="text-decoration-none text-light">{{ $post->category->name }}</a></div>
                        @if ($post->image)
                            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                            @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                     
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->titel }}</h5>
                          <p>
                            <small class="text-muted">
                            By: <a href="/posts?author={{ $post->author->username}}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                          <p class="card-text">{{$post->exerpt}}</p>
                          <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read more</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
          </div>

          @else
          <p class="text-center fs-4">No Post Found.</p>
          @endif

          <div class="d-flex justify-content-end">

              {{ $posts->links() }}
          </div>
@endsection

