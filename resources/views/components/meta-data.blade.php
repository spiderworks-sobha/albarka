@props(['details'])
<title>@if($details->browser_title) {{$details->browser_title}} @else Freshivores @endif</title>
<meta name="description" content="{{$details->meta_description}}">
<meta name="keywords" content="{{$details->meta_keywords}}">
@if($details->og_title)
    <meta property="og:title" content="{{$details->og_title}}" />
@endif
@if($details->og_description)
    <meta property="og:description" content="{{$details->og_description}}" />
@endif
@if($details->og_image_id && $details->og_image)
    <meta property="og:image" content="{{asset($details->og_image->file_path)}}" />
@elseif($details->banner_image_id && $details->banner_image)
    <meta property="og:image" content="{{asset($details->banner_image->file_path)}}" />
@endif
{!! $details->extra_js !!}