@php
    $content = $page_details->content;
@endphp
<x-app-layout>
<x-slot name="metadata">
    <x-meta-data :details="$page_details" />
</x-slot>
<x-slot name="header">
</x-slot>

<section id="inner-top-section">
   <div class="container container-width">
      <div class="row justify-content-center align-items-center">
         <div class="col-xl-12 col-lg-12">
            <div class="inner-top-block">
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
                           <li>{{$page_details->name}}</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12">
                     <div class="inner-top-block-title">
                        <div>
                           <span>{{$page_details->sub_title}}</span>
                           <h1>{{$page_details->title}}</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>





<section id="blog-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-main-block">
          @if($latest_blog)
					<div class="row align-items-center">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="blog-main-block-img">
                <x-image :image="$latest_blog->banner_image" class="img-responsive" />

								<div class="blog-main-block-img-text">
									<div class="bg-title-b left">
                        <span class="latest-tag">LATEST</span>{{date('M d, Y', strtotime($latest_blog->created_at))}}
                  </div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="blog-main-block-text">
                @if($latest_blog->category)
								  <span class="title-span">{{$latest_blog->category->name}}</span>
                @endif
								<a href="{{url('blog', [$latest_blog->slug])}}"><h2>{{$latest_blog->title}}</h2></a>
								<p>{{$latest_blog->short_description}}</p>

								
							</div>
						</div>
					</div>
          @endif
					<div class="row">
            @foreach($blogs as $blog)
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<a href="{{url('blog', [$blog->slug])}}"><div class="blog-sub-block">
								<div class="blog-img-block">
                  <x-image :image="$blog->featured_image" class="img-responsive" />
								</div>
								<div class="blog-text-block">
									<span class="title-span">{{date('M Y', strtotime($blog->created_at))}}</span>
									<a href="{{url('blog', [$blog->slug])}}"><h2>{{$blog->title}}</h2></a>
	
									<p>{{$blog->short_description}}</p>
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

<x-slot name="footer">
</x-slot>

</x-app-layout>
