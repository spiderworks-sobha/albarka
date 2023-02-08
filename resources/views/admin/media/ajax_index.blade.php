@foreach($files as $file)
	@include('admin.media.item', ['file'=>$file])
@endforeach
<div class="col-md-12 media-nav text-right">
	<input type="hidden" id="currentPage" value="{{$page}}">
	{{ $files->appends(['req' => $req])->links('vendor.pagination.bootstrap-4') }}
</div>