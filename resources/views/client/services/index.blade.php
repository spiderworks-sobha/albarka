@php
    $content = $page_details->content;
@endphp
<x-app-layout>
<x-slot name="metadata">
    <x-meta-data :details="$page_details" />
</x-slot>
<x-slot name="header">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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






<section class="container">
    <div class="row">
    <div class="col-md-12 ">
        <div class="faq" id="service-accordion">
            @foreach($services as $key=>$service)
            <div class="card">
                <div class="card-header" id="faqHeading-{{$key}}" data-toggle="collapse" data-target="#faqCollapse-{{$key}}" @if($key == 0) data-aria-expanded="true" @else data-aria-expanded="false" @endif data-aria-controls="faqCollapse-{{$key}}">
                    <div class="card-header-block">
                        <span class="badge">{{$key+1}}</span>
                        <h5 class="faq-title">{{$service->title}}</h5>
                    </div>
					<i class="ri-arrow-right-s-line"></i>
                    <a href="#" class="btn-fill">Deliver Now</a>
                </div>
                <div id="faqCollapse-{{$key}}" class="collapse @if($key == 0) show @endif" aria-labelledby="faqHeading-{{$key}}" data-parent="#service-accordion">
                    <div class="card-body">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>
            @endforeach
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

<x-slot name="footer">
</x-slot>

</x-app-layout>
