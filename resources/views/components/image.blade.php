@props(['image', 'class', 'default-image'])

@if($image && $image->file_path)
    <img src="{{asset($image->file_path)}}" alt="{{$image->title}}" class="{{$class??''}}">
@else
    <img src="{{!empty($default-image)?asset($default-image):asset('assets/images/placeholder-icon.png')}}" class="{{$class??''}}" />
@endif
