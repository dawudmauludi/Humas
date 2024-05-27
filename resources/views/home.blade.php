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

  

       
        .carousel{
            width: 100%;
            height: 800px;
        }


        .line{
            border: 0.5px dashed grey;
            margin-bottom: 20px;
        }

        .title-section{
            background-color: #599DDC;
        }

        .title-section h1{
            font-family: 'Roboto',serif;
        }
      

    @media (max-width: 600px) {
        .container-beranda {
            flex-direction: row;
        }

        .carousel{
            width: 100%;
            height: 500px;
        }

        .waktu-sekarang, .hari-sekarang {
            margin: 0;
        }

        .marquee-container {
            width: auto;
        }
    }
</style> 


@section('container')


<main>
    <a href="" class="btn btn-primary"  id="scrollToTopBtn" title="Go to top"><i class="bi bi-arrow-up"></i></a>
    <div id="myCarousel" class="carousel slide mx-auto py-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
       
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/gambar1.JPG')}}" alt="" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
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
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="line"></div>
    <div class="title-section text-uppercase text-light">
        <h1 class="mb-5 text-center">Pengurus Humas</h1>
    </div>
    <div class="container marketing mt-4 container-marketing">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('img/gambar2.JPG')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="text-center">DIMAS MAULANA</h2>
                <p>Ketua Umum Foka-Pks</p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/gambar2.JPG')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="text-center">RAINA NADHIFA</h2>
                <p>Wakil Ketua</p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/gambar2.JPG')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="text-center">ARIO LESMONO</h2>
                <p>Sekertaris</p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/gambar2.JPG')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="text-center">RIO PRAMUDYA</h2>
                <p>Wakil Sekertaris</p>
            </div>
        </div>
    </div>

    <div class="line mt-3"></div>

    <div class="row g-5">
        <div class="col-md-8">
          <h3 class="pb-4 mb-4 fst-italic border-bottom">
            From the Firehose
          </h3>
    
          <article class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
    
            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <hr>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h2>Blockquotes</h2>
            <p>This is an example blockquote in action:</p>
            <blockquote class="blockquote">
              <p>Quoted text goes here.</p>
            </blockquote>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Example lists</h3>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
            <ul>
              <li>First list item</li>
              <li>Second list item with a longer description</li>
              <li>Third list item to close it out</li>
            </ul>
            <p>And this is an ordered list:</p>
            <ol>
              <li>First list item</li>
              <li>Second list item with a longer description</li>
              <li>Third list item to close it out</li>
            </ol>
            <p>And this is a definiton list:</p>
            <dl>
              <dt>HyperText Markup Language (HTML)</dt>
              <dd>The language used to describe and define the content of a Web page</dd>
              <dt>Cascading Style Sheets (CSS)</dt>
              <dd>Used to describe the appearance of Web content</dd>
              <dt>JavaScript (JS)</dt>
              <dd>The programming language used to build advanced Web sites and applications</dd>
            </dl>
            <h2>Inline HTML elements</h2>
            <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
            <ul>
              <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
              <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
              <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
              <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
              <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
              <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
            </ul>
            <p>Most of these elements are styled by browsers with few modifications on our part.</p>
            <h2>Heading</h2>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Sub-heading</h3>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <pre><code>Example code block</code></pre>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
          </article>
    
          <article class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
    
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <blockquote>
              <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
            </blockquote>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Example table</h3>
            <p>And don't forget about tables in these posts:</p>
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Upvotes</th>
                  <th>Downvotes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alice</td>
                  <td>10</td>
                  <td>11</td>
                </tr>
                <tr>
                  <td>Bob</td>
                  <td>4</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>Charlie</td>
                  <td>7</td>
                  <td>9</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td>Totals</td>
                  <td>21</td>
                  <td>23</td>
                </tr>
              </tfoot>
            </table>
    
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
          </article>
    
          <article class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>
    
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <ul>
              <li>First list item</li>
              <li>Second list item with a longer description</li>
              <li>Third list item to close it out</li>
            </ul>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
          </article>
    
          <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
          </nav>
    
        </div>
    
        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic text-center">BERITA TERBARU</h4>
              @if ($posts->count())
              <div class="card mb-3">
                  @if ($posts[0]->image)
                  <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
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
      
                  </div>
              </div>
          @else
              <p>No posts available.</p>
          @endif
            </div>
            
            <div class="line"></div>

            <div class="p-4">
              <h4 class="fst-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">March 2021</a></li>
                <li><a href="#">February 2021</a></li>
                <li><a href="#">January 2021</a></li>
                <li><a href="#">December 2020</a></li>
                <li><a href="#">November 2020</a></li>
                <li><a href="#">October 2020</a></li>
                <li><a href="#">September 2020</a></li>
                <li><a href="#">August 2020</a></li>
                <li><a href="#">July 2020</a></li>
                <li><a href="#">June 2020</a></li>
                <li><a href="#">May 2020</a></li>
                <li><a href="#">April 2020</a></li>
              </ol>
            </div>
    
            <div class="p-4">
              <h4 class="fst-italic">Elsewhere</h4>
              <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    
</main>


<script>
    // Ambil tombol
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Ketika pengguna scrolls ke bawah 20px dari atas dokumen, tampilkan tombol
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    }

    // Ketika pengguna mengklik tombol, scroll kembali ke atas dokumen
    scrollToTopBtn.onclick = function() {
        document.body.scrollTop = 0; // Untuk Safari
        document.documentElement.scrollTop = 0; // Untuk Chrome, Firefox, IE, dan Opera
    }
</script>


@endsection



