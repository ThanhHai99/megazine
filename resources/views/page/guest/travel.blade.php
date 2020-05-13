@extends('layouts.guest.guest')
@section('content')

<div id="colorlib-main">
  <div class="colorlib-blog">
    <div class="container-wrap">
      <div class="row">
        <div class="col-md-9">
          <div class="content-wrap">
            @foreach ($newsTravels as $newsTravel)
              <article class="blog-entry-travel animate-box item-travel">
                <div class="blog-img" style="background-image: url(images/{{ $newsTravel->image }});"></div>
                <div class="desc">
                  <p class="meta">
                    <span class="cat"><a href="#">{{ $newsTravel->tag }}</a></span>
                    <span class="date">{{ $newsTravel->created_at }}</span>
                    <!-- <span class="pos">By <a href="#">Walter</a></span> -->
                  </p>
                  <h2><a href="single/{{ $newsTravel->id }}">{{ $newsTravel->caption }}</a></h2>
                  <p>{{ $newsTravel->subtitle }}</p>
                  <p><a href="single/{{ $newsTravel->id }}" class="btn btn-primary with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
                </div>
              </article>
            @endforeach

            <div class="row text-center" id="div-load-more-travel">
              <div class="col-xs-3 center-block">
                <button type="button" class="btn btn-info btn-outline" id="loadMoreTravel">Load more</button>
              </div>
            </div>

            {{ csrf_field() }}

          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar">
            <div class="side animate-box">
              <div class="form-group">
                <input type="text" class="form-control" id="search" placeholder="Enter to search...">
                <button type="submit" class="btn submit btn-primary"><i class="icon-search3"></i></button>
              </div>
            </div>            
            <!-- <div class="side animate-box">
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
            </div> -->
            <div class="side animate-box">
              <h2 class="sidebar-heading">Recent Blog</h2>
              @foreach ($newsTravelRecents as $newsTravelRecent)
                <div class="f-blog">
                  <a href="single/{{ $newsTravelRecent->id }}" class="blog-img" style="background-image: url(images/{{ $newsTravelRecent->image }});">
                  </a>
                  <div class="desc">
                    <h3><a href="single/{{ $newsTravelRecent->id }}">{{ $newsTravelRecent->caption }}r</a></h3>
                    <p class="admin"><span>{{ $newsTravelRecent->created_at }}</span></p>
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