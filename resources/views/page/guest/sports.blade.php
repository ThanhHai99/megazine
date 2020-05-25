@extends('layouts.guest.guest')
@section('content')

<div id="colorlib-main">
  <div class="colorlib-featured">
    <div class="row">
      <div class="col-md-8">
        <div class="featured-post item-sports">
          <div class="blog-img" style="background-image: url(images/{{ $hotNewsSports[0]->image }});">
            <div class="desc">
              <p class="tag"><span>{{ $hotNewsSports[0]->tag }}</span></p>
              <h2><a href="single/{{ $hotNewsSports[0]->id }}">{{ $hotNewsSports[0]->caption }}</a></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        @for ($i=1; $i <= 3; $i++)
          <div class="featured-post2 item-sports">
            <a href="single/{{$hotNewsSports[$i]->id}}" class="blog-img" style="background-image: url(images/{{ $hotNewsSports[$i]->image }});">
              <span class="desc">
                <p class="tag"><span>{{ $hotNewsSports[$i]->tag }}</span></p>
                <h2>{{ $hotNewsSports[$i]->caption }}</h2>
              </span>
            </a>
          </div>
        @endfor
      </div>
    </div>
  </div>
  <div class="colorlib-blog">
    <div class="container-wrap">
      <div class="row content">
        @foreach ($newsNewests as $newsNewest)
          <div class="col-md-4 text-center item-sports">
            <div class="blog-entry-sports animate-box">
              <a href="single/{{$newsNewest->id}}" class="blog-img" style="background-image: url(images/{{ $newsNewest->image }});">
              </a>
              <div class="desc">
                <p class="tag"><span>{{ $newsNewest->tag }}</span></p>
                <h2 class="head-article"><a href="single/{{$newsNewest->id}}">{{ $newsNewest->caption }}</a></h2>
                <p>{{ $newsNewest->subtitle }}</p>
              </div>
            </div>
          </div>
        @endforeach  
      </div>

      <div class="row text-center" id="div-load-more-sports">
        <div class="col-xs-3 center-block">
          <button type="button" class="btn btn-info btn-outline" id="loadMoreSports">Load more</button>
        </div>
      </div>

      {{ csrf_field() }}

      <!-- <div class="row">
        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
          <ul class="pagination">
            <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
            <li class="active"><a href="javascript:void(0)">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">4</a></li>
            <li><a href="javascript:void(0)">&raquo;</a></li>
          </ul>
        </div>
      </div> -->
    </div>
  </div>			
</div>

@endsection