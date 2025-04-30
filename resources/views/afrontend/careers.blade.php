@extends('afrontend/layout')
@section('page_title','Career Opportunities at Inbox Infotech Pvt Ltd')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")
@section('container')
  <section>
    <div class="bg-holder overlay" style="background-image:url({{url('/assets/img/background-2.jpg')}});background-position:center bottom;"></div>
    <!--/.bg-holder-->
    <div class="container">
      <div class="row pt-6" data-inertia='{"weight":1.5}'>
        <div class="col-md-8 text-color" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="overflow-hidden">
            <h1 class="text-color fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Careers</h1>
            <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
              <ol class="breadcrumb fs-1 ps-0 fw-bold">
                <li class="breadcrumb-item"><a class="text-color" href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item text-color active" aria-current="page">Careers</li>
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
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="text-center">
      <div class="container">
        <div class="text-center">
          <h3 class="fs-2 fs-md-3">Why Inbox Infotech</h3>
          <h5>We would like to make Inbox Infotech a place where employees with an entrepreneurial spirit can grow stronger as a team.</h5>
          <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="px-3 py-4 px-lg-4">
              <div class="overflow-hidden"><img src="{{asset('assets/img/icons/sharing.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
              <div class="overflow-hidden">
                <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Free Working Environment</h5>
              </div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="px-3 py-4 px-lg-4">
              <div class="overflow-hidden"><img src="{{asset('assets/img/icons/mail.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
              <div class="overflow-hidden">
                <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Team work with Accountability</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="px-3 py-4 px-lg-4">
              <div class="overflow-hidden"><img src="{{asset('assets/img/icons/target.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
              <div class="overflow-hidden">
                <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Respect for Calibre across Levels</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="px-3 py-4 px-lg-4">
              <div class="overflow-hidden"><img src="{{asset('assets/img/icons/data-analytics.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
              <div class="overflow-hidden">
                <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Impressive Growth Plan</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="px-3 py-4 px-lg-4">
              <div class="overflow-hidden"><img src="{{asset('assets/img/icons/world-globe.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
              <div class="overflow-hidden">
                <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Entrepreneurial Mindset</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="px-3 py-4 px-lg-4">
              <div class="overflow-hidden"><img src="{{asset('assets/img/icons/money.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
              <div class="overflow-hidden">
                <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Good Hike</h5>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section> --}}
    <!-- <section> close ============================-->
    <!-- ============================================-->
		<section class="">
      <h2 class="text-color fs-2 fs-md-3 my-5 text-center">Current Openings</h2>
      <div class="container">
        <div class="row g-4">
          @foreach($careers as $data)
          <?php $new = str_replace([' ', '/'], '_', $data->position);?>
          
            <div class="col-md-6 col-lg-4">
              <div class="card shadow" style="height: 100%">
                {{-- <img class="card-img-top" src="{{ asset('storage/media/')}}/{{$data->image}}" alt="Inbox Infotech" /> --}}
                <div class="card-body pb-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 class="text-color mb-4" data-zanim-xs='{"delay":0}'>{{$data->position}}</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-" data-zanim-xs='{"delay":0.2}'>{{$data->skill}}</p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-2" data-zanim-xs='{"delay":0.2}'> Last Date to Apply : {{$data->endmdate}}</p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-2" data-zanim-xs='{"delay":0.2}'> Experience : {{$data->experience}}</p>
                </div>
                </div>
                <div class="overflow-hidden card-footer pt-2" style="padding: 1.8rem ">
                  <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'>
                    <a class="d-flex align-items-center" href="{{url('careers')}}/{{$new}}/{{$data->id}}">Apply Now
                          <div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                              <span class="d-inline-block fw-medium">&xrarr;</span>
                          </div>
                      </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection