@extends('email._layouts.base')

@section('content')
<h1>{{$common_settings['site_name']}} Contact Request</h1>

    <p>You have received a contact request. Please check below link for more details. 👍</p>
    @php
        $extra_data = json_decode($data->extra_data);
    @endphp
    <table class="email-table">
        <thead >
            
            <tr> <td>Name:</td><td > {{$data->name}}</td> </tr>               
            <tr> <td>Email:</td><td > {{$data->email}}</td> </tr>
            @if($data->message)             
            <tr> <td>message:</td><td > {{$data->message}}</td> </tr> 
            @endif  

        </thead>
        
                
    </table>


    <button class="email-btn"><a href="{{url('sw-admin')}}">View Details</a></button>

@endsection