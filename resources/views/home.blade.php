@extends('layout.main')

@section('title','Beranda')

 
<style>

@font-face {
    font-family: 'Roboto';
    src: url('../fonts/Roboto-Bold.ttf');
    font-weight: normal;
    font-style: normal;
}

   
   #scrollToTopBtn {
            display: none; 
            position: fixed; 
            bottom: 20px;
            right: 20px; 
            z-index: 99; 
            font-size: 18px; 
            border: none; 
            outline: none; 
            color: white; 
            cursor: pointer; 
            padding: 15px; 
            border-radius: 10px; 
        }

  
        html {
    scroll-behavior: smooth; /* Scroll halus untuk seluruh halaman */
}
       
      

        .line{
            border: 0.5px dashed rgb(173, 173, 173);
            margin-bottom: 20px;
        }

        .title-section{
            background-color: #599DDC;
        }

        .title-section h1{
            font-family: 'Roboto',serif;
        }

        .icons {
            transition: transform 0.5s;
        }

        .icons:hover {
            transform: scaleX(-1);
        }

        .col-lg-4 {
            margin-bottom: 20px;
        }

        .category-link {
      text-decoration: none;
      color: dark;
      transition: font-size 0.3s;
    }

    .category-link:hover {
      font-size: 1.1em; /* Menyesuaikan ukuran font saat di-hover */
    }

    .card-title {
    position: relative;
    display: inline-block;
}

.card-title::after {
    content: '';
    position: absolute;
    bottom: -5px; /* Jarak antara teks dan garis bawah */
    left: 50%; /* Posisi garis bawah di tengah */
    transform: translateX(-50%);
    width: 30px; /* Panjang garis bawah */
    height: 2px; /* Ketebalan garis bawah */
    background-color: #599DDC; /* Warna garis bawah */
}
        
</style> 


@section('container')


<main>
    <a href="" class="btn" style="background-color: #599DDC" id="scrollToTopBtn" title="Go to top"><i class="bi bi-arrow-up"></i></a>
    <div id="myCarousel" class="carousel slide mx-auto py-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"  aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"  aria-label="Slide 3"></button>
        </div>
       
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/gambar1.JPG')}}" alt="" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>PROFIL SMK NEGERI 1 PASURUAN</h1>
                        <p>Ini adalah profil smk negeri 1 pasuruan,</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/gambar2.JPG')}}" alt="" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/gambar3.JPG')}}" alt="" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark px-4 py-4 rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark px-4 py-4 rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
    <div class="title-section text-uppercase text-light">
        <h1 class="mb-5 text-center">Informasi</h1>
    </div>
    <div class="container marketing mt-4 container-marketing">
        <div class="row mt-5">
            <div class="col-lg-4 shadow">
                <h1 class="icons text-center mb-3"><a href="" class="text-light"><i class="bi bi-houses px-4 py-3 rounded-circle" style="background-color: #599DDC"></i></a></h1>
                <h2 class="text-center">Prakerin</h2>
            </div>
            <div class="col-lg-4 shadow">
                <h1 class="icons text-center mb-3"><a href="" class="text-light"><i class="bi bi-envelope-paper px-4 py-3 rounded-circle" style="background-color: #599DDC"></i></a></h1>
                <h2 class="text-center">Recruitment</h2>
            </div>
            <div class="col-lg-4 shadow">
                <h1 class="icons text-center mb-3"><a href="" class="text-light"><i class="bi bi-file-earmark-text px-4 py-3 rounded-circle" style="background-color: #599DDC"></i></a></h1>
                <h2 class="text-center">MoU</h2>
            </div>
            <div class="col-lg-4 shadow ">
                <h1 class="icons text-center mb-3"><a href="" class="text-light"><i class="bi bi-backpack2 px-4 py-3 rounded-circle" style="background-color: #599DDC"></i></a></h1>
                <h2 class="text-center">Tracer Study</h2>
            </div>
        </div>
    </div>
