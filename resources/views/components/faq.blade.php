<section id="faq-section">
	<div class="container container-width">
		<div class="row altair-faq-block">
			<div class="col-md-12">
				<div class="faq-block">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 col-12">
							<div class="section-title">
								<span class="title-span">{{$faq_content->sub_title}}</span>
								<h2>{!! $faq_content->title !!}</h2>
								<p>{!! nl2br($faq_content->content) !!}</p>
                                @if(!empty($faq_content->link_text) && !empty($faq_content->link_url))
								    <a href="url($faq_content->link_url)"><button class="faq-btn">{{$faq_content->link_text}}<svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5H11.5M11.5 5L7 1M11.5 5L7 9.5" stroke="#21A9E1" stroke-width="2"></path></svg>
								</button></a>
                                @endif
							</div>
						</div>
						
						<div class="col-lg-7 col-md-7 col-sm-6 col-12">
							<div id="accordion" class="accordion">
								<div class="accordion-block">
									<div class="accordion-header" data-toggle="collapse" href="#collapseOne"><a class="">How this work?</a>
									</div>
									
									<div id="collapseOne" class="accordion-block-content collapse show" data-parent="#accordion">
										<p>Yet bed any for assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything joy alteration boisterous the attachment.</p>
									</div>
									
									<div class="accordion-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><a class="accordion-title">Are there any additional fee?</a>
									</div>
									
									<div id="collapseTwo" class="accordion-block-content collapse" data-parent="#accordion">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, suntaliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecatcraft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									
									</div>
									
									<div class="accordion-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										<a class="accordion-title">How can I get the Contract?</a>
									</div>
									
									<div id="collapseThree" class="collapse" data-parent="#accordion">
										<div class="accordion-block-content"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, suntaliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecatcraft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
										</div>
									</div>
									
									<div class="accordion-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><a class="accordion-title">What features do you offer and other not</a>
									</div>
			
									<div id="collapseFour" class="collapse" data-parent="#accordion">
										<div class="accordion-block-content">
											<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, suntaliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecatcraft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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