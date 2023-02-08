<div id="form-vertical" class="form-horizontal form-wizard-wrapper">                                        
                                                        <h3>Banner Section</h3>
                                                        <fieldset>                                                                                         
                                                            <div class="form-group col-md-12">
                                                                <label>Title</label>
                                                                <input type="text" name="content[title_1]" class="form-control" @if($obj->content && isset($obj->content['title_1'])) value="{{$obj->content['title_1']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Content</label>
                                                                <textarea name="content[description_1]" class="form-control editor">@if($obj->content && isset($obj->content['description_1'])) {{$obj->content['description_1']}} @endif</textarea>
                                                            </div>
                                                            <div class="form-group ">
                                                                @php
                                                                    $media_id_1 = ($obj->content && isset($obj->content['media_id_1']))?$obj->content['media_id_1']:null;
                                                                @endphp
                                                                @include('admin.media.set_file', ['file'=>$media_id_1, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_1]', 'id'=>'content_image_1', 'display'=> 'horizontal'])                                             
                                                            </div><!--end form-group-->                                                                                
                                                        </fieldset><!--end fieldset--> 

                                                        <h3>Locations</h3>
                                                        <fieldset>
                                                            <div class="form-group col-md-12">
                                                                <label>Title</label>
                                                                <input type="text" name="content[title_2]" class="form-control" @if($obj->content && isset($obj->content['title_2'])) value="{{$obj->content['title_2']}}" @endif  >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Locations</label>
                                                                <br/>
                                                                <a href="{{route('admin.locations.index')}}" class="btn btn-success btn-sm" target="_blank">Add / Edit Locations</a>
                                                            </div>
                                                        </fieldset><!--end fieldset--> 
                                                        <h3>Contact Us</h3>
                                                        <fieldset>                                                                                         
                                                            <div class="form-group col-md-12">
                                                                <label>Title</label>
                                                                <input type="text" name="content[title_4]" class="form-control" @if($obj->content && isset($obj->content['title_4'])) value="{{$obj->content['title_4']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Sub title</label>
                                                                <input type="text" name="content[sub_title_4]" class="form-control" @if($obj->content && isset($obj->content['sub_title_4'])) value="{{$obj->content['sub_title_4']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Form Heading</label>
                                                                <input type="text" name="content[form_heading_4]" class="form-control" @if($obj->content && isset($obj->content['form_heading_4'])) value="{{$obj->content['form_heading_4']}}" @endif >
                                                            </div>
                                                            <div class="form-group ">
                                                                @php
                                                                    $media_id_4 = ($obj->content && isset($obj->content['media_id_4']))?$obj->content['media_id_4']:null;
                                                                @endphp
                                                                @include('admin.media.set_file', ['file'=>$media_id_4, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_4]', 'id'=>'content_image_4', 'display'=> 'horizontal'])                                             
                                                            </div><!--end form-group-->                                                                                
                                                        </fieldset><!--end fieldset-->
                                                        <h3>Blogs</h3>
                                                        <fieldset>                                                                                         
                                                            <div class="form-group col-md-12">
                                                                <label>Title</label>
                                                                <input type="text" name="content[title_5]" class="form-control" @if($obj->content && isset($obj->content['title_5'])) value="{{$obj->content['title_5']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Sub title</label>
                                                                <input type="text" name="content[sub_title_5]" class="form-control" @if($obj->content && isset($obj->content['sub_title_5'])) value="{{$obj->content['sub_title_5']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Content</label>
                                                                <textarea name="content[description_5]" class="form-control">@if($obj->content && isset($obj->content['description_5'])) {{$obj->content['description_5']}} @endif</textarea>
                                                            </div>                                                                            
                                                        </fieldset><!--end fieldset--> 
                                                        <h3>Delivery Steps</h3>
                                                        <fieldset>
                                                            <div class="form-group col-md-12">
                                                                <label>Title</label>
                                                                <input type="text" name="content[title_3]" class="form-control" @if($obj->content && isset($obj->content['title_3'])) value="{{$obj->content['title_3']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Content</label>
                                                                <textarea name="content[description_3]" class="form-control">@if($obj->content && isset($obj->content['description_3'])) {{$obj->content['description_3']}} @endif</textarea>
                                                            </div>
                                                            <div id="InputFrmSteps" class="form-horizontal form-wizard-wrapper">
                                                                <h3>Step 1</h3>
                                                                <fieldset>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Title</label>
                                                                        <input type="text" name="content[title_3_1]" class="form-control" @if($obj->content && isset($obj->content['title_3_1'])) value="{{$obj->content['title_3_1']}}" @endif  >
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Content</label>
                                                                        <textarea name="content[description_3_1]" class="form-control">@if($obj->content && isset($obj->content['description_3_1'])) {{$obj->content['description_3_1']}} @endif</textarea>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        @php
                                                                            $media_id_3_1 = ($obj->content && isset($obj->content['media_id_3_1']))?$obj->content['media_id_3_1']:null;
                                                                        @endphp
                                                                        @include('admin.media.set_file', ['file'=>$media_id_3_1, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_3_1]', 'id'=>'content_image_3_1', 'display'=> 'horizontal'])                                             
                                                                    </div><!--end form-group-->    
                                                                </fieldset><!--end fieldset--> 
                                                                <h3>Step 2</h3>
                                                                <fieldset>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Title</label>
                                                                        <input type="text" name="content[title_3_2]" class="form-control" @if($obj->content && isset($obj->content['title_3_2'])) value="{{$obj->content['title_3_2']}}" @endif  >
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Content</label>
                                                                        <textarea name="content[description_3_2]" class="form-control">@if($obj->content && isset($obj->content['description_3_2'])) {{$obj->content['description_3_2']}} @endif</textarea>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        @php
                                                                            $media_id_3_2 = ($obj->content && isset($obj->content['media_id_3_2']))?$obj->content['media_id_3_2']:null;
                                                                        @endphp
                                                                        @include('admin.media.set_file', ['file'=>$media_id_3_2, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_3_2]', 'id'=>'content_image_3_2', 'display'=> 'horizontal'])                                             
                                                                    </div><!--end form-group-->    
                                                                </fieldset><!--end fieldset--> 
                                                                <h3>Step 3</h3>
                                                                <fieldset>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Title</label>
                                                                        <input type="text" name="content[title_3_3]" class="form-control" @if($obj->content && isset($obj->content['title_3_3'])) value="{{$obj->content['title_3_3']}}" @endif  >
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Content</label>
                                                                        <textarea name="content[description_3_3]" class="form-control">@if($obj->content && isset($obj->content['description_3_3'])) {{$obj->content['description_3_3']}} @endif</textarea>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        @php
                                                                            $media_id_3_3 = ($obj->content && isset($obj->content['media_id_3_3']))?$obj->content['media_id_3_3']:null;
                                                                        @endphp
                                                                        @include('admin.media.set_file', ['file'=>$media_id_3_3, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_3_3]', 'id'=>'content_image_3_3', 'display'=> 'horizontal'])                                             
                                                                    </div><!--end form-group-->    
                                                                </fieldset><!--end fieldset-->  
                                                                <h3>Step 4</h3>
                                                                <fieldset>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Title</label>
                                                                        <input type="text" name="content[title_3_4]" class="form-control" @if($obj->content && isset($obj->content['title_3_4'])) value="{{$obj->content['title_3_4']}}" @endif  >
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label>Content</label>
                                                                        <textarea name="content[description_3_4]" class="form-control">@if($obj->content && isset($obj->content['description_3_4'])) {{$obj->content['description_3_4']}} @endif</textarea>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        @php
                                                                            $media_id_3_4 = ($obj->content && isset($obj->content['media_id_3_4']))?$obj->content['media_id_3_4']:null;
                                                                        @endphp
                                                                        @include('admin.media.set_file', ['file'=>$media_id_3_4, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_3_4]', 'id'=>'content_image_3_4', 'display'=> 'horizontal'])                                             
                                                                    </div><!--end form-group-->    
                                                                </fieldset><!--end fieldset--> 
                                                            </div>
                                                        </fieldset><!--end fieldset-->
                                                                                     
                                                    </div><!--end form-->