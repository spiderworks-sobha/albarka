$(function(){
    $(".lg-hotspot").hover(
        function() {
            $(this).addClass("lg-hotspot--hover");
        },
        function() {
            $(this).removeClass("lg-hotspot--hover");
        }
    );

    $(document).on('click', 'body', function(e) {
        $('.lg-hotspot').addClass("lg-hotspot--selected");
        $('.lg-hotspot').removeClass('lg-hotspot--selected');
    })
})