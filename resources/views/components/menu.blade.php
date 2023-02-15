@if($menu_name == 'Main Menu')
    <x-nav-link :items="$main_menu_items" />
@elseif($menu_name == 'Footer Menu')
<div class="footer-link-block">
					<div class="row nav-folderized">
                        @foreach($footer_menu_items as $item)
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ftr__list nav">
							<div class="footer-link-item-block">
								<h3>{{$item->title}}</h3>
                                @if($item->children && count($item->children)>0)
								<ul>
                                    @foreach($item->children as $child)
									    <li><a href="{{$child->slug}}" @if($item->target_blank == 1) target="_blank" @endif>{{$child->title}}</a></li>
                                    @endforeach
								</ul>
                                @endif
							</div>
						</div>
                        @endforeach
					</div>
				</div>
@elseif($menu_name == 'Bottom Menu')
    <ul>
    @foreach($bottom_menu_items as $item)
        <li><a href="{{url('/'.$item->code)}}" @if($item->target_blank == 1) target="_blank" @endif>{{$item->title}}</a></li>
    @endforeach
    </ul>
@endif