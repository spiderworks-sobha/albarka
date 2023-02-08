@if ($location->children()->count() > 0 )
       
    @foreach($location->children as $service)
    	<option value="{{$location->id}}" @if($location->id == $selected) selected="selected" @endif>
    		@for($i=0; $i<$depth; $i++)
	    		&nbsp;-
	    	@endfor
    		&nbsp;{{$location->name}}
    	</option>
        @include('admin._partials.location', ['location'=>$location, 'depth'=>++$depth, 'selected'=>$selected])
    @endforeach

@endif