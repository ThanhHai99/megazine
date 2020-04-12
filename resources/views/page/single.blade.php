@extends('master')
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
										<span>{{$newsDetails[0]->tag}}</span>
										<span><?= date('d F Y', strtotime($newsDetails[0]->created_at)); ?></span>
										<span> admin </span>
										<span><a href="#">999 Comments</a></span>
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
							<div class="col-md-12 animate-box">
								<h2 class="heading-2">23 Comments</h2>
								<div class="review">
									<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
									<div class="desc">
										<h4>
											<span class="text-left">Jacob Webb</span>
											<span class="text-right">24 May 2018</span>
										</h4>
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										<p class="star">
											<span class="text-left"><a href="#" class="reply"><i class="icon-reply2"></i></a></span>
										</p>
									</div>
								</div>
								<div class="review">
									<div class="user-img" style="background-image: url(images/person2.jpg)"></div>
									<div class="desc">
										<h4>
											<span class="text-left">Jacob Webb</span>
											<span class="text-right">24 May 2018</span>
										</h4>
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										<p class="star">
											<span class="text-left"><a href="#" class="reply"><i class="icon-reply2"></i></a></span>
										</p>
									</div>
								</div>
								<div class="review">
									<div class="user-img" style="background-image: url(images/person3.jpg)"></div>
									<div class="desc">
										<h4>
											<span class="text-left">Jacob Webb</span>
											<span class="text-right">24 May 2018</span>
										</h4>
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										<p class="star">
											<span class="text-left"><a href="#" class="reply"><i class="icon-reply2"></i></a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box">
								<h2 class="heading-2">Say something</h2>
								<form action="#">
									<div class="row form-group">
										<div class="col-md-6">
											<!-- <label for="fname">First Name</label> -->
											<input type="text" id="fname" class="form-control" placeholder="Your firstname">
										</div>
										<div class="col-md-6">
											<!-- <label for="lname">Last Name</label> -->
											<input type="text" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="email">Email</label> -->
											<input type="text" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="subject">Subject</label> -->
											<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
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
</div>

@endsection