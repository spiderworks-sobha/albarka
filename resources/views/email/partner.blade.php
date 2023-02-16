@extends('email._layouts.base')

@section('content')
<h1>{{$common_settings['site_name']}} Partner Registration</h1>

    <p>You have received a partner registration. Please check below link for more details. 👍</p>

    <table class="email-table">
        <thead >
            
            <tr> <td>Name:</td><td > {{$data->name}}</td> </tr>               
            <tr> <td>Phone:</td><td > {{$data->phone_number}}</td> </tr>
            <tr> <td>Email:</td><td > {{$data->email}}</td> </tr>
        </thead>
        
                
    </table>


    <button class="email-btn"><a href="{{url('sw-admin')}}">View Details</a></button>

@endsection