@extends('afrontend/layout')
@section('page_title','Products | Inbox Infotech Pvt. Ltd.')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")
@section('container')
<style>
body {
  background: #f1f1f1;
}

/* The laptop with borders */
.laptop {
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
  -webkit-transform: scale(.6) translate(-50%); /* Scaled down for a better Try-it experience (change to 1 for full scale) */
  transform: scale(.6) translate(-50%); /* Scaled down for a better Try-it experience (change to 1 for full scale) */
  left: 50%;
  position: absolute;
  width: 1366px;
  height: 800px;
  border-radius: 6px;
  border-style: solid;
  border-color: black;
  border-width: 24px 24px 80px;
  background-color: black;

}

/* The keyboard of the laptop */
.laptop:after {
  content: '';
  display: block;
  position: absolute;
  width: 1600px;
  height: 60px;
  margin: 80px 0 0 -110px;
  background: black;
  border-radius: 6px;
}

/* The top of the keyboard */
.laptop:before {
  content: '';
  display: block;
  position: absolute;
  width: 250px;
  height: 30px;
  bottom: -110px;
  left: 50%;
  -webkit-transform: translate(-50%);
  transform: translate(-50%);
  background: #f1f1f1;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  z-index: 1;
}

/* The screen (or content) of the device */
.laptop .content {
  width: 1366px;
  height: 800px;
  overflow: hidden;
  border: none;
}
</style>

<section>
      <div class="bg-holder overlay" style="background-image:url({{url('assets/img/background-2.jpg')}});background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
          <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Products</h1>
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                <ol class="breadcrumb fs-1 ps-0 fw-bold">
                  <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section>
 <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
	   <section class="bg-100">
        <div class="container">
		<div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3 text-color">Our Products</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="text-center">
            <div class="row">
			@foreach($product as $prod)
              <div class="col-sm-6 col-lg-4">
			  <?php $new = str_replace(' ', '_', $prod->title); ?>
          <a href="{{url('products')}}/{{$prod->slug}}">
                  <div class="card h-100"><img class="card-img-top" src="{{ asset('storage/media/')}}/{{$prod->imaage}}" alt="{{$prod->image_alt}}"  height="200px" width="200px" />
                    <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                      <div class="overflow-hidden">
                        <h5 class="text-color" data-zanim-xs='{"delay":0}'>{{$prod->title}}</h5>
                      </div>
                    </div>
                  </div>
          </a>
              </div>
			  @endforeach
             </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      
	  
	  <section class="bg-primary py-6 text-center text-md-start">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md">
              <h4 class="text-white mb-0">If you have any query related development<br class="d-md-none" /> we are available 24/7</h4>
            </div>
            <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="{{url('/contact-us')}}">Contact Us</a></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center">
        <div class="container">
          <div class="text-center">
            <h3 class="fs-2 fs-md-3">Things You Get</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/sharing.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creative Support</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We transform brands, grow businesses, and tell brand and product stories in a most creative way.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/mail.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creating Experiences</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We cover a large range of creative platforms and digital projects with one purpose: to create experiences.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/target.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We guide you through the pipelines that generate new products with higher potential and lower risk.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/world-globe.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Business Boosting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We provide energy-efficient and environmentally conservative solutions to our clients to boost their business.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/money.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Strategic Approach</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Based on solid strategic framework and real, relevant research, we create prototypes, not presentations.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/data-analytics.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Logistic Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give our clients hard hitting answers and focus hard on best opportunities.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->


</main>

@endsection