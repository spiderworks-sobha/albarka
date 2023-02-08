@php
    $content = $page_details->content;
@endphp
<x-app-layout>
<x-slot name="metadata">
    <x-meta-data :details="$page_details" />
</x-slot>
<x-slot name="header">

</x-slot>

<section id="home-banner-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="home-banner-block" data-aos="fade-up"  data-aos-duration="500"
				data-aos-offset="0">
					<div class="home-banner-text-block home-delivery-block" >
						<div class="home-banner-text-block-text">
							<h1 >{!! $content['title_1'] !!}</h1>

							{!! $content['description_1'] !!}
	
						</div>
						
						<div class="home-banner-selectbox" >
							<label for="">Deliver my thing to</label>
							<select name="sources" id="sources" class="custom-select sources" placeholder="Locations">
								<option value="a">Qusais 2, Dubai</option>
								<option value="b">Qusais 2, Dubai</option>
								<option value="c">Qusais 2, Dubai</option>
							</select>
							<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
								</svg>
								
							
						</div>
						
						<div class="selectbox-block">
							<div class="home-banner-selectbox yourname" >
								<label for="">Your Name</label>
								<input type="text" placeholder="Your name">
								<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
									</svg>
							</div>


							<div class="home-banner-selectbox yourphonenumber" >
								<label for="">Your Phone Number</label>
								<input type="text" placeholder="Your Phone Number">
								<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
									</svg>
							</div>


						</div>

						<button class="delivery-btn" >Deliver Now</button>

					</div>
					<div class="home-banner-img-block">
						<x-image :image="$content['media_id_1']" class="img-responsive" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<section id="home-delivery-by-location-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="home-delivery-by-location-block" >
					<div class="inner-title-block">
						<div class="row" data-aos="fade-up"  data-aos-duration="1000"
						data-aos-offset="0">
							<div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-12">
								<div class="inner-title">
									<img src="{{asset('html/img/deliver-location-icon.svg')}}" alt="">
									<h2>{{$content['title_2']}}</h2>
								</div>
							</div>

							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12">
								<div class="view-all-location-link">
									<a href="#">View All Locations<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 16L16 12L12 8" stroke="#0F0094" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M7 12L15 12" stroke="#0F0094" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										</a>
								</div>
							</div>
						</div>

						<div class="row" data-aos="fade-up"  data-aos-duration="1000"
						data-aos-offset="0">
							<div class="col-md-12">
								<div class="featured-cities-block">
									<div class="row no-gutters">
										@foreach($locations as $location)
										<div class="col featured-cities-block-container">
											<a href="{{url('location', [$location->slug])}}">
												<div class="featured-cities-block-item">
													<div class="featured-cities-block-item-map">
														<x-image :image="$location->featured_image" />
													</div>
													<div class="featured-cities-block-item-text">
														<h3>{{$location->name}}</h3>
														<p>{{$location->short_content}}</p>
													</div>
												</div>
											</a>
										</div>
										@endforeach
										<div class="col featured-cities-block-container view-all-location">
											<a href="#">
												<div class="featured-cities-block-item view-all-btn-block">
													<span><svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 16L16 12L12 8" stroke="#0F0094" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M7 12L15 12" stroke="#0F0094" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														</span>
													<h4>View All Location</h4>
												</div>
											</a>
										</div>



									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





<section id="home-delivery-steps-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="home-delivery-steps-block">
					<div class="section-title-center" data-aos="fade-up"  data-aos-duration="1000"
					data-aos-offset="0">
						<span>{{$content['title_3']}}</span>
						<h2>{!! nl2br($content['description_3']) !!}</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="row" data-aos="fade-up"  data-aos-duration="1000"
		data-aos-offset="0">
			<div class="col-md-12">
				<div class="step-slider-wrapper">
					<div class="deliver-step-slider">
						<div class="deliver-step-slider-item step01">
							<div class="step-number">
								01
							</div>
							<div class="step-title-block">
								<h2>{!! $content['title_3_1'] !!}</h2>
								<image :image="$content['media_id_3_1']" />
							</div>
							<p>{!! nl2br($content['description_3_1']) !!}</p>
						</div>

						<div class="deliver-step-slider-item step02 ">
							<div class="step-number">
								02
							</div>
							<div class="step-title-block">
								<h2>{!! $content['title_3_2'] !!}</h2>
								<image :image="$content['media_id_3_2']" />
							</div>
							<p>{!! nl2br($content['description_3_2']) !!}</p>
						</div>

						<div class="deliver-step-slider-item step03">
							<div class="step-number">
								03
							</div>
							<div class="step-title-block">
								<h2>{!! $content['title_3_3'] !!}</h2>
								<image :image="$content['media_id_3_3']" />
							</div>
							<p>{!! nl2br($content['description_3_3']) !!}</p>
						</div>

						<div class="deliver-step-slider-item step04">
							<div class="step-number">
								04
							</div>
							<div class="step-title-block">
								<h2>{!! $content['title_3_4'] !!}</h2>
								<image :image="$content['media_id_3_4']" />
							</div>
							<p>{!! nl2br($content['description_3_4']) !!}</p>
						</div>
						
					  </div>
				  </div>
			</div>
		</div>
	</div>
