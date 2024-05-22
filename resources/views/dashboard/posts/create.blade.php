@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Posts</h1>
  </div>

  
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="titel" class="form-label">Title</label>
          <input type="text" class="form-control @error('titel') is-invalid @enderror" id="titel" name="titel" required autofocus value="{{ old('titel') }}">
          @error('titel')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
            
          </div>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div> 


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

  <script>
    const titel = document.querySelector('#titel')
    const slug = document.querySelector('#slug')

    titel.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?titel=' + titel.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    documen.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){

      const image = document.querySelector('#image');
      const imgPreview= document.querySelector('.img-preview')

      imgPreview.style.display = 'block';

      const oFReader= new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
 
@endsection