<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Albarka</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
   </head>
   <body>
      <div style="max-width:700px; margin:0px auto; position: relative; font-family: 'Roboto', sans-serif;  background-color: #f5f5f5;">
         <div>
            <div style="width:100%; text-align:center;">
               <img src="{{asset($common_settings['logo'])}}" style="width: auto;">
            </div>
            @section('content')
            @show
            <div style=" padding: 25px; margin: 30px 30px 0; background-color: #21A9E1; color: #fff; text-align: center; ">
               <div>
                  <a href="{{url('/')}}" style="display: inline-block; border: 1px dashed #fff; padding:5px 10px ; color:#fff; font-size: 14px;  text-decoration: none;">
                    {{url('/')}}
                  </a>
               </div>
               <div style="text-align: center; margin-top: 20px;">
                    @if(!empty($common_settings['facebook-link']))
                        <a href="{{$common_settings['facebook-link']}}" style="display: inline-block; margin: 0 3px; text-decoration: none;  ">
                            <img src="{{asset('mail/facebook-fill.png')}}"/>
                        </a>
                    @endif
                    @if(!empty($common_settings['intagram-link']))
                        <a href="{{$common_settings['intagram-link']}}" style="display: inline-block;  margin: 0 3px;  text-decoration: none;">
                            <img src="{{asset('mail/instagram-line.png')}}"/>
                        </a>
                    @endif
                    @if(!empty($common_settings['whatsapp_number']))
                        <a href="https://wa.me/{{$common_settings['whatsapp_number']}}" style="display: inline-block; margin: 0 3px;  text-decoration: none;  ">
                            <img src="{{asset('mail/whatsapp-line.png')}}"/>
                        </a>
                    @endif
               </div>
            </div>
         </div>
      </div>
   </body>
</html>