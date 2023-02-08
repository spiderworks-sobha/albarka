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
   </body>
</html>
