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

    jQuery.validator.addMethod("phonenum", function(value, element) {
        if (value == '')
            return true;
        var regexPattern = new RegExp(/^[0-9-+ ]+$/);
        if (value.length >= 8 && value.length <= 15) {
            if (regexPattern.test(value)) {
                return true;
            } else {
                return false;
            };
        } else
            return false;
    }, "Invalid phone number");

    $("#contactForm").validate({
        rules:
        {
            name: "required",
            phone_number: {
                required: true,
                phonenum: true,
            },
            whatsapp: {
                phonenum: true,
            },
            email: {
                email: true,
            },
        },
        messages:
        {
            name: "Please enter your name",
            phone_number: {
                required: "Please enter your phone number",
            },
        },
        submitHandler:function(form)
        {
            var button = $(form).find('button');
            var button_text = button.html();
            button.prop('disabled', true).html('Processing...');
            var formurl = $(form).attr('action');
                $.ajax({
                    url: formurl ,
                    type: "POST", 
                    data: new FormData($(form)[0]),
                    cache: false, 
                    processData: false,
                    contentType: false, 
                    success: function(data) {
                        button.prop('disabled', false).html(button_text);
                        if (typeof data.errors != "undefined") {
                            var errors = JSON.parse(JSON.stringify(data.errors))
                                $.each(errors, function (key, val) {
                                    $(form).find("."+key+"_contact_error").html(val);
                                });
                        }
                        else
                        {
                            location.href=base_url+"/thankyou";  
                        }
                    },
                    error:function(xhr){
                        button.prop('disabled', false).html(button_text);
                        var errors = $.parseJSON(xhr.responseText);
                        $.each(errors, function (key, val) {
                            $(form).find("."+key+"_contact_error").html(val);
                        });
                        get_recaptcha();
                    }
                });
        }
    });
})