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
				<div class="home-banner-block delivery-wrapper" data-aos="fade-up"  data-aos-duration="500"
				data-aos-offset="0">
					<div class="home-banner-text-block home-delivery-block" >
						<div class="home-banner-text-block-text">
							<h1 >{!! $content['title_1'] !!}</h1>

							{!! $content['description_1'] !!}
	
						</div>
						
						<x-location-form :locations="$locations" form="bannerForm" />

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
									<a href="#" data-toggle="modal" data-target="#deliverypopup">Deliver Now<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
											<a href="#" data-toggle="modal" data-target="#deliverypopup">
												<div class="featured-cities-block-item view-all-btn-block">
													<span><svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 16L16 12L12 8" stroke="#0F0094" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M7 12L15 12" stroke="#0F0094" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														</span>
													<h4>Deliver Now</h4>
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
							<x-contact-form :heading="$content['form_heading_4']" />
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

<div class="delivery-block fixed">
			<div class="delivery-block-item">
				<button class="delivery-btn- fixed"><img src="{{asset('html/img/delivery-icon.png')}}" alt=""></button>
			</div>
	
			<div class="delivery-block-item-mobile">
				<div class="delivery-block-item-mob-input">
					

					<div class="home-banner-selectbox" >
						<label for="">Deliver my thing to</label>
						<select name="sources" id="sources" class="custom-select sources" placeholder="Locations">
							<option value="Qusais 2, Dubai">Qusais 2, Dubai</option>
							<option value="Qusais 2, Dubai">Qusais 2, Dubai</option>
							<option value="Qusais 2, Dubai">Qusais 2, Dubai</option>
						</select>
						<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
							</svg>
					</div>


				</div>

				<button class="bl-btn-mob">DELIVER NOW</button>
			</div>

		</div>


<div class="home-banner-text-block fixed delivery-wrapper">
	<div class="dl-close">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
	</div>
	<h1 >Do Hassle-Free <span>Courier Now!</span></h1>
	<x-location-form :locations="$locations" form="footerForm" />
</div>

<!-- Modal -->
<div class="modal right fade" id="deliverypopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				

			<div class="modal-body">
            <div class="popup-detail-block">

            <div class="home-banner-text-block-text">
							<h3>Do Hassle-Free <span>Courier Now!</span></h3>

						</div>
                  <x-location-form :locations="[$location]" form="popupForm" :selected="$location->id" />
            </div>

			</div>

		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<x-slot name="footer">
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="{{asset('html/js/home_contact.js')}}"></script>
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
		$(function(){
			$(document).on('click', '.delivery-wrapper .custom-select-wrapper', function(){
				$(this).parents('.delivery-wrapper').find('.selectbox-block').removeClass('active');
				$(this).parents('.delivery-wrapper').find('.selectbox-block').addClass('active');
            	$(this).parents('.delivery-wrapper').find('.home-banner-text-block-text').removeClass('active');
				$(this).parents('.delivery-wrapper').find('.home-banner-text-block-text').addClass('active');
				$(this).parents('form').find('button').prop('disabled', false);
			})
		})

    </script>

</x-slot>

</x-app-layout>
