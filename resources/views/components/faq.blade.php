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
								    <a href="{{url($faq_content->link_url)}}"><button class="faq-btn">{{$faq_content->link_text}}<svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5H11.5M11.5 5L7 1M11.5 5L7 9.5" stroke="#21A9E1" stroke-width="2"></path></svg>
								</button></a>
                                @endif
							</div>
						</div>

						<div class="col-lg-7 col-md-7 col-sm-6 col-12">
							@if(count($faq))
							<div id="accordion" class="accordion">
								<div class="accordion-block">
									@foreach($faq as $key=>$item)
									<div class="accordion-block-item">
										<div class="accordion-header @if($key != 0) collapsed @endif" data-toggle="collapse" href="#collapse{{$key}}"><a class="@if($key != 0) accordion-title @endif">{{$item->question}}</a>
										</div>
										
										<div id="collapse{{$key}}" class="accordion-block-content collapse @if($key == 0) show @endif" data-parent="#accordion">
											{!! $item->answer !!}
										</div>
									</div>
									@endforeach
									
								</div>
							</div>
							@if(count($faq)>4)
							<div class="faq-btn-more-wrapper">
								<button class="faq-btn-more">More FAQ<svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5H11.5M11.5 5L7 1M11.5 5L7 9.5" stroke="#21A9E1" stroke-width="2"></path></svg>
								</button>
							</div>
							@endif
							@endif


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

