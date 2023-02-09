<section id="delivery-everywhere-section">
	<div class="container container-width">
		<div class="row">
			<div class="col-md-12">
				<div class="delivery-everywhere-container">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="section-title-center" >
								<span>{{$location_map_content->sub_title}}</span>
								<h2>{{$location_map_content->title}}</h2>
							</div>
						</div>


						<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-11">
							<div class="uae-map-container">
								<img src="{{asset('html/img/uae-map.svg')}}" alt="">
                                @foreach($map_locations as $mLocation)
                                    <?php
                                        $style_array = [];
                                        if(!empty($mLocation['map_position_top']))
                                            $style_array[] = "top:{$mLocation['map_position_top']}%";
                                        if(!empty($mLocation['map_position_bottom']))
                                            $style_array[] = "bottom:{$mLocation['map_position_bottom']}%";
                                        if(!empty($mLocation['map_position_right']))
                                            $style_array[] = "right:{$mLocation['map_position_right']}%";
                                        if(!empty($mLocation['map_position_left']))
                                            $style_array[] = "left:{$mLocation['map_position_left']}%";
                                        $style = implode(';', $style_array);
                                    ?>
                                    <div class="lg-hotspot" style="{{$style}}">
                                        <div class="lg-hotspot__button">
                                        </div>
                                        <div class="lg-hotspot__label">
                                            <h4>{{$mLocation->name}}</h4>
                                            <p>{{$mLocation->address}}</p>
                                            
                                            <button class="delivery-btn" data-toggle="modal" data-target="#deliverypopup">deliver here</button>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div>

					</div>

					<div class="row del-everywhere-support-block">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
							<div class="del-everywhere-support-block-item">
								<h4>{{$location_map_content->support_heading}}</h4>
								<p>{!! nl2br($common_settings['contact_address1']) !!}</p>
							</div>
						</div>

						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
							<div class="del-everywhere-support-block-item whatsapp">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47715 0 0 4.47715 0 10C0 11.8896 0.52505 13.6594 1.43756 15.1683L0.54581 18.2002C0.32023 18.9672 1.03284 19.6798 1.79975 19.4542L4.83171 18.5624C6.34058 19.475 8.1104 20 10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0ZM7.73821 12.2627C9.7607 14.2852 11.692 14.5518 12.3739 14.5769C13.4111 14.6151 14.421 13.823 14.8147 12.9042C14.9112 12.6792 14.8871 12.4085 14.7255 12.2014C14.1782 11.5005 13.4373 10.9983 12.7134 10.4984C12.4006 10.282 11.9705 10.349 11.7401 10.6555L11.1394 11.5706C11.0727 11.6721 10.9402 11.707 10.8348 11.6467C10.4283 11.4143 9.8356 11.018 9.4092 10.5916C8.9833 10.1657 8.6111 9.5998 8.4022 9.2195C8.3473 9.1195 8.3777 8.996 8.4692 8.928L9.3927 8.2422C9.6681 8.0038 9.7165 7.59887 9.5138 7.30228C9.065 6.64569 8.5422 5.8112 7.7855 5.25926C7.57883 5.1085 7.3174 5.09158 7.10155 5.18408C6.1817 5.5783 5.38574 6.58789 5.42398 7.62695C5.44908 8.3089 5.71572 10.2402 7.73821 12.2627Z" fill="white"/>
									</svg>
									
								<h4>{!! nl2br($common_settings['whatsapp_number']) !!}</h4>
								<p>{{$location_map_content->whatsapp_content}}</p>
							</div>
						</div>

						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
							<div class="del-everywhere-support-block-item">
								<h4>{{$location_map_content->contact_heading}}</h4>
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
</section>




<!-- Modal -->
<div class="modal right fade" id="deliverypopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				

			<div class="modal-body">
            <div class="popup-detail-block">

            <div class="home-banner-text-block-text">
							<h3>Do Hassle-Free <span>Courier Now!</span></h3>

						</div>
                  <div class="selectbox-block-popup">


                  <div class="home-banner-selectbox" >
							<label for="">Item to Deliver</label>
							<select name="sources" id="sources" class="custom-select sources" placeholder="Item to deliver">
								<option value="a">Documents</option>
								<option value="b">Documents</option>
								<option value="c">Phones</option>
							</select>
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 11C16 11.442 15.8244 11.866 15.5118 12.1785C15.1993 12.4911 14.7754 12.6667 14.3333 12.6667H4.33333L1 16V2.66667C1 2.22464 1.17559 1.80072 1.48816 1.48816C1.80072 1.17559 2.22464 1 2.66667 1H14.3333C14.7754 1 15.1993 1.17559 15.5118 1.48816C15.8244 1.80072 16 2.22464 16 2.66667V11Z" stroke="#00D496" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</div>


                  <div class="home-banner-selectbox2" >
                  <label for="">Deliver my thing to</label>
							<select name="sources" id="sources" class="custom-select sources" placeholder="Locations">
                     <option value="a">Qusais 2, Dubai</option>
								<option value="b">Qusais 2, Dubai</option>
								<option value="c">Qusais 2, Dubai</option>
							</select>
							<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
								</svg>
						</div>							


							<div class="home-banner-selectbox yourphonenumber" >
								<label for="">Your Phone Number</label>
								<input type="text" placeholder="Your Phone Number">
								<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.1549 13.458C9.79766 14.8129 6.32181 13.5398 3.39138 10.6145C0.460949 7.68914 -0.814364 4.21932 0.542884 2.86442L1.43653 1.97233C2.05346 1.35647 3.07002 1.37275 3.70707 2.00869L5.09125 3.39046C5.7283 4.02641 5.7446 5.0412 5.12767 5.65706L4.93573 5.84867C4.60263 6.18118 4.57005 6.71759 4.87955 7.092C5.17809 7.45315 5.49993 7.81286 5.8489 8.16122C6.19786 8.50958 6.55821 8.83087 6.91998 9.12889C7.29504 9.43785 7.83238 9.40532 8.16547 9.07281L8.35742 8.8812C8.97435 8.26534 9.99091 8.28162 10.628 8.91756L12.0121 10.2993C12.6492 10.9353 12.6655 11.9501 12.0486 12.5659L11.1549 13.458Z" fill="#00D496"></path>
										<path d="M10.1582 5.68073C9.98873 5.2681 9.73619 4.88151 9.40057 4.54646C9.08389 4.23034 8.72125 3.98806 8.3341 3.81962" stroke="#00D496" stroke-linecap="round"></path>
										<path d="M8.33402 1.45984C9.26091 1.79505 10.1306 2.33355 10.8737 3.07536C11.6354 3.83578 12.1831 4.72896 12.5169 5.68036" stroke="#00D496" stroke-linecap="round"></path>
										</svg>
							</div>


						</div>

						<button class="delivery-btn" >Deliver Now</button>
            </div>

			</div>

		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->


