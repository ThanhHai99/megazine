@extends('layouts.guest.guest')
@section('content')

<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="container-wrap">
			<div class="row">
				<div class="col-md-9">
					<div class="content-wrap">
						<article class="animate-box">
							<div class="blog-img" style="background-image: url(images/{{$newsDetails[0]->image}});"></div>
							<div class="desc">
								<div class="meta">
									<p>
										<span>#{{$newsDetails[0]->tag}}</span>
										<span><?= date('d F Y', strtotime($newsDetails[0]->created_at)); ?></span>
										<span> {{$newsDetails[0]->name}} </span>
										<span id="total-comment"><a href="javascript:void(0)">{{ count($comments) }} Comments</a></span>
									</p>
								</div>
								<!-- <h2><a>Take a perfect shot, capture everything in Nature</a></h2> -->
								<h2>{{$newsDetails[0]->caption}}</h2>
								<p>{{$newsDetails[0]->subtitle}}</p>
								<!-- <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
							</div>
						</article>
						<div class="row row-bottom-padded-md">
							<div class="col-md-12 animate-box" id="content-comment">
								<h2 class="heading-2" id="total-comment">{{ count($comments) }} Comments</h2>
								@foreach($comments as $comment)
									<div class="review">
										<div class="user-img" style="background-image: url(images/default-user.png)"></div>
										<div class="desc">
											<h4>
												<span class="text-left">{{ $comment->name }}</span>
												<span class="text-right"><?= date('d F Y', strtotime($comment->created_at)); ?></span>
											</h4>
											<p>{{ $comment->content }}</p>
											<p class="star">
												<span class="text-left"><a href="javascript:void(0)" class="reply"><i class="icon-reply2"></i></a></span>
											</p>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						
							<div class="row">
								<div class="col-md-12 animate-box">
									<h2 class="heading-2">Comment</h2>
									<form id="post_comment" method="PUT" enctype="multipart/form-data">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ (Request::segment(2)) }}">

										<div class="row form-group">
											<div class="col-md-12">
												<!-- <label for="message">Message</label> -->
												<textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Say something about this news"></textarea>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" value="Post Comment" class="btn btn-primary">
										</div>
									</form>	
								</div>
							</div>
					</div>
				</div>
				<div class="col-md-3 sticky-parent">
					<div class="sidebar" id="sticky_item">
						<!-- <div class="side animate-box">
							<div class="form-group">
								<input type="text" class="form-control" id="search" placeholder="Enter to search...">
								<button type="submit" class="btn submit btn-primary"><i class="icon-search3"></i></button>
							</div>
						</div> -->
						<!-- <div class="side animate-box">
							<h2 class="sidebar-heading">Categories</h2>
							<p>
								<ul class="category">
									<li><a href="javascript:void(0)"><i class="icon-check"></i> Home</a></li>
									<li><a href="javascript:void(0)"><i class="icon-check"></i> About Me</a></li>
									<li><a href="javascript:void(0)"><i class="icon-check"></i> Blog</a></li>
									<li><a href="javascript:void(0)"><i class="icon-check"></i> Travel</a></li>
									<li><a href="javascript:void(0)"><i class="icon-check"></i> Lifestyle</a></li>
									<li><a href="javascript:void(0)"><i class="icon-check"></i> Fashion</a></li>
									<li><a href="javascript:void(0)"><i class="icon-check"></i> Health</a></li>
								</ul>
							</p>
						</div> -->
						<div class="side animate-box">
							<h2 class="sidebar-heading">Recent Blog</h2>
							@foreach ($newsRecents as $newsRecent)
								<div class="f-blog">
									<a href="single/{{ $newsRecent->id }}" class="blog-img" style="background-image: url(images/{{ $newsRecent->image }});">
									</a>
									<div class="desc">
										<h3><a href="single/{{ $newsRecent->id }}">{{ $newsRecent->caption }}</a></h3>
										<p class="admin"><span>{{ $newsRecent->created_at }}</span></p>
									</div>
								</div>
							@endforeach
						</div>
						<div class="side animate-box">
							<h2 class="sidebar-heading">Instagram</h2>
							<div class="instagram-entry">
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);">
								</a>
								<a href="javascript:void(0)" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);">
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