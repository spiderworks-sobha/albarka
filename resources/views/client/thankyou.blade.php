<x-app-layout>
<x-slot name="metadata">
</x-slot>
<x-slot name="header">

</x-slot>

<section id="altair-404-section">
    <div class="container max-width-container">
    <div class="row dir-clm align-items-center justify-content-between">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="thankyou-page-content-block">
    <h1>Thanks for connecting with us.</h1>
    <p>Your request has been submitted. We would revert at the earliest. </p>
    <div class="thankyou-btn-group">
        <div class="not-page-content-btn-">
            <a href="{{url('/')}}">
                <button class="btn rounded-pill pxp-section-cta">Back To Home</button>
            </a>
        </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-7 col-7">
    <div class="thankyou-page-content-img">
    <img class="img-responsive" src="{{asset('html/img/thankyou-img-01.png')}}" alt="Thank You Image">
    </div>
    </div>
    </div>
    </div>
</section>



<x-slot name="footer">
</x-slot>

</x-app-layout>
