<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->

<!-- bootstrap library -->
<script src="{{asset('html/dist/js/bootstrap.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


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

<script>
/* Cut results to 4 items and trigger load more button */
$(document).ready(function(){
  
  /* slice to 4 results at first load */
  $(".accordion-block-item").slice(0, 4).show();
  
  /* load more */
  $(".faq-btn-more").on("click", function(e){
    e.preventDefault();
    $(".accordion-block-item:hidden").slice(0, 4).fadeIn('easing');
    if($(".accordion-block-item:hidden").length == 0) {
      $(".faq-btn-more").hide();
    }
  });
  
});

</script>