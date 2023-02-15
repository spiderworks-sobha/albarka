@props(['items'])

@foreach($items as $item)
    <li @if(isset($item->children) && count($item->children)>0) class="dropdown" @else class="nav-item" @endif>
        <a  @if(isset($item->children) && count($item->children)>0) href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" @else class="nav-link" @if($item->slug == url()->current()) aria-current="page" @endif  @if($item->target_blank == 1) target="_blank" @endif href="{{$item->slug}}" @endif>{{$item->title}}
        @if(isset($item->children) && count($item->children)>0)
            <span class="caret"></span>
        @endif

        </a>
        @if(isset($item->children) && count($item->children)>0)
      
                 <ul class="dropdown-menu" role="menu">
                    @foreach($item->children as $child)
                        <li><a href="{{$child->slug}}"  @if($child->target_blank == 1) target="_blank" @endif>{{$child->title}}</a></li>
                     @endforeach
                 </ul>
   
        @endif

    </li>
  
@endforeach