@props(['image', 'class', 'defaultImage'])

@if(!empty($image) && $image->file_path)
    <img src="{{asset($image->file_path)}}" alt="{{$image->title}}" class="{{$class??''}}">
@else
    <img src="{{!empty($defaultImage)?asset($defaultImage):asset('assets/images/placeholder-icon.png')}}" class="{{$class??''}}" />
@endif
