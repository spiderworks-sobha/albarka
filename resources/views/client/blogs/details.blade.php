<x-app-layout>
<x-slot name="metadata">
    <x-meta-data :details="$blog" />
</x-slot>
<x-slot name="header">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</x-slot>

<section id="inner-top-section">
   <div class="container container-width">
      <div class="row justify-content-center align-items-center">
         <div class="col-xl-12 col-lg-12">
            <div class="inner-top-block-">
               <div class="row align-items-top justify-content-between">
                  <div class="col-xl-12 col-lg-12 col-md-12">
                     <div class="breadcrumbs-block">
                        <ul>
                           <li>
                              <a href="{{url('/')}}">Home</a> 
                              <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_159_193)">
                                    <path d="M3.375 2.5L5.625 4.5L3.375 6.5" stroke="#667085" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_159_193">
                                       <rect width="9" height="8" fill="white" transform="translate(0 0.5)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                           </li>
                           <li>
                              <a href="{{url('blog')}}">Blog</a> 
                              <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_159_193)">
                                    <path d="M3.375 2.5L5.625 4.5L3.375 6.5" stroke="#667085" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_159_193">
                                       <rect width="9" height="8" fill="white" transform="translate(0 0.5)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                           </li>
                           <li>{{$blog->name}}</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<section id="blog-details-section">
	<div class="container container-width">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12">
                <div class="blog-details-block">
                    <div class="blog-details-block-banner">
                        <x-image :image="$blog->banner_image" class="img-responsive" />
                    </div>
                    <div class="blog-details-block-text">
                        <h1>{{$blog->title}}</h1>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="meta blog-title-block">
                                    <!-- <span class="article-author">
                                    <a href="#" class="author__avatar"><img src="img/riyaz.png" alt="Sabirah Islam" width="35" loading="lazy"></a>
                                    
                                    <a href="#" title="" class="author__name">Author Name</a></span> 

                                    <span class="sep">|</span>  -->
                                    
                                    <time datetime="2022-11-22T13:34:08"><i class="flaticon-calendar-with-spring-binder-and-date-blocks" ></i>
                                    {{date('M d, Y', strtotime($blog->created_at))}}</time> 
                                    
                                    <span class="sep">|</span>
                                    
                                    <span class="read-time"><i class="flaticon-time"></i>18 min read</span>
                                </div>
                            </div>
                        </div>


						<div class="row">
							<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12">
								<div class="single__blogpost__socialshare">
									<div class="we-social-share">
										<div class="social-share-text">
											<span class="text-dark">Share<br>Now</span>
										</div> 
										<ul>
											<li class="share-facebook"><a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><span tabindex="0" data-link="#share-facebook" class="share-link"><i class="fa fa-facebook"></i></span></a></li> 
											
											<li class="share-twitter"><a href="http://twitter.com/share?url={{Request::url()}}&text={{$blog->title}}" target="_blank"><span tabindex="0" data-link="#share-twitter" class="share-link"><i class="fa fa-twitter"></i></span></a></li> 
											
											<li class="share-linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&url={{Request::url()}}" target="_blank"><span tabindex="0" data-link="#share-linkedin" class="share-link"><i class="fa fa-linkedin"></i></span></a></li> 
											
											<li class="share-whatsapp"><a href="whatsapp://send?text={{Request::url()}}" data-action="share/whatsapp/share"><span tabindex="0" data-link="#share-whatsapp" class="share-link"><i class="fa fa-whatsapp"></i></span></a></li> 
										
										</ul>
									</div>
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-md-12">
								<div class="blog-detail-block-content">
                  {!! $blog->content !!}
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(count($latest_blogs))
<section id="blog-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-main-block">
					<div class="row">
						<div class="col-md-12">
							<div class="relatedt-post-title">
								<h2>Latest Blogs</h2>
							</div>
						</div>

            @foreach($latest_blogs as $lBlog)
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a href="{{url('blog', [$lBlog->slug])}}"><div class="blog-sub-block">
								<div class="blog-img-block">
                  <x-image :image="$lBlog->featured_image" class="img-responsive" />
								</div>
								<div class="blog-text-block">
									<span class="title-span">{{date('M Y', strtotime($lBlog->created_at))}}</span>
									<a href="{{url('blog', [$lBlog->slug])}}"><h2>{{$lBlog->title}}</h2></a>
	
									<p>{{$lBlog->short_description}}</p>
								</div>
							</div></a>
							
						</div>
            @endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<x-slot name="footer">


<script>

	$(document).ready(function() {
		var s = $(".we-social-share");
		var pos = s.position();					   
		$(window).scroll(function() {
			var windowpos = $(window).scrollTop();
			if (windowpos >= pos.top & windowpos <=2000) {
				s.addClass("show-share-this");
			} else {
				s.removeClass("show-share-this");	
			}
		});
	});

</script>
</x-slot>






</x-app-layout>
