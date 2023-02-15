<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->

<!-- bootstrap library -->
<script src="{{asset('html/dist/js/bootstrap.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>




<script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>
<script src="{{asset('admin/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>


<script>
  
// International telephone format
// $("#phone").intlTelInput();
// get the country data from the plugin
//var input = document.querySelector(".phone");

const phone_numbers = [...document.querySelectorAll('.phone')];

for (i in phone_numbers) {
  console.log(phone_numbers[i]);
  window.intlTelInput(phone_numbers[i], {
    hiddenInput: "full_phone",
    utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
  });
}


</script>

    





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