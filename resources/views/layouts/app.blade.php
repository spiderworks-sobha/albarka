<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
        {!! $common_settings['google_tag_manager_head'] !!}
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset($common_settings['fav_icon'])}}">
        <link rel="canonical" href="{{url()->current()}}" />
        {!! $metadata??'<title>Albarka Delivery</title>' !!}
        @include('client.includes.style')
        {{ $header??'' }}
        {!! $common_settings['other_common_scripts'] !!}
        <style>
            .grecaptcha-badge { visibility: hidden; }

            #popupForm .selectbox-block {
                display: block;
            }
        </style>
        
   </head>
   <body>
        {!! $common_settings['google_tag_manager_body'] !!}
        <x-header />

        {{ $slot }}

        <x-footer />

         <script>
               const base_url = "{{url('/')}}";
               var _token = "{{csrf_token()}}";
               var AuthUser = "{{ (Auth::user()) ? true : false }}";
         </script>
        @include('client.includes.script')
        {{ $footer??'' }}
        <script src="https://www.google.com/recaptcha/api.js?render={{config('services.google_recaptcha.site_key')}}"></script>
        <script>
            grecaptcha.ready(function() {
                get_recaptcha();
            });
            jQuery.validator.addMethod("phonenu", function(value, element) {
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

			$('.location-form').each(function () {
                $(this).validate({
                    rules:
                    {
						location: "required",
                        name: "required",
                        phone_number: {
                            required: true,
                            phonenu: true,
                        },
                    },
                    messages:
                    {
						location: "Please select delivery location",
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
                                                $(form).find("."+key+"_location_error").html(val);
                                            });
                                    }
                                    else
                                    {
                                        location.href="{{url('thankyou')}}";  
                                    }
                                },
                                error:function(xhr){
                                    button.prop('disabled', false).html(button_text);
                                    var errors = $.parseJSON(xhr.responseText);
                                    $.each(errors, function (key, val) {
                                        $(form).find("."+key+"_location_error").html(val);
                                    });
                                    get_recaptcha();
                                }
                            });
                    }
                });
            });
            var get_recaptcha = function() {
                grecaptcha.ready(function() {
                    grecaptcha.execute("{{config('services.google_recaptcha.site_key')}}", {
                        action: 'validate_captcha'
                    }).then(function(token) {
                        if (token) {
                            var recaptchaElements = document.getElementsByName('recaptcha');
                            for (var i = 0; i < recaptchaElements.length; i++) {
                                recaptchaElements[i].value = token;
                            }
                            }
                    });
                });
            }
        </script>
   </body>
</html>
