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
                           <span>{{$page_details->name}}</span>
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
<section id="project-appreciations-chart-section">
   <div class="container container-width">
      <div class="row justify-content-center align-items-center">
         <div class="col-xl-11 col-lg-11 ">
            <div class="project-appreciations-chart-block">
               <div class="dynamic-page-content-block">
                  <div class="dymanic-page-content-center-icon">
                     <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23" cy="23" r="23" fill="#FFD6E0" fill-opacity="0.38"></circle>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5144 18.1588C15.1969 18.3351 15 18.6698 15 19.0329V23.6716C15 27.3033 16.9689 30.6495 20.1436 32.4132L22.5144 33.7303C22.8164 33.8981 23.1836 33.8981 23.4856 33.7303L25.8564 32.4132C29.0311 30.6495 31 27.3033 31 23.6716V19.0329C31 18.6698 30.8031 18.3351 30.4856 18.1588L23.4856 14.2699C23.1836 14.1021 22.8164 14.1021 22.5144 14.2699L15.5144 18.1588ZM21.9697 26.5304C22.2626 26.8233 22.7374 26.8233 23.0303 26.5304L27.0303 22.5304C27.3232 22.2375 27.3232 21.7626 27.0303 21.4698C26.7374 21.1769 26.2626 21.1769 25.9697 21.4698L22.5 24.9394L21.0303 23.4698C20.7374 23.1769 20.2626 23.1769 19.9697 23.4698C19.6768 23.7626 19.6768 24.2375 19.9697 24.5304L21.9697 26.5304Z" fill="#1C2951"></path>
                     </svg>
                  </div>
                  {!! $page_details->content !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<x-slot name="footer">
</x-slot>

</x-app-layout>
