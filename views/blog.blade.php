@extends('layouts._layout')
<link href="{{asset('assets')}}/css/all.min.css" rel="stylesheet" />
@section('content')
	<!-- Home -->

	<style>
	/* .mb-11, .my-11 {
		margin-bottom: 4rem!important;
	}

	.mb-5, .my-5 {
		margin-bottom: 1rem!important;
	} */

	/* figure.ie-curved-y.position-absolute.right-0.bottom-0.left-0.mb-n1 {width: 100%;z-index: 99;background: #ffffff00;bottom: -20px;}
	svg.ie-curved-x.position-absolute.top-0.right-0.bottom-0 {
		right: 0;
		top: 0;
	} */
	
	</style>
	
	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images')}}/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">FRS - Blog</div>
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

						<div class="blog_bosts">
						
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="images/blog_3.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="images/blog_1.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="images/blog_2.jpg" alt="Third slide">
								</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
								</a>
							</div>

						</div>
						<br>
						<!-- Blog Posts -->
					</div>
				</div>
				<!-- Tag & search -->
				<div class="row justify-content-lg-between align-items-lg-center mb-7">
					<div class="col-lg-6 mb-5 mb-lg-0">
					<!-- Tags -->
					<div class="d-sm-flex align-items-sm-center text-center text-sm-left">
						<span class="d-block mr-sm-3 mb-2 mb-sm-1">Tags:</span>
						<a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Business</a>
						<a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Health</a>
						<a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Environment</a>
						<a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="javascript:;">Adventure</a>
					</div>
					<!-- End Tags -->
					</div>

					<div class="col-lg-4">
					<!-- Input -->
					<form class="input-group input-group-sm input-group-merge input-group-flush">
						<input type="search" class="form-control" placeholder="Search articles" aria-label="Search articles" aria-describedby="searchLabel">
						<div class="input-group-append">
						<div class="input-group-text" id="searchLabel">
							<i class="fas fa-search"></i>
						</div>
						</div>
					</form>
					<!-- End Input -->
					</div>
				</div>
				<!-- End Tag & search -->

				<!-- Blog Card -->
				<article class="card mb-11">
					<div class="row no-gutters">
					<div class="col-lg-8">
						<div class="position-relative">
						<img class="card-img" src="https://streamlabs.nyc3.cdn.digitaloceanspaces.com/assets/img/900x450/img2.jpg" alt="Image Description">
						<figure class="d-none d-lg-block">
							<svg class="ie-curved-x position-absolute top-0 right-0 bottom-0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920" height="100%">
							<path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z"></path>
							</svg>
						</figure>
						<figure class="d-lg-none mb-n1">
							<svg class="ie-curved-y position-absolute right-0 bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
							<path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
							</svg>
						</figure>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card-body d-flex flex-column h-100 p-4 p-lg-5">
						<h2><a class="text-inherit" href="single-article.html">record stories for kids</a></h2>
						<p>Google is constantly updating its consumer AI, Google Assistant, with new features.</p>
						<div class="media align-items-center mt-auto">
							<div class="views">
								<p>Lượt Xem </p>
							</div>
							<div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
							July 15
							</div>
						</div>
						</div>
					</div>
					</div>
				</article>
				<!-- End Blog Card -->

				<!-- Title --> 
				<div class="row mb-5">
					<div class="col-6">
						<h2 class="h3 mb-0">Bài Viết</h2>
					</div>
					<div class="col-6 text-right">
						<a class="font-weight-bold" href="#">Xem tất cả <i class="fas fa-angle-right fa-sm ml-1"></i></a>
					</div>
				</div>
				<!-- End Title -->

				<div class="row mb-3">
					@foreach($Blogs as $blog)
						<div class="col-sm-6 col-lg-4 mb-3 mb-sm-8">
							<a href="/blogDetail/{{$blog -> id}}">

								<!-- Blog Card -->
								<article class="card h-100">
									<div class="card-img-top position-relative">
										<img class="card-img-top" src="{{asset('images')}}/{{$blog -> imgB}}" alt="Image Description">
										<figure class="ie-curved-y position-absolute right-0 bottom-0 left-0 mb-n1">
											<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
												<path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
											</svg>
										</figure>
									</div>

									<div class="card-body">
										<h3><a class="text-inherit" href="/blogDetail/{{$blog -> id}}">{!!$blog -> nameB!!}</a></h3>
										<p>{!!$blog -> description!!}</p>
									</div>

									<div class="card-footer border-0">
										<div class="media align-items-center">
											<div class="views">
												<p>{{$blog -> view}} Lượt Xem </p>
											</div>
											<div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
											July 15
											</div>
										</div>
									</div>
								</article>
							</a>
							<td>
								<a href="/blog/delete/{{$blog->id}}" class="btn btn-primary">delete</a>
								<a href="/blog/edit/{{$blog->id}}" class="btn btn-primary">edit</a>
							</td>
							<!-- End Blog Card -->
						</div>
					@endforeach
				</div>
		
				<!-- <div class="col-md-10">
					<div class="case">
						@foreach($Blogs as $blog)
						<a href="/blogDetail/{{$blog -> id}}">
							<div class="row">
								<div class="col-md-6 col-lg-6 col-xl-8 d-flex">
									<a href="/blogDetail/{{$blog -> id}}" class="img w-100 m-1 mb-md-0" style="background-image: url({{asset('images')}}/{{$blog->imgB}});"></a>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
									<div class="text w-100 pl-md-3">
										<span class="subheading">Illustration</span>
										<h2><a href="/blogDetail/{{$blog -> id}}">{{$blog->nameB}}</a></h2>
										<ul class="media-social list-unstyled">
											<li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
											<li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
											<li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
										</ul>
										<div class="meta">
											<p class="mb-0"><a href="#">{{$blog->dayB}}</a> | <a href="#">{{$blog->view}}</a></p>
										</div>
									</div>
									<td>
										<a href="/blog/delete/{{$blog->id}}" class="btn btn-primary">delete</a>
										<a href="/blog/edit/{{$blog->id}}" class="btn btn-primary">edit</a>
									</td>
								</div>
							</div>
						</a>
						@endforeach
					</div>
				</div> -->

				<div class="row load_more_row">
					<div class="col">
						<div class="load_more_button trans_200 ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
		</div>
	

	<!-- Newsletter -->

	
@endsection