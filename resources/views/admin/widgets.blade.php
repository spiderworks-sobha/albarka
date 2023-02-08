@extends('admin._layouts.fileupload')
@section('content')
<!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    @include('admin._partials.profile_menu')
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                                                  
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">All Widgets</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Admin</a></li>
                                            <li class="breadcrumb-item active">All Widgets</li>
                                        </ol>
                                    </div><!--end col-->
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    @include('admin._partials.notifications')
                    <div class="row">
                        <div class="col-6">
                            <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="1">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            Location Map
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-md-6">
                                                <label>Title</label>
                                                <input type="text" name="section[title]" class="form-control" @if(isset($data['location_map']['title'])) value="{{$data['location_map']['title']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sub Title</label>
                                                <input type="text" name="section[sub_title]" class="form-control" @if(isset($data['location_map']['sub_title'])) value="{{$data['location_map']['sub_title']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Support Heading</label>
                                                <input type="text" name="section[support_heading]" class="form-control" @if(isset($data['location_map']['support_heading'])) value="{{$data['location_map']['support_heading']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Contact Heading</label>
                                                <input type="text" name="section[contact_heading]" class="form-control" @if(isset($data['location_map']['contact_heading'])) value="{{$data['location_map']['contact_heading']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Whatsapp Content</label>
                                                <input type="text" name="section[whatsapp_content]" class="form-control" @if(isset($data['location_map']['whatsapp_content'])) value="{{$data['location_map']['whatsapp_content']}}" @endif>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="2">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            FAQ
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-md-6">
                                                <label>Title</label>
                                                <input type="text" name="section[title]" class="form-control" @if(isset($data['faq']['title'])) value="{{$data['faq']['title']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sub Title</label>
                                                <input type="text" name="section[sub_title]" class="form-control" @if(isset($data['faq']['sub_title'])) value="{{$data['faq']['sub_title']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Content</label>
                                                <textarea name="section[content]" class="form-control" rows="3" >@if(isset($data['faq']['content'])) {{$data['faq']['content']}} @endif</textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Link Text</label>
                                                <input type="text" name="section[link_text]" class="form-control" @if(isset($data['faq']['link_text'])) value="{{$data['faq']['link_text']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Link Url</label>
                                                <input type="text" name="section[link_url]" class="form-control" @if(isset($data['faq']['link_url'])) value="{{$data['faq']['link_url']}}" @endif>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="3">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            Support
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-md-12">
                                                <label>Title</label>
                                                <input type="text" name="section[title]" class="form-control" @if(isset($data['support']['title'])) value="{{$data['support']['title']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Content</label>
                                                <textarea name="section[content]" class="form-control" rows="3" >@if(isset($data['support']['content'])) {{$data['support']['content']}} @endif</textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                @php
                                                    $media_id_support_image = isset($data['support']['media_id_support_image'])?(object)($data['support']['media_id_support_image']):null;
                                                @endphp
                                                @include('admin.media.set_file', ['file'=>$media_id_support_image, 'title'=>'Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'section[media_id_support_image]', 'id'=>'media_id_support_image', 'display'=> 'horizontal'])                                             
                                            </div><!--end form-group-->
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="4">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            Items Delivering
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-md-12">
                                                <label>Title</label>
                                                <input type="text" name="section[title]" class="form-control" @if(isset($data['delivery']['title'])) value="{{$data['delivery']['title']}}" @endif>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Content</label>
                                                <textarea name="section[content]" class="form-control" rows="3" >@if(isset($data['delivery']['content'])) {{$data['delivery']['content']}} @endif</textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>List</label>
                                                <select name="section[listing_id_listing]" class="w-100 webadmin-select2-input">
                                                    @foreach($listings as $listing)
                                                        <option value="{{$listing->id}}" @if(isset($data['delivery']['listing_id_listing']) && $data['delivery']['listing_id_listing'] == $listing->id) selected="selected" @endif>{{$listing->listing_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><!--end form-group-->
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="5">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            Testimonials
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-md-12">
                                                <label>Title</label>
                                                <input type="text" name="section[title]" class="form-control" @if(isset($data['testimonials']['title'])) value="{{$data['testimonials']['title']}}" @endif>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-sm btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div> 

                </div><!-- container -->

                @include('admin._partials.footer')
            </div>
            <!-- end page content -->
@endsection
@section('footer')
@parent
@endsection