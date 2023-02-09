<div id="form-vertical" class="form-horizontal form-wizard-wrapper">                                        
                                                        <h3>Top Section</h3>
                                                        <fieldset>                                                                                         
                                                            <div class="form-group col-md-12">
                                                                <label>Heading</label>
                                                                <input type="text" name="content[title_1]" class="form-control" @if($obj->content && isset($obj->content['title_1'])) value="{{$obj->content['title_1']}}" @endif >
                                                            </div>
                                                            <div class="form-group ">
                                                                @php
                                                                    $media_id_1 = ($obj->content && isset($obj->content['media_id_1']))?$obj->content['media_id_1']:null;
                                                                @endphp
                                                                @include('admin.media.set_file', ['file'=>$media_id_1, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_1]', 'id'=>'content_image_1', 'display'=> 'horizontal'])                                             
                                                            </div><!--end form-group-->                                                                                
                                                        </fieldset><!--end fieldset-->

                                                        <h3>Middle Section</h3>
                                                        <fieldset>                                                                                         
                                                            <div class="form-group col-md-12">
                                                                <label>Heading</label>
                                                                <input type="text" name="content[title_2]" class="form-control" @if($obj->content && isset($obj->content['title_2'])) value="{{$obj->content['title_2']}}" @endif >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>List</label>
                                                                <select name="content[listing_id_listing]" style="width:100% !important;" class="w-100 webadmin-select2-input" data-select2-url="{{route('admin.select2.listing')}}">
                                                                    @if($obj->content && isset($obj->content['listing_id_listing']))
                                                                        <option value="{{$obj->content['listing_id_listing']->id}}" selected="selected">{{$obj->content['listing_id_listing']->listing_name}}</option>
                                                                    @endif
                                                                </select>
                                                            </div><!--end form-group-->                                                                            
                                                        </fieldset><!--end fieldset-->

                                                        <h3>Footer Section</h3>
                                                        <fieldset>                                                                                         
                                                            <div class="form-group col-md-12">
                                                                <label>Heading</label>
                                                                <input type="text" name="content[title_3]" class="form-control" @if($obj->content && isset($obj->content['title_3'])) value="{{$obj->content['title_3']}}" @endif >
                                                            </div>
                                                            <div class="form-group ">
                                                                @php
                                                                    $media_id_3 = ($obj->content && isset($obj->content['media_id_3']))?$obj->content['media_id_3']:null;
                                                                @endphp
                                                                @include('admin.media.set_file', ['file'=>$media_id_3, 'title'=>'Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_3]', 'id'=>'content_image_3', 'display'=> 'horizontal'])                                             
                                                            </div><!--end form-group-->                                                                                
                                                        </fieldset><!--end fieldset--> 
                                                                                     
                                                    </div><!--end form-->