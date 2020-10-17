@include('zgenwebsite.layouts.header')

<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">Mediumish</h1>
		<p class="lead">
			 Bootstrap theme, medium style, simply perfect for bloggers
		</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Featured</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		@foreach ($hitPosts as $hitPost)
		@php
			$oldDate = $hitPost->created_at;
			$date = strtotime($oldDate);
			$newDate = date("d F Y",$date);

			$sentenceCount = str_word_count($hitPost->content);
			$readingMin = $sentenceCount / 150;
			if($readingMin < 1){
				$readingMin = 1;
			}
		@endphp
			<!-- begin post -->
			<div class="card">
				<div class="row">
					<div class="col-md-5 wrapthumbnail">
						<a href="post.html">
							<div class="thumbnail" style="background-image:url(assets/img/demopic/4.jpg);">
							</div>
						</a>
					</div>
					<div class="col-md-7">
						<div class="card-block">
							<h2 class="card-title"><a href="post.html">{{$hitPost->header}}</a></h2>
							<h4 class="card-text">{{substr($hitPost->content,0,50)}}...</h4>
							<div class="metafooter">
								<div class="wrapfooter">
									<span class="meta-footer-thumb">
									<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
									</span>
									<span class="author-meta">
									<span class="post-name"><a href="author.html">Author Name</a></span><br/>
									<span class="post-date">{{ $newDate }}</span><span class="dot"></span><span class="post-read">{{$readingMin}} min read</span>
									<br><span class="post-date">{{$hitPost->hit}} Hits</span>
									</span>
									<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end post -->
		@endforeach

	</div>
	</section>
	<!-- End Featured
	================================================== -->

	<!-- Begin List Posts All Posts Section
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>All Posts</span></h2>
	</div>
	<div class="card-columns listrecent">

		
		@foreach ($posts as $post)
			@php
			$oldDate = $post->created_at;
			$date = strtotime($oldDate);
			$newDate = date("d F Y",$date);

			$sentenceCount = str_word_count($post->content);
			$readingMin = $sentenceCount / 150;
			if($readingMin < 1){
				$readingMin = 1;
			}

			@endphp
			<!-- begin post -->
			<div class="card">
				<a href="post.html">
					<img class="img-fluid" src="assets/img/demopic/6.jpg" alt="">
				</a>
				<div class="card-block">
					<h2 class="card-title"><a href="post.html">{{$post->header}}</a></h2>
					<h4 class="card-text">{{substr($post->content,0,50)}}...</h4>
					<div class="metafooter">
						<div class="wrapfooter">
							<span class="meta-footer-thumb">
							<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
							</span>
							<span class="author-meta">
							<span class="post-name"><a href="author.html">Author name</a></span><br/>
							<span class="post-date">{{ $newDate }}</span><span class="dot"></span><span class="post-read">{{$readingMin}} min read</span>
							<br><span class="post-date">{{$post->hit}} Hits</span>
							</span>
							<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
						</div>
					</div>
				</div>
			</div>
			<!-- end post -->
		@endforeach
		

		

	</div>
	</section>
	<!-- End List Posts
	================================================== -->


@include('zgenwebsite.layouts.footer')