</div>

    <hr>
   

    <div class="row g-5">
       
        <div class="col-md-8">
            <h1>APA ITU HUMAS?</h1>
            <article class="blog-post">
                <p id="summary">Humas sekolah adalah bagian yang vital dalam memastikan komunikasi yang efektif antara sekolah dan berbagai pemangku kepentingan, termasuk siswa, orang tua, guru, staf, dan masyarakat luas...</p>
                <p id="full-text" style="display: none;">Humas sekolah adalah bagian yang vital dalam memastikan komunikasi yang efektif antara sekolah dan berbagai pemangku kepentingan, termasuk siswa, orang tua, guru, staf, dan masyarakat luas. Peran ini mencakup berbagai aspek yang penting untuk menjaga citra positif sekolah dan memastikan informasi yang tepat dan akurat disampaikan kepada semua pihak yang terkait.</p>
                <button id="read-more" class="btn btn-primary" onclick="toggleText()">Read More</button>
            </article>
            <hr>

         
          @if ($posts->count())
            
              <div class="card mb-3 shadow" data-aos="fade-up">
               <div class="position-absolute bg-dark px-3 py-2 text-light"><a href="/posts?category={{$posts[1]->category->slug}}" class="text-decoration-none text-light">{{ $posts[1]->category->name }}</a></div>
                @if ($posts[1]->image)
                <div style="max-height: 400px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                  <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="{{ $posts[1]->category->name }}" class="img-fluid" style="max-width: 100%; height: auto;">
              </div>
                @else  <img src="https://source.unsplash.com/1920x800?{{ $posts[1]->category->name }}" class="card-img-top" alt="{{ $posts[1]->category->name }}">
                  
                @endif
                <div class="card-body text-center">
                    <p>
                        <small class="text-muted">
                            <i class="bi bi-person-fill"></i> <a href="/posts?author={{ $posts[1]->author->username}}" class="text-decoration-none text-dark"> {{ $posts[1]->author->name }}</a> In <a href="/posts?category={{$posts[1]->category->slug}}" class="text-decoration-none text-dark"> {{$posts[1]->category->name}}</a> <i class="bi bi-calendar-fill"></i> {{ $posts[1]->created_at->format('d-m-Y') }}</small>   </p>
                     
                  <h5 class="card-title card-title-border"><a href="/posts/{{$posts[1]->slug}}" class="text-decoration-none text-dark">{{ $posts[1]->titel }}</a></h5>
                 
                   <p class="card-text text-truncate">{{ $posts[1]->exerpt }}</p>
                  <a href="/posts/{{$posts[1]->slug}}" class="btn btn-primary">Read more</a>
                </div>
            </div>
           
        @else
            <p>No posts available.</p>
        @endif
      
            <hr>

      <div class="row">
        <div class="col-sm-6">
             
          @if ($posts->count())
       
          <div class="card mb-3 shadow" data-aos="fade-right">
           <div class="position-absolute bg-dark px-3 py-2 text-light"><a href="/posts?category={{$posts[2]->category->slug}}" class="text-decoration-none text-light">{{ $posts[2]->category->name }}</a></div>
            @if ($posts[2]->image)
            <div style="max-height: 400px; overflow: hidden;">
              <img src="{{ asset('storage/' . $posts[2]->image) }}" alt="{{ $posts[2]->category->name }}" class="img-fluid" style="max-width: 100%; height: auto;">
          </div>
            @else
               <img src="https://source.unsplash.com/800x600?{{ $posts[2]->category->name }}" class="card-img-top" alt="{{ $posts[2]->category->name }}">
            @endif
            <div class="card-body text-center">
                <p>
                    <small class="text-muted">
                    <i class="bi bi-person-fill"></i> <a href="/posts?author={{ $posts[2]->author->username}}" class="text-decoration-none text-dark"> {{ $posts[2]->author->name }}</a> In <a href="/posts?category={{$posts[2]->category->slug}}" class="text-decoration-none text-dark"> {{$posts[2]->category->name}}</a> <i class="bi bi-calendar-fill"></i> {{ $posts[2]->created_at->format('d-m-Y') }}</small>   </p>
              <h5 class="card-title card-title-border"><a href="/posts/{{$posts[2]->slug}}" class="text-decoration-none text-dark">{{ $posts[2]->titel }}</a></h5>
             
             
              <p class="card-text text-truncate">{{ $posts[2]->exerpt }}</p>
              <a href="/posts/{{$posts[2]->slug}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
       
    @else
        <p>No posts available.</p>
    @endif

        </div>
        <div class="col-sm-6">
             
          @if ($posts->count())
         
          <div class="card mb-3 shadow" data-aos="fade-left">
           <div class="position-absolute bg-dark px-3 py-2 text-light"><a href="/posts?category={{$posts[3]->category->slug}}" class="text-decoration-none text-light">{{ $posts[3]->category->name }}</a></div>
            @if ($posts[3]->image)
            <div style="max-height: 400px; overflow: hidden;">
              <img src="{{ asset('storage/' . $posts[3]->image) }}" alt="{{ $posts[3]->category->name }}" class="img-fluid" style="max-width: 100%; height: auto;">
          </div>
            @else
                <img src="https://source.unsplash.com/800x600?{{ $posts[3]->category->name }}" class="card-img-top" alt="{{ $posts[3]->category->name }}">
            @endif
            <div class="card-body text-center">
                <p>
                    <small class="text-muted">
                    <i class="bi bi-person-fill"></i> <a href="/posts?author={{ $posts[3]->author->username}}" class="text-decoration-none text-dark"> {{ $posts[3]->author->name }}</a> In <a href="/posts?category={{$posts[3]->category->slug}}" class="text-decoration-none text-dark"> {{$posts[3]->category->name}}</a> <i class="bi bi-calendar-fill"></i> {{ $posts[3]->created_at->format('d-m-Y') }}</small>   </p>
                 
              <h5 class="card-title card-title-border"><a href="/posts/{{$posts[3]->slug}}" class="text-decoration-none text-dark">{{ $posts[3]->titel }}</a></h5>
             
              <p class="card-text text-truncate">{{ $posts[3]->exerpt }}</p>
              <a href="/posts/{{$posts[3]->slug}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p>No posts available.</p>
    @endif

        </div>
        
      </div>
         
    
        </div>
    
        
        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic text-center">BERITA TERBARU</h4>
              @if ($posts->count())
           
              <div class="card mb-3">
               <div class="position-absolute bg-dark px-3 py-2 text-light"><a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none text-light">{{ $posts[0]->category->name }}</a></div>
                @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                  <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid" style="max-width: 100%; height: auto;">
              </div>
                @else
                    <img src="https://source.unsplash.com/1920x800?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="card-body text-center">
                  <h5 class="card-title card-title-border"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{ $posts[0]->titel }}</a></h5>
                 
                  <p>
                    <small class="text-muted">
                    <i class="bi bi-person-fill"></i> <a href="/posts?author={{ $posts[0]->author->username}}" class="text-decoration-none"> {{ $posts[0]->author->name }}</a> In <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none"> {{$posts[0]->category->name}}</a> <i class="bi bi-calendar-fill"></i> {{ $posts[0]->created_at->format('d-m-Y') }}</small>   </p>
                  <p class="card-text text-truncate">{{ $posts[0]->exerpt }}</p>
    
                </div>
            </div>
            
        @else
            <p>No posts available.</p>
        @endif
            
            </div>
            
            <div class="line"></div>

            <div class="p-4">
              <h4 class="fst-italic">KATEGORI</h4>
              <ol class="list-unstyled mb-0">
                @foreach ($categories as $category)
                <li><a href="/posts?category={{$category->slug}}" class="text-decoration-none text-dark category-link">{{ $category->name }}</a></li>
                @endforeach
              </ol>
            </div>
    <div class="line"></div>
            <div>
              <h4 class="fst-italic">RELATIONSHIP</h4>
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 150px; width: 150px">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/LOGO_SMK.png') }}" class="d-block" alt="..." style="height: 150px; width: 150px;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gambar1.JPG') }}" class="d-block" alt="..." style="height: 150px; width: 150px;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gambar2.JPG') }}" class="d-block" alt="..." style="height: 150px; width: 150px;" >
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</main>


<script>

function toggleText() {
    var summary = document.getElementById("summary");
    var fullText = document.getElementById("full-text");
    var button = document.getElementById("read-more");

    if (fullText.style.display === "none") {
        fullText.style.display = "block";
        summary.style.display = "none";
        button.textContent = "Read Less";
    } else {
        fullText.style.display = "none";
        summary.style.display = "block";
        button.textContent = "Read More";
    }
}
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}


scrollToTopBtn.onclick = function() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0; 
}

scrollToTopBtn.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};
</script>


@endsection