</section>





<section id="home-contact-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="home-contact-block">
					<div class="row justify-content-center">
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-1"></div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10">
							<div class="row" >
								<div class="col-md-12" >
									<div class="contact-section-title-block">
										<div class="contact-section-title" >
											<span>{{$content['title_4']}}</span>
											<h2>{!! $content['sub_title_4'] !!}</h2>
										</div>
										<div class="contact-section-img">
											<x-image :image="$content['media_id_4']" />
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-1"></div>
					</div>
				</div>

				<div class="contact-form-block-content">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-md-8 col-sm-8 col-11">
							<form class="contact-form-block" action="" >
								<h4>{{$content['form_heading_4']}}</h4>
		
								<div class="form-input-block">
									<svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle r="3.2" transform="matrix(-1 0 0 1 5.60005 3.2)" fill="#0F0094"/>
									<path d="M0 11.1477C0 10.4595 0.432683 9.84547 1.08087 9.61397C4.00323 8.57027 7.19677 8.57027 10.1191 9.61397C10.7673 9.84547 11.2 10.4595 11.2 11.1477V12.2001C11.2 13.1501 10.3586 13.8798 9.41823 13.7455L9.10469 13.7007C6.78003 13.3686 4.41997 13.3686 2.0953 13.7007L1.78177 13.7455C0.841363 13.8798 0 13.1501 0 12.2001V11.1477Z" fill="#0F0094"/>
									</svg>
									
									<input type="text" placeholder="Your Name">
								</div>
		
								<div class="form-input-block">
									<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.18929C0 1.87561 1.87561 0 4.18929 0H11.475C13.7887 0 15.6643 1.87561 15.6643 4.18929V8.56071C15.6643 10.8744 13.7887 12.75 11.475 12.75H4.18929C1.87561 12.75 0 10.8744 0 8.56071V4.18929ZM3.76049 3.78929C3.53958 3.6236 3.22618 3.66837 3.06049 3.88929C2.89481 4.1102 2.93958 4.4236 3.16049 4.58929L6.33192 6.96786C7.22081 7.63452 8.44303 7.63452 9.33192 6.96786L12.5033 4.58929C12.7243 4.4236 12.769 4.1102 12.6033 3.88929C12.4377 3.66837 12.1243 3.6236 11.9033 3.78929L8.73192 6.16786C8.19859 6.56786 7.46525 6.56786 6.93192 6.16786L3.76049 3.78929Z" fill="#0F0094"/>
									</svg>
										
									<input type="text" placeholder="Your Email">
								</div>
		
		
								<div class="form-input-block">
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.1549 13.458C9.79766 14.8129 6.32181 13.5398 3.39138 10.6145C0.460949 7.68914 -0.814364 4.21932 0.542884 2.86442L1.43653 1.97233C2.05346 1.35647 3.07002 1.37275 3.70707 2.00869L5.09125 3.39046C5.7283 4.02641 5.7446 5.0412 5.12767 5.65706L4.93573 5.84867C4.60263 6.18118 4.57005 6.71759 4.87955 7.092C5.17809 7.45315 5.49993 7.81286 5.8489 8.16122C6.19786 8.50958 6.55821 8.83087 6.91998 9.12889C7.29504 9.43785 7.83238 9.40532 8.16547 9.07281L8.35742 8.8812C8.97435 8.26534 9.99091 8.28162 10.628 8.91756L12.0121 10.2993C12.6492 10.9353 12.6655 11.9501 12.0486 12.5659L11.1549 13.458Z" fill="#0F0094"/>
										<path d="M10.1582 5.68073C9.98873 5.2681 9.73619 4.88151 9.40057 4.54646C9.08389 4.23034 8.72125 3.98806 8.3341 3.81962" stroke="#0F0094" stroke-linecap="round"/>
										<path d="M8.33402 1.45984C9.26091 1.79505 10.1306 2.33355 10.8737 3.07536C11.6354 3.83578 12.1831 4.72896 12.5169 5.68036" stroke="#0F0094" stroke-linecap="round"/>
										</svg>
										
									<input type="text" placeholder="Phone Number">
								</div>
		
								<div class="form-input-block">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.601 2.32605C12.8675 1.58573 11.9939 0.998793 11.0313 0.599454C10.0687 0.200115 9.03617 -0.00364427 7.994 4.93305e-05C3.627 4.93305e-05 0.068 3.55805 0.064 7.92605C0.064 9.32505 0.43 10.686 1.121 11.891L0 16L4.204 14.898C5.367 15.531 6.66993 15.8627 7.994 15.863H7.998C12.366 15.863 15.924 12.305 15.928 7.93305C15.929 6.89109 15.7238 5.85924 15.3243 4.89693C14.9247 3.93462 14.3397 3.06088 13.601 2.32605ZM7.994 14.521C6.813 14.5214 5.6537 14.2036 4.638 13.601L4.398 13.457L1.904 14.111L2.57 11.6781L2.414 11.427C1.75381 10.3774 1.40465 9.16208 1.407 7.92205C1.407 4.29605 4.364 1.33805 7.998 1.33805C8.86374 1.3365 9.72123 1.50632 10.521 1.83774C11.3208 2.16916 12.0471 2.65561 12.658 3.26905C13.271 3.8801 13.757 4.60647 14.0879 5.40628C14.4188 6.20609 14.5881 7.06349 14.586 7.92905C14.582 11.568 11.625 14.521 7.994 14.521ZM11.609 9.58705C11.412 9.48805 10.439 9.00905 10.256 8.94105C10.074 8.87605 9.941 8.84205 9.811 9.04005C9.678 9.23705 9.298 9.68605 9.184 9.81505C9.07 9.94805 8.952 9.96305 8.754 9.86505C8.557 9.76505 7.918 9.55705 7.162 8.88005C6.572 8.35505 6.177 7.70505 6.059 7.50805C5.945 7.31005 6.048 7.20405 6.147 7.10505C6.234 7.01705 6.344 6.87305 6.443 6.75905C6.543 6.64505 6.576 6.56105 6.641 6.42905C6.706 6.29505 6.675 6.18105 6.626 6.08205C6.576 5.98305 6.181 5.00605 6.014 4.61205C5.854 4.22305 5.691 4.27705 5.569 4.27205C5.455 4.26505 5.322 4.26505 5.189 4.26505C5.08856 4.26755 4.98973 4.29078 4.89869 4.33328C4.80766 4.37579 4.7264 4.43665 4.66 4.51205C4.478 4.71005 3.969 5.18905 3.969 6.16605C3.969 7.14305 4.679 8.08205 4.779 8.21505C4.877 8.34805 6.173 10.347 8.162 11.207C8.632 11.412 9.002 11.533 9.291 11.625C9.766 11.7771 10.195 11.754 10.537 11.705C10.917 11.647 11.708 11.225 11.875 10.762C12.039 10.298 12.039 9.90205 11.989 9.81905C11.94 9.73505 11.807 9.68605 11.609 9.58705Z" fill="#0F0094"/>
										</svg>
										
										
									<input type="text" placeholder="Whatsapp Number">
								</div>
		
								<div class="form-input-block">
									<svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.4381C0 2.87695 2.91566 0 6.5 0C10.0843 0 13 2.87695 13 6.4381C13 8.65295 11.7084 10.8389 10.3395 12.4301C9.64678 13.2354 8.91153 13.9152 8.26299 14.3987C7.93924 14.64 7.62807 14.8392 7.3472 14.9806C7.0839 15.1132 6.78321 15.2286 6.5 15.2286C6.21679 15.2286 5.9161 15.1132 5.6528 14.9806C5.37193 14.8392 5.06076 14.64 4.73701 14.3987C4.08847 13.9152 3.35322 13.2354 2.6605 12.4301C1.29162 10.8389 0 8.65295 0 6.4381ZM6.50052 8.35631C5.26972 8.35631 4.27195 7.35855 4.27195 6.12774C4.27195 4.89694 5.26972 3.89917 6.50052 3.89917C7.73133 3.89917 8.7291 4.89694 8.7291 6.12774C8.7291 7.35855 7.73133 8.35631 6.50052 8.35631Z" fill="#0F0094"/>
										</svg>
										
										
										
									<input type="text" placeholder="Location">
								</div>
		
		
								<button class="submit-btn">Send message</button>
		
		
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<x-location-map :location="$locations" />






