<form class="contact-form-block" action="{{url('contact/save')}}" method="POST" id="contactForm">
@csrf
<input type="hidden" name="source_url" value="{{url()->full()}}" />
								<h4>{{$heading}}</h4>
		
								<div class="form-input-block">
									<svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle r="3.2" transform="matrix(-1 0 0 1 5.60005 3.2)" fill="#0F0094"/>
									<path d="M0 11.1477C0 10.4595 0.432683 9.84547 1.08087 9.61397C4.00323 8.57027 7.19677 8.57027 10.1191 9.61397C10.7673 9.84547 11.2 10.4595 11.2 11.1477V12.2001C11.2 13.1501 10.3586 13.8798 9.41823 13.7455L9.10469 13.7007C6.78003 13.3686 4.41997 13.3686 2.0953 13.7007L1.78177 13.7455C0.841363 13.8798 0 13.1501 0 12.2001V11.1477Z" fill="#0F0094"/>
									</svg>
									
									<input type="text" placeholder="Your Name" name="name">
                                    <span class="name_contact_error"></span>
								</div>
		
								<div class="form-input-block">
									<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.18929C0 1.87561 1.87561 0 4.18929 0H11.475C13.7887 0 15.6643 1.87561 15.6643 4.18929V8.56071C15.6643 10.8744 13.7887 12.75 11.475 12.75H4.18929C1.87561 12.75 0 10.8744 0 8.56071V4.18929ZM3.76049 3.78929C3.53958 3.6236 3.22618 3.66837 3.06049 3.88929C2.89481 4.1102 2.93958 4.4236 3.16049 4.58929L6.33192 6.96786C7.22081 7.63452 8.44303 7.63452 9.33192 6.96786L12.5033 4.58929C12.7243 4.4236 12.769 4.1102 12.6033 3.88929C12.4377 3.66837 12.1243 3.6236 11.9033 3.78929L8.73192 6.16786C8.19859 6.56786 7.46525 6.56786 6.93192 6.16786L3.76049 3.78929Z" fill="#0F0094"/>
									</svg>
										
									<input type="text" placeholder="Your Email" name="email">
                                    <span class="email_contact_error"></span>
								</div>
		
		
								<div class="form-input-block">
										<input placeholder="Your Phone Number" type="tel"  value="+971 " name="phone_number" class="phone">
                                        <span class="phone_number_contact_error"></span>
								</div>
		
								<div class="form-input-block">										
									<input type="tel"  placeholder="Whatsapp Number" name="whatsapp" value="+971 " class="phone">
								</div>
		
								<div class="form-input-block">
									<svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.4381C0 2.87695 2.91566 0 6.5 0C10.0843 0 13 2.87695 13 6.4381C13 8.65295 11.7084 10.8389 10.3395 12.4301C9.64678 13.2354 8.91153 13.9152 8.26299 14.3987C7.93924 14.64 7.62807 14.8392 7.3472 14.9806C7.0839 15.1132 6.78321 15.2286 6.5 15.2286C6.21679 15.2286 5.9161 15.1132 5.6528 14.9806C5.37193 14.8392 5.06076 14.64 4.73701 14.3987C4.08847 13.9152 3.35322 13.2354 2.6605 12.4301C1.29162 10.8389 0 8.65295 0 6.4381ZM6.50052 8.35631C5.26972 8.35631 4.27195 7.35855 4.27195 6.12774C4.27195 4.89694 5.26972 3.89917 6.50052 3.89917C7.73133 3.89917 8.7291 4.89694 8.7291 6.12774C8.7291 7.35855 7.73133 8.35631 6.50052 8.35631Z" fill="#0F0094"/>
										</svg>
										
										
										
									<input type="text" placeholder="Location" name="location">
								</div>
                                <input type="hidden" name="recaptcha" >
								<p>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

								<button class="submit-btn">Send message</button>
		
		
							</form>