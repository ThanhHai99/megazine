@extends('layouts.guest.guest')
@section('content')

<div id="colorlib-main">
		<div class="colorlib-blog">
			<div class="container-wrap">
				<div class="col-md-9">
					<div class="content-wrap">
						<div class="row">
							@foreach ($news as $new)
								<div class="col-md-12 animate-box">
									<div class="archives">
										<p class="tag"><span>{{ $new->tag }}</span></p>
										<h2><a href="#">{{ $new->caption }} of <?= date('F Y', strtotime($new->created_at)); ?></a></h2>
									</div>
								</div>
							@endforeach
						</div>

						<div class="row mt-5">
							<div class="col text-center" style="text-align: center;">
								<div class="block-27">
									{{$news->links()}}
								</div>
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
							<div class="f-blog">
								<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
								</a>
								<div class="desc">
									<h3><a href="blog.html">Be a designer</a></h3>
									<p class="admin"><span>25 March 2018</span></p>
								</div>
							</div>
							<div class="f-blog">
								<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
								</a>
								<div class="desc">
									<h3><a href="blog.html">How to build website</a></h3>
									<p class="admin"><span>24 March 2018</span></p>
								</div>
							</div>
							<div class="f-blog">
								<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
								</a>
								<div class="desc">
									<h3><a href="blog.html">Create website</a></h3>
									<p class="admin"><span>23 March 2018</span></p>
								</div>
							</div>
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

@endsection