@php
    $content = $page_details->content;
@endphp
<x-app-layout>
<x-slot name="metadata">
    <x-meta-data :details="$page_details" />
</x-slot>
<x-slot name="header">

</x-slot>
@php
    $background_image = asset('html/img/partners-banner.jpg');
    if($content['media_id_1'] && $content['media_id_1']->file_path)
        $background_image = asset($content['media_id_1']->file_path);
@endphp
<section id="partners--section">
    <div class="partners-banner-block" style="background-image:url('{{$background_image}}')">
        <div class="container container-width">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                    <form class="contact-form-block">
                        <h2>{{$content['title_1']}}</h2>
                        

                        <div class="partners-form-block">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-input-block">
                                        <label for="">Your Name</label>
                                        <input type="text" placeholder="Enter Your name" class="input-form">
                                    </div>
                                </div>

                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-8">
                                    <div class="form-input-block">
                                        <label for="">Shop Type</label>
                                        <input type="text" placeholder="Shop Type" class="input-form">
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-4">
                                    <div class="form-input-block">
                                        <label for="">Number of Shops</label>
                                        <input type="text" placeholder="Number of Shops" class="input-form">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-input-block">
                                        <label for="">Phone Number</label>
                                        <input type="text" placeholder="Phone Number" class="input-form">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-input-block">
                                        <label for="">Email</label>
                                        <input type="text" placeholder="Email" class="input-form">
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-input-block">
                                        <label for="">Address</label>
                                        <textarea type="text" placeholder="Address" class="input-form"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-input-block">
                                        <label for="">Contact Person’s Role</label>
                                        <input type="text" placeholder="Contact Person’s Role" class="input-form">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <button class="submit-btn">Submit</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@if($content['listing_id_listing'] && count($content['listing_id_listing']->list))
<section id="what-you-get-section">
	<div class="container container-width">
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="what-you-get-block-content">
                    <div class="what-you-get-title">
                        <h2>{{$content['title_2']}}</h2>
                    </div>
                </div>
            </div>
            @foreach($content['listing_id_listing']->list as $list)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="what-you-get-content-block-item">
                    <div class="what-you-get-block-icon">
                        <x-image :image="$list->media" />
                    </div>
                    <div class="what-you-get-block-item-text">
                        <h3>{{$list->title}}</h3>
                        <p>{!! nl2br($list->description) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif




<section id="registered-partner-section">
	<div class="container container-width">
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="registered-partner-block">
                    <div class="row align-items-center col-rev">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="registered-partner-block-text">
                                <h2>{!! $content['title_3'] !!}</h2>
                                <div class="title-btn-group">
                                    <a href="{{url('contact-us')}}" class="btn-fill">Contact Us</a>
                                    <a href="#" class="btn-border">Deliver Now</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 reg-img-block">
                            <div class="registered-partner-block-img">
                                <x-image :image="$content['media_id_3']" class="img-responsive"/>
                            </div>
                            <div class="meg-icon">
                                <img src="{{asset('html/img/msg.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="svg-icon-01 anim-pop">
                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M99.6148 7.80162C119.62 7.80162 139.084 14.2961 155.081 26.3085C171.077 38.321 182.742 55.202 188.321 74.4133C193.899 93.6246 193.09 114.128 186.015 132.84C178.94 151.552 165.981 167.461 149.088 178.176C132.194 188.89 112.279 193.831 92.3361 192.254C72.3934 190.678 53.5015 182.67 38.501 169.434C23.5006 156.199 13.2024 138.451 9.15502 118.86C5.10764 99.2687 7.52983 78.8931 16.0574 60.7968" stroke="#F36262" stroke-width="14.4894" stroke-linecap="round"/>
                            <path d="M99.2524 36.0566C110.128 36.0566 120.826 38.8073 130.352 44.0527C139.879 49.2981 147.924 56.8679 153.739 66.0577C159.554 75.2476 162.95 85.7589 163.611 96.6139C164.272 107.469 162.177 118.315 157.521 128.142C152.864 137.97 145.798 146.461 136.978 152.824C128.159 159.187 117.874 163.216 107.079 164.536C96.2845 165.856 85.3313 164.424 75.2386 160.374C65.1459 156.323 56.2416 149.786 49.3541 141.37" stroke="#F3B962" stroke-width="14.4894" stroke-linecap="round"/>
                            <path d="M99.6148 64.3116C104.324 64.3116 108.987 65.2392 113.338 67.0413C117.689 68.8435 121.643 71.4851 124.973 74.8151C128.303 78.1451 130.944 82.0985 132.746 86.4493C134.549 90.8002 135.476 95.4635 135.476 100.173C135.476 104.882 134.549 109.546 132.746 113.896C130.944 118.247 128.303 122.201 124.973 125.531C121.643 128.861 117.689 131.502 113.338 133.304C108.987 135.107 104.324 136.034 99.6148 136.034" stroke="white" stroke-width="14.4894" stroke-linecap="round"/>
                            </svg>
                    </div>

                    <div class="svg-icon-02 anim-pop">
                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.55661" width="199.229" height="199.229" rx="0.86525" fill="#FEC456"/>
                            </svg>
                            
                    </div>
                    <div class="svg-icon-03 anim-pop">
                        <svg width="208" height="208" viewBox="0 0 208 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M205.558 101.016C208.188 102.343 208.188 105.359 205.558 106.686L6.62498 207.075C3.7642 208.518 8.25123e-05 206.908 8.26289e-05 204.24L9.14051e-05 3.46276C9.15217e-05 0.794848 3.76418 -0.815989 6.62495 0.627658C6.62495 0.627658 202.928 99.6889 205.558 101.016Z" fill="#F04C63"/>
                            </svg>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<x-slot name="footer">
</x-slot>

</x-app-layout>
