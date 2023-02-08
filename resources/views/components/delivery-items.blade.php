<section id="location-list-section">
	<div class="container container-width">
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="location-list-section-content-block">
                    <div class="location-list-section-title-block">
                        <div class="row justify-content-between">
                            <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                <div class="location-list-section-title-block-title">
                                    <h2>{{$delivery_item_content->title}}</h2>
                                </div>
                            </div>
    
                            <div class="col-xl-4 col-lg-4 col-md-5 col-12">
                                <div class="location-list-section-title-block-content">
                                    <p>{{$delivery_item_content->content}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($delivery_item_content->listing_id_listing && count($delivery_item_content->listing_id_listing->list))
                    <div class="location-list-section-block">
                        <div class="row">
                            @foreach($delivery_item_content->listing_id_listing->list as $list)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="location-list-section-block-item">
                                    <div class="location-list-section-block-item-icon">
                                        <x-image :image="$list->media" />
                                    </div>
                                    <h4>{{$list->title}}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>