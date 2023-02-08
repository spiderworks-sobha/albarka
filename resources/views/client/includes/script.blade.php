<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->

<!-- bootstrap library -->
<script src="{{asset('html/dist/js/bootstrap.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>

<script src="{{asset('html/js/main.js')}}"></script>
<script src="{{asset('html/js/aos.js')}}"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>


<script>
	
   // First we detect the click event
   $('.navbar-toggler').click(function() {
    // Using an if statement to check the class
    if ($('header').hasClass('active')) {
        $('header').removeClass('active');
    } else  {
		$('header').addClass('active');
    }
});


</script>



<script>
	  jQuery(".footer-link-item-block").click(function(){
	  jQuery(this).parent(".nav").toggleClass("open"); 
	  jQuery('html, body').animate({ scrollTop: jQuery(this).offset().top - 170 }, 1500 );
  });
  
</script>
<script>
	

$(window).scroll(function(){
  if ($(this).scrollTop() > 800) {
     $('.delivery-block').addClass('active');
  } else {
     $('.delivery-block').removeClass('active');
  }
});


</script>