<section id="blog-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-main-block">
					<div class="row align-items-center">
						@if($first_blog)
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="blog-main-block-img">
								<x-image :image="$first_blog->banner_image" class="img-responsive" />

								<div class="blog-main-block-img-text">
									<span>{{date('M Y', strtotime($first_blog->created_at))}}</span>
									<h3><a href="{{url('blog', [$first_blog->slug])}}">{{$first_blog->title}}</a></h3>
								</div>
							</div>
						</div>
						@endif
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="blog-main-block-text">
								<span class="title-span">{{$content['sub_title_5']}}</span>
								<h2>{{$content['title_5']}}</h2>
								<p>{{$content['description_3_1']}}</p>

								<a href="{{url('blog')}}" class="view-all-blog desk">VIEW ALL BLOGS <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 16L16 12L12 8" stroke="#1E195C" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 12L15 12" stroke="#1E195C" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
							</div>
						</div>
					</div>
					@if(count($blogs))
					<div class="row">
						@foreach($blogs as $blog)
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="blog-sub-block">
								<div class="blog-img-block">
									<x-image :image="$blog->banner_image" class="img-responsive" />
								</div>
								<div class="blog-text-block">
									<span class="title-span">{{date('M Y', strtotime($blog->created_at))}}</span>
									<h2><a href="{{url('blog', [$blog->slug])}}">{{$blog->title}}</a></h2>
	
									<p>{{$blog->short_description}}</p>
								</div>
							</div>
							
						</div>
						@endforeach
						<div class="col-md-12">
							<a href="{{url('blog')}}" class="view-all-blog mob">VIEW ALL BLOGS <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 16L16 12L12 8" stroke="#1E195C" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 12L15 12" stroke="#1E195C" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>



<x-faq :faq="$page_details->faq" />



<x-support />

<x-slot name="footer">
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.deliver-step-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            arrows: true,
            dots: false,
            speed: 800,
            centerPadding: '0px',
            infinite:true,
            draggable: false,
            autoplaySpeed: 2000,
            focusOnSelect: true,
            autoplay: true,
            responsive: [
        {
            breakpoint: 991,
            settings: {
            slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            }
        }
        ]
        });
        });
    </script>

    <script>
        $(".lg-hotspot").hover(
            function() {
                $(this).addClass("lg-hotspot--hover");
            },
            function() {
                $(this).removeClass("lg-hotspot--hover");
            }
        );
    </script>

    <script>
        $(document).on('click', 'body', function(e) {
            $('.lg-hotspot').addClass("lg-hotspot--selected");
            $('.lg-hotspot').removeClass('lg-hotspot--selected');
        })
    </script>

    <script>
	
    $('.delivery-block').click( function() {
        $(".delivery--fixed").toggleClass("active");
    } );
    
    
       // First we detect the click event
      $('.dl-close').click(function() {
        // Using an if statement to check the class
        if ($('.delivery--fixed').hasClass('active')) {
            $('.delivery--fixed').removeClass('active');
        } else  {
        }
    });
    
    </script>
    
    
    <script>
    jQuery(document).ready(function(){
        jQuery('.home-delivery-block .custom-select-wrapper').click(function(event){
            jQuery('.home-delivery-block .selectbox-block').removeClass('active');
            jQuery('.home-delivery-block .selectbox-block').addClass('active');
            jQuery('.home-delivery-block .home-banner-text-block-text').removeClass('active');
            jQuery('.home-delivery-block .home-banner-text-block-text').addClass('active');
    
    
            event.preventDefault();
        });
    });
    </script>
    
    
    <script>
        jQuery(document).ready(function(){
            jQuery('.fixed .custom-select-wrapper').click(function(event){
                jQuery('.fixed .selectbox-block').removeClass('active');
                jQuery('.fixed .selectbox-block').addClass('active');
                
        
        
                event.preventDefault();
            });
        });
        </script>
</x-slot>

</x-app-layout>
