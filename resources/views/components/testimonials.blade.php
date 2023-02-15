@if(count($testimonials))
<section id="testimony-section">
	<div class="container container-width">
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="testimony-block-content">
                    <div class="testimont-title">
                        <h2>{{$testimonial_content->title}}</h2>
                    </div>
                </div>
            </div>



            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="testimony-slider">
                    @foreach($testimonials as $testimonial)
                    <div class="testimony-block-content-item">
                        <div class="testimony-au-img-block">
                            <x-image :image="$testimonial->featured_image" />
                            <div class="testimony-au-img-block-dt">
                                <i><svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 3.5L4 6.5L9.5 1" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></i>
                                <h5>{{$testimonial->name}}</h5>
                                <h6>{{$testimonial->designation}}</h6>
                            </div>
                        </div>

                        <p>{{$testimonial->comment}}</p>
                    </div>
                    @endforeach

                </div>
            </div>

        

        </div>
    </div>
</section>
@endif