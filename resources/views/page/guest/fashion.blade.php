@extends('layouts.guest.guest')
@section('content')

<div id="colorlib-main">
  <div class="colorlib-blog">
    <div class="container-wrap">
      <div class="row row-pb-lg">
        <div class="col-md-12 blog-slider">
          <div class="owl-carousel1">
            @foreach ($newsNewests as $newsNewest)
              <div class="item">
                <div class="blog-entry">
                  <div class="blog-img" style="background-image: url(images/{{ $newsNewest->image }});">
                    <div class="desc desc2 text-center">
                      <p class="tag"><span>{{ $newsNewest->tag }}</span></p>
                      <div class="desc-bottom">
                        <h2 class="head-article"><a href="#">{{ $newsNewest->caption }}</a></h2>
                        <p>{{ $newsNewest->subtitle }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="content-wrap">
            <article class="animate-box">
              <div class="blog-img">
                <div class="video colorlib-video" style="background-image: url(images/{{ $video[0]->link_image }});">
                  <a href="videos/{{ $video[0]->link_video }}" class="popup-vimeo"><i class="icon-play4"></i></a>
                  <div class="overlay"></div>
                </div>
              </div>
              <div class="desc">
                <div class="meta">
                  <p>
                    <span>Video</span>
                    <span>25 May 2018</span>
                    <span>admin </span>
                    <span><a href="single">4 Comments</a></span>
                  </p>
                </div>
                <h2><a href="single">{{ $video[0]->caption }}</a></h2>
                <p>{{ $video[0]->subtitle }}</p>
                <p><a href="single" class="btn btn-primary with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
              </div>
            </article>
            @foreach ($newsFashions as $newsFashion)
              <article class="animate-box">
                <div class="blog-img" style="background-image: url(images/{{ $newsFashion->image }});"></div>
                <div class="desc">
                  <div class="meta">
                    <p>
                      <span>{{ $newsFashion->tag }}</span>
                      <span>{{ $newsFashion->created_at }}</span>
                      <!-- <span>admin </span> -->
                      <!-- <span> {{ $newsFashion->id_creator }} </span> -->
                      <!-- <span><a href="#">3 Comments</a></span> -->
                    </p>
                  </div>
                  <h2><a href="single/{{ $newsFashion->id }}">{{ $newsFashion->caption }}</a></h2>
                  <p>{{ $newsFashion->subtitle }}</p>
                  <p><a href="single/{{ $newsFashion->id }}" class="btn btn-primary with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
                </div>
              </article>
            @endforeach
              
            <div class="row">
              <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <ul class="pagination">
                  <li class="disabled"><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 sticky-parent">
          <div class="sidebar" id="sticky_item">
            <div class="side animate-box">
              <div class="form-group">
                <input type="text" class="form-control" id="search" placeholder="Enter to search...">
                <button type="submit" class="btn submit btn-primary"><i class="icon-search3"></i></button>
              </div>
            </div>
            <div class="side animate-box">
              <h2 class="sidebar-heading">Categories</h2>
              <p>
                <ul class="category">
                  <li><a href="#"><i class="icon-check"></i> Home</a></li>
                  <li><a href="#"><i class="icon-check"></i> About Me</a></li>
                  <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                  <li><a href="#"><i class="icon-check"></i> Travel</a></li>
                  <li><a href="#"><i class="icon-check"></i> Lifestyle</a></li>
                  <li><a href="#"><i class="icon-check"></i> Fashion</a></li>
                  <li><a href="#"><i class="icon-check"></i> Health</a></li>
                </ul>
              </p>
            </div>
            <div class="side animate-box">
              <h2 class="sidebar-heading">Recent Blog</h2>
              @foreach ($newsFashionRecents as $newsFashionRecent)
                <div class="f-blog">
                  <a href="blog.html" class="blog-img" style="background-image: url(images/{{ $newsFashionRecent->image }});">
                  </a>
                  <div class="desc">
                    <h3><a href="blog.html">{{ $newsFashionRecent->caption }}r</a></h3>
                    <p class="admin"><span>{{ $newsFashionRecent->created_at }}</span></p>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="side animate-box">
              <h2 class="sidebar-heading">Instagram</h2>
              <div class="instagram-entry">
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);">
                </a>
              </div>
            </div>
            <div class="side animate-box">
              <div class="form-group">
                <input type="text" class="form-control form-email text-center" id="email" placeholder="Enter your email">
                <button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection