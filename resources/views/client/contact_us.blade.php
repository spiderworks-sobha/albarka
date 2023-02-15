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


<section id="home-contact-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="home-contact-block contact">
					<div class="row justify-content-center">
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-1"></div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10">
							<div class="row" >
								<div class="col-md-12" >
									<div class="contact-section-title-block">
										<div class="contact-section-title" >
											<span>{{$content['title_1']}}</span>
											<h2>{!! $content['sub_title_1'] !!}</h2>
										</div>
										<div class="contact-section-img">
											<x-image :image="$content['media_id_1']" />
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
							<x-contact-form :heading="$content['form_title_1']" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<x-location-map />



<x-slot name="footer">
<script src="{{asset('html/js/home_contact.js')}}"></script>

</x-slot>

</x-app-layout>
