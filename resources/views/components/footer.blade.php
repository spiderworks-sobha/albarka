<section id="footer-link-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<x-menu menu-name="Footer Menu" />
			</div>
		</div>
	</div>
</section>


<footer>
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-bottom-block">
					<div class="row">
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12">
							<div class="footer-logo">
								<img src="{{asset($common_settings['logo_small'])}}" alt="Albarka">
							</div>
						</div>

						<div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-12">
							<div class="row">
								<div class="col-md-12">
									<div class="footer-link">
										<x-menu menu-name="Bottom Menu" />
									</div>
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="footer-contact-dt-block">
										<div class="footer-contact-dt-block-link">
											<p>{!! nl2br($common_settings['contact_address1']) !!}</p>
										</div>
	
										<div class="footer-contact-dt-block-link">
											<?php
												$contact_numbers = $common_settings['contact_number'];
												$contact_number_array = explode(',', $contact_numbers);
											?>
											@foreach($contact_number_array as $cNumber)
											<p><a href="tel:{{preg_replace('/[^0-9+]/','',$cNumber)}}">{{trim($cNumber)}}</p>
											@endforeach
											<p><a href="mailto:{{$common_settings['contact_email']}}">{{$common_settings['contact_email']}}</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="footer-copywrite-block">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="copywrite-text">
								Copyright © {{date('Y')}} 2021 Albarka Delivery Services
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="copywrite-text dev">
								Designed & Developed By <a href="https://www.spiderworks.in">SpiderWorks</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>