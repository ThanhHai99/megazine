@extends('layouts.guest.guest')
@section('content')

<div id="colorlib-main">
  <aside id="colorlib-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        @foreach ($slides as $slide)
          <li style="background-image: url(images/{{ $slide->image }});">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-xs-12 js-fullheight slider-text">
                  <div class="slider-text-inner">
                    <div class="desc desc2">
                      <p class="tag"><span>{{ $slide->tag }}</span></p>
                      <h1><a href="#">{{ $slide->heading_primary }}</a></h1>
                      <p>{{ $slide->heading_secondary }}</p>
                      <p><a href="javascript:void(0)" class="btn btn-primary btn-outline">Read more</a></p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- <li style="background-image: url(images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-xs-12 js-fullheight slider-text">
                  <div class="slider-text-inner">
                    <div class="desc desc2">
                      <p class="tag"><span>Sports</span></p>
                      <h1><a href="#">Creators of Brands Template</a></h1>
                      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                      <p><a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-xs-12 js-fullheight slider-text">
                  <div class="slider-text-inner">
                    <div class="desc desc2">
                      <p class="tag"><span>Fashion</span></p>
                      <h1><a href="#">Design &amp; develop functional sites</a></h1>
                      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                      <p><a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li> -->
        @endforeach
      </ul>
    </div>
  </aside>

  <div class="colorlib-blog">
    <div class="container-wrap">
      <div class="row row-bottom-padded-md">
        <div class="col-md-4">
          <div class="blog-entry-style animate-box">
            <div class="blog-slider">
              <div class="owl-carousel">
                @foreach ($newsNewests as $newsNewest)
                  <div class="item">
                    <!-- <a href="single/{{ $newsNewest->id }}" class="image-popup-link"><img src="images/{{ $newsNewest->image }}" class="img-responsive" alt="html5 bootstrap template"></a> -->
                    <a href="single/{{ $newsNewest->id }}"><img src="images/{{ $newsNewest->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="desc">
              <p class="meta">
                <span class="cat"><a href="#">Style</a></span>
                <span class="date"><?= date('d F Y', strtotime($newsNewests[1]->created_at)); ?></span>
                <!-- <span class="pos">By <a href="#">Walter</a></span> -->
              </p>
              <h2><a href="single/{{ $newsNewests[1]->id }}">NEWS NEWEST</a></h2>
              <!-- <p>A small river named Duden flows by their place and supplies it with the necessary </p> -->
            </div>
          </div>
        </div>
        @for ($i=0; $i <=1; $i++)
          <div class="col-md-4">
            <div class="blog-entry-style animate-box">
              <div class="blog-img">
                <a href="single/{{ $newsStyles[$i]->id }}"><img src="images/{{ $newsStyles[$i]->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
              </div>
              <div class="desc">
                <p class="meta">
                  <span class="cat"><a href="#">{{ $newsStyles[$i]->tag }}</a></span>
                  <span class="date"><?= date('d F Y', strtotime($newsStyles[$i]->created_at)); ?></span>
                  <!-- <span class="pos">By <a href="#">Walter</a></span> -->
                </p>
                <h2><a href="single/{{ $newsStyles[$i]->id }}">{{ $newsStyles[$i]->caption }}</a></h2>
                <p>{{ $newsStyles[$i]->subtitle }}</p>
              </div>
            </div>
          </div>
        @endfor
      </div>
      <div class="row row-bottom-padded-md">
        @for ($i=2; $i <=4; $i++)
          <div class="col-md-4">
            <div class="blog-entry-style animate-box">
              <div class="blog-img">
                <a href="single/{{ $newsStyles[$i]->id }}"><img src="images/{{ $newsStyles[$i]->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
              </div>
              <div class="desc">
                <p class="meta">
                  <span class="cat"><a href="#">{{ $newsStyles[$i]->tag }}</a></span>
                  <span class="date"><?= date('d F Y', strtotime($newsStyles[$i]->created_at)); ?></span>
                  <!-- <span class="pos">By <a href="#">Walter</a></span> -->
                </p>
                <h2><a href="single/{{ $newsStyles[$i]->id }}">{{ $newsStyles[$i]->caption }}</a></h2>
                <p>{{ $newsStyles[$i]->subtitle }}</p>
              </div>
            </div>
          </div>
        @endfor
      </div>
      <div class="row row-bottom-padded-md">
        <div class="col-md-8">
          <div class="blog-entry-style animate-box">
            <div class="blog-img">
              <div class="video colorlib-video" style="background-image: url(images/{{ $video[0]->image }});">
                <a href="videos/{{ $video[0]->video }}" class="popup-vimeo"><i class="icon-play4"></i></a>
                <div class="overlay"></div>
              </div>
            </div>
            <div class="desc">
              <p class="meta">
                <span class="cat"><a href="#">{{ $video[0]->tag }}</a></span>
                <span class="date"><?= date('d F Y', strtotime($video[0]->created_at)); ?></span>
                <span class="pos">By <a href="#">Walter</a></span>
              </p>
              <h2><a href="blog.html">{{ $video[0]->caption }}</a></h2>
              <p>{{ $video[0]->subtitle }}</p>
            </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="blog-entry-style animate-box">
              <div class="blog-img">
                <a href="single/{{ $newsStyles[5]->id }}"><img src="images/{{ $newsStyles[5]->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
              </div>
              <div class="desc">
                <p class="meta">
                  <span class="cat"><a href="#">{{ $newsStyles[5]->tag }}</a></span>
                  <span class="date"><?= date('d F Y', strtotime($newsStyles[5]->created_at)); ?></span>
                  <!-- <span class="pos">By <a href="#">Walter</a></span> -->
                </p>
                <h2><a href="single/{{ $newsStyles[5]->id }}">{{ $newsStyles[5]->caption }}</a></h2>
                <p>{{ $newsStyles[5]->subtitle }}</p>
              </div>
            </div>
          </div>
      </div>
      <div class="row row-bottom-padded-md">
        @for ($i=6; $i <=8; $i++)
          <div class="col-md-4">
            <div class="blog-entry-style animate-box">
              <div class="blog-img">
                <a href="single/{{ $newsStyles[$i]->id }}"><img src="images/{{ $newsStyles[$i]->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
              </div>
              <div class="desc">
                <p class="meta">
                  <span class="cat"><a href="#">{{ $newsStyles[$i]->tag }}</a></span>
                  <span class="date"><?= date('d F Y', strtotime($newsStyles[$i]->created_at)); ?></span>
                  <!-- <span class="pos">By <a href="#">Walter</a></span> -->
                </p>
                <h2><a href="single/{{ $newsStyles[$i]->id }}">{{ $newsStyles[$i]->caption }}</a></h2>
                <p>{{ $newsStyles[$i]->subtitle }}</p>
              </div>
            </div>
          </div>
        @endfor
      </div>
      <div class="row row-bottom-padded-md">
        <div class="col-md-4">
          <div class="blog-entry-style animate-box">
            <div class="blog-img">
              <a href="single/{{ $newsStyles[9]->id }}"><img src="images/{{ $newsStyles[9]->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
            </div>
            <div class="desc">
              <p class="meta">
                <span class="cat"><a href="#">{{ $newsStyles[9]->tag }}</a></span>
                <span class="date"><?= date('d F Y', strtotime($newsStyles[9]->created_at)); ?></span>
                <!-- <span class="pos">By <a href="#">Walter</a></span> -->
              </p>
              <h2><a href="single/{{ $newsStyles[9]->id }}">{{ $newsStyles[9]->caption }}</a></h2>
              <p>{{ $newsStyles[9]->subtitle }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="blog-entry-style animate-box">
            <div class="blog-img">
              <a href="single/{{ $newsStyles[10]->id }}"><img src="images/{{ $newsStyles[10]->image }}" class="img-responsive" alt="html5 bootstrap template"></a>
            </div>
            <div class="desc">
              <p class="meta">
                <span class="cat"><a href="#">{{ $newsStyles[10]->tag }}</a></span>
                <span class="date"><?= date('d F Y', strtotime($newsStyles[10]->created_at)); ?></span>
                <!-- <span class="pos">By <a href="#">Walter</a></span> -->
              </p>
              <h2><a href="single/{{ $newsStyles[10]->id }}">{{ $newsStyles[10]->caption }}</a></h2>
              <p>{{ $newsStyles[10]->subtitle }}</p>
            </div>
          </div>
        </div>
      </div>

      @if (!isset($newsStylesMore))
        <script>
          alert("exists $newsStylesMore");
        </script>
      @endif

      <div class="row text-center">
        <div class="col-xs-3 center-block">
          <button type="button" class="btn btn-info btn-outline" id="loadMore">Load more</button>
        </div>
      </div>

      {{ csrf_field() }}

      <!-- <div class="row">
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
      </div> -->
    </div>
  </div>			
</div>

@endsection