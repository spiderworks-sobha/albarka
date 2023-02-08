<section id="cta-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="cta-block">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-6 col-md-6 col-12">
							<div class="cta-text-block">
								<h2>{{$support_content->title}}</h2>
								<p>{{$support_content->content}}</p>
								<a href="{{url('contact-us')}}" class="cta-btn">Contact Us</a>
							</div>
						</div>

						<div class="col-xl-4 col-lg-5 col-md-6 col-12">
							<div class="cta-img-block">
                                <x-image :image="$support_content->media_id_support_image" class="img-responsive" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>