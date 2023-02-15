<form id="{{$form}}" class="location-form" action="{{url('contact/save')}}" method="POST">
                              @csrf
							  <input type="hidden" name="source_url" value="{{url()->full()}}" />
							  <input type="hidden" name="lead_type" value="Delivery" />
    <div class="home-banner-selectbox" >
							<label for="">Deliver my thing to</label>
							<select name="location" class="custom-select sources" placeholder="Locations">
                                @foreach($locations as $location)
								    <option value="{{$location->id}}" @if($selected == $location->id) selected="selected" @endif>{{$location->name}}</option>
                                @endforeach
							</select>
                            <span class="location_location_error"></span>
							<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
								</svg>
								
							
						</div>
						
						<div class="selectbox-block">
							<div class="home-banner-selectbox yourname" >
								<label for="">Your Name</label>
								<input type="text" name="name" placeholder="Your name">
                                <span class="name_location_error"></span>
								<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.60976C0 3.40052 3.44628 0 7.68293 0C11.9196 0 15.3659 3.40052 15.3659 7.60976C15.3659 10.2277 13.8392 12.8115 12.2212 14.6923C11.4024 15.6441 10.5333 16.4476 9.76676 17.0191C9.3841 17.3043 9.0163 17.5398 8.68431 17.7069C8.37309 17.8637 8.01768 18 7.68293 18C7.34818 18 6.99277 17.8637 6.68154 17.7069C6.34956 17.5398 5.98176 17.3043 5.59909 17.0191C4.83253 16.4476 3.96347 15.6441 3.14468 14.6923C1.52668 12.8115 0 10.2277 0 7.60976ZM7.68293 9.87805C6.22813 9.87805 5.04878 8.6987 5.04878 7.2439C5.04878 5.7891 6.22813 4.60976 7.68293 4.60976C9.13772 4.60976 10.3171 5.7891 10.3171 7.2439C10.3171 8.6987 9.13772 9.87805 7.68293 9.87805Z" fill="#00D496"/>
									</svg>
							</div>

							<div class="home-banner-selectbox yourphonenumber" >
								<label for="">Your Phone Number</label>
								<input placeholder="Your Phone Number" type="tel" name="phone_number" value="+91 " class="phone">
                                <span class="phone_number_location_error"></span>
							</div>


						</div>
						<input type="hidden" name="recaptcha" >
						<button class="delivery-btn" @if($form != 'popupForm') disabled @endif >Deliver Now</button>
</form>