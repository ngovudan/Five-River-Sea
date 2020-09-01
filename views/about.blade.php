@extends('layouts._layout')
@section('content')
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">The Blog</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_image"><img src="images/blog_1.jpg" alt="https://unsplash.com/@saskiafairfull"></div>
								<div class="blog_post_content">
									<div class="blog_post_date"><a href="#">June 18, 2018</a></div>
									<div class="blog_post_title"><a href="#">10 Nightwear dresses you need to see</a></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_author">By<a href="#"> Admin</a></div>
										<div class="blog_post_category">
											<ul>
												<li>in <a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="blog_post_comments"><a href="#">3 Comments</a></div>
									</div>
									<div class="blog_post_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_image"><img src="images/blog_2.jpg" alt="https://unsplash.com/@veronezcaroline"></div>
								<div class="blog_post_content">
									<div class="blog_post_date"><a href="#">June 18, 2018</a></div>
									<div class="blog_post_title"><a href="#">Summer Vibes with these 10 essential pieces</a></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_author">By<a href="#"> Admin</a></div>
										<div class="blog_post_category">
											<ul>
												<li>in <a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="blog_post_comments"><a href="#">3 Comments</a></div>
									</div>
									<div class="blog_post_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_image"><img src="images/blog_3.jpg" alt=""></div>
								<div class="blog_post_content">
									<div class="blog_post_date"><a href="#">June 18, 2018</a></div>
									<div class="blog_post_title"><a href="#">Trend Allert: Hot Summer Sunglesses</a></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_author">By<a href="#"> Admin</a></div>
										<div class="blog_post_category">
											<ul>
												<li>in <a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="blog_post_comments"><a href="#">3 Comments</a></div>
									</div>
									<div class="blog_post_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="load_more_button trans_200 ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
`
@endsection