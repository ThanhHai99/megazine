@extends('master')
@section('content')
<div id="colorlib-main">
  <aside id="colorlib-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        @foreach($slides as $slide)
          <li style="background-image: url(images/{{ $slide->image }});">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12 col-xs-12 js-fullheight slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <p class="tag"><span>{{ $slide->name }}</span></p>
                      <h1><a href="#">{{ $slide->heading_primary }}</a></h1>
                      <p>{{ $slide->heading_secondary }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        @endforeach
        </ul>
      </div>
  </aside>

  <div class="colorlib-blog">
    <div class="container-wrap">
      <div class="row">
        <div class="col-md-6">
          <div class="blog-entry animate-box">
            <div class="blog-img" style="background-image: url(images/{{$news[0]->image}});">
              <div class="desc text-center">
                <p class="tag"><span>{{$news[0]->tag}}</span></p>
                <h2 class="head-article"><a href="single/{{$news[0]->id}}">{{$news[0]->caption}}</a></h2>
                <p>{{$news[0]->subtitle}}</p>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-6">
            <div class="row">
              @for ($i=1; $i <= 2; $i++)
                <div class="col-md-6">
                  <div class="blog-entry animate-box">
                    <div class="blog-img blog-img2" style="background-image: url(images/{{$news[$i]->image}});">
                      <div class="desc text-center">
                        <p class="tag"><span>{{$news[$i]->tag}}</span></p>
                        <h2 class="head-article"><a href="single/{{$news[$i]->id}}">{{$news[$i]->caption}}</a></h2>
                        <p>{{$news[$i]->subtitle}} {{$i}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              @endfor
              <div class="col-md-12">
                <div class="blog-entry animate-box">
                  <div class="blog-img blog-img2" style="background-image: url(images/{{$news[3]->image}});">
                    <div class="desc text-center">
                      <p class="tag"><span>{{$news[3]->tag}}</span></p>
                      <h2 class="head-article"><a href="single{{$news[3]->id}}">{{$news[3]->caption}}</a></h2>
                      <p>{{$news[3]->subtitle}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @for ($i=4; $i <= 6; $i++)
            <div class="col-md-4">
              <div class="blog-entry animate-box">
                <div class="blog-img" style="background-image: url(images/{{$news[$i]->image}});">
                  <div class="desc text-center">
                    <p class="tag"><span>{{$news[$i]->tag}}</span></p>
                    <h2 class="head-article"><a href="single/{{$news[$i]->id}}">{{$news[$i]->caption}}</a></h2>
                    <p>{{$news[$i]->subtitle}}</p>
                  </div>
                </div>
              </div>
            </div>
          @endfor
          <div class="col-md-5">
            <div class="blog-entry animate-box">
              <div class="blog-img" style="background-image: url(images/{{$news[7]->image}});">
                <div class="desc text-center">
                  <p class="tag"><span>{{$news[7]->tag}}</span></p>
                  <h2 class="head-article"><a href="single/{{$news[7]->id}}">{{$news[7]->caption}}</a></h2>
                  <p>{{$news[7]->subtitle}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="row">
              @for ($i=8; $i <= 9; $i++)
                <div class="col-md-12">
                  <div class="blog-entry animate-box">
                    <div class="blog-img blog-img2" style="background-image: url(images/{{$news[$i]->image}});">
                      <div class="desc text-center">
                        <p class="tag"><span>{{$news[$i]->tag}}</span></p>
                        <h2 class="head-article"><a href="single/{{$news[$i]->id}}">{{$news[$i]->caption}}</a></h2>
                        <p>{{$news[$i]->subtitle}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              @endfor
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              @for ($i=10; $i <= 11; $i++)
                <div class="col-md-6">
                  <div class="blog-entry animate-box">
                    <div class="blog-img blog-img2" style="background-image: url(images/{{$news[$i]->image}});">
                      <div class="desc text-center">
                        <p class="tag"><span>{{$news[$i]->tag}}</span></p>
                        <h2 class="head-article"><a href="single/{{$news[$i]->id}}">{{$news[$i]->caption}}</a></h2>
                        <p>{{$news[$i]->subtitle}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              @endfor
              <div class="col-md-12">
                <div class="blog-entry animate-box">
                  <div class="blog-img blog-img2" style="background-image: url(images/{{$news[12]->image}});">
                    <div class="desc text-center">
                      <p class="tag"><span>{{$news[12]->tag}}</span></p>
                      <h2 class="head-article"><a href="single/{{$news[12]->id}}">{{$news[12]->caption}}</a></h2>
                      <p>{{$news[12]->subtitle}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="blog-entry animate-box">
              <div class="blog-img" style="background-image: url(images/{{$news[13]->image}});">
                <div class="desc text-center">
                  <p class="tag"><span>{{$news[13]->tag}}</span></p>
                  <h2 class="head-article"><a href="single/{{$news[13]->id}}">{{$news[13]->caption}}</a></h2>
                  <p>{{$news[13]->subtitle}}</p>
                </div>
              </div>
            </div>
          </div>
      </div>

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
</div>
@endsection
