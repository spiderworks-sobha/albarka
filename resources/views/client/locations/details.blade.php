<x-app-layout>
<x-slot name="metadata">
    <x-meta-data :details="$location" />
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
                           <li>{{$location->name}}</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>





<section id="location-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-page-2-cloum-title">
                    <h1>{!! $location->title !!}</h1>
                    {!! $location->content !!}
                    <div class="title-btn-group">
                        <a href="{{url('contact-us')}}" class="btn-fill">Contact Us</a>
                        <a href="#" class="btn-border">Deliver Now</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-page-2-cloum-map">
                    <x-image :image="$location->banner_image" />
                </div>
            </div>
        </div>
    </div>
</section>

<x-delivery-items />

<x-testimonials />

<x-faq :faq="$location->faq" />

@if(!empty(strip_tags($location->bottom_description)))
<section id="footer-link--text-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-link--text-block">
					{!! $location->bottom_description !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endif

<x-support />

<x-slot name="footer">

</x-slot>

</x-app-layout>
