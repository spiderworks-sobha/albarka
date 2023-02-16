<x-app-layout>
<x-slot name="metadata">
</x-slot>
<x-slot name="header">

</x-slot>

<section id="altair-404-section">
    <div class="container max-width-container">
        <div class="row dir-clm align-items-center justiffy-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="not-page-content-block">
                    <img src="{{asset('html/img/404-img.png')}}">
                    <h1>Page not found</h1>
                    <p>The page you are looking for does not exist anymore. Please go report or go back.</p>
                    <div class="not-page-content-btn">
                        <a href="{{url('/')}}">
                            <button class="btn rounded-pill pxp-section-cta">Back To Home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<x-slot name="footer">
</x-slot>

</x-app-layout>
