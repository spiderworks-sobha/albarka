<header>
		<div class="container container-width">
			<div class="row">
				<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light ">
					<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset($common_settings['logo'])}}" alt="Albarka"></a>
					<button class="navbar-toggler" type="button"
					  data-toggle="collapse" data-target="#nav-bar">
						<span class="sr-only"> Switch Menu </span>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="nav-bar">
						<ul class="navbar-nav">
							<x-menu menu-name="Main Menu" />
						</ul>
					</div>
		
					<div class="header-btn">
						<a href="{{url('contact-us')}}"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 11C16 11.442 15.8244 11.866 15.5118 12.1785C15.1993 12.4911 14.7754 12.6667 14.3333 12.6667H4.33333L1 16V2.66667C1 2.22464 1.17559 1.80072 1.48816 1.48816C1.80072 1.17559 2.22464 1 2.66667 1H14.3333C14.7754 1 15.1993 1.17559 15.5118 1.48816C15.8244 1.80072 16 2.22464 16 2.66667V11Z" stroke="#21A9E1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Contact Us</a>
					</div>

				</nav>
				</div>
			</div>
		</div>
	
</header>