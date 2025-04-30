@extends('afrontend/layout')
@section('page_title', 'Home | Inbox Infotech Pvt. Ltd.')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag', "$s1")
@section('seo_description', "$s2")
@section('seo_keyword', "$s3")
@section('seo_canonical', "$s4")


@section('container')
   <style>
    /* .services .zoom-bg {
  background-size: cover;
  transition: background-size 0.5s ease;
}

.services .zoom-bg:hover {
  background-size: 110%;
  
} */
  </style> 
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
    <section class="py-0">
    <div class="swiper theme-slider min-vh-100"
      data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
      <div class="swiper-wrapper">
      @foreach($slider as $list)
      <div class="swiper-slide" data-zanim-timeline="{}">
      <div class="bg-holder" style="background-image:url({{asset('storage/media/banner/' . $list->image)}});"></div>
      <!--/.bg-holder-->
      <div class="container">
      <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
        <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
        <div class="overflow-hidden">
        <p class="text-color fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'
        style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;">
        {{$list->btn_txt}}
        </p>
        </div>
        <div class="overflow-hidden">
        <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>{{$list->btn_link}}
        </p>
        </div>
        <div class="overflow-hidden">
        <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
          href="{{url('/about-us')}}">Read more<span class="fas fa-chevron-right ms-2"></span></a><a
          class="btn btn-warning mt-3" href="{{url('/contact-us')}}">Contact us<span
          class="fas fa-chevron-right ms-2"></span></a></div>
        </div>
        </div>
      </div>
      </div>
      </div>
    @endforeach
      </div>
      <div class="swiper-nav">
      <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
      <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
      </div>
    </div>
    </section>
    <!-----------------------------   client swiper start ---------------------------->
    <section>
    <div class="client">
      <div class="container">
      <div class="swiper myClientSwiper">
        <div class="swiper-wrapper">
        @foreach($clientlogos as $clogolist)
      <div class="swiper-slide">
        {{-- <div style="width: 100%;"> --}}
        <img class="img-fluid" src="{{asset('storage/media/' . $clogolist->image)}}" alt="partnerco"
        data-zanim-xs="{}" />
        {{--
        </div> --}}
      </div>
    @endforeach
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
      </div>
      </div>
    </div>
    </section>

    <!-----------------------------   client swiper start ---------------------------->


    <!-- ============================================-->
    <!-- <section> begin ============================-->

    <section class="text-center">
    <div class="container">
      <div class="" data-aos="fade-up" data-aos-duration="1000">
      <div class="">
        <p style="margin-bottom: 1.333rem;font-size: 1.77689rem;font-weight: 700;color: black;">Welcome to the <br>
        </p>
        <h1 class="text-color" style="margin-bottom: 1.333rem;font-size:3.1573345183rem;font-weight: 700;">Inbox
        Infotech</h1>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
      </div>
      <div class="row text-lg-start">
        <div class="col-lg-6">
        <h3 class="px-lg-4 mt-4 text-black" style="font-weight: 500;line-height:1; ">
          Software Development Company Trusted By 550+ Businesses Globally
        </h3>
        </div>
        <div class="col-lg-6">
        <p class="px-lg-4 mt-4">Get started today to conquer the bigger challenges of your business with our
          development services. Explore Inbox Infotech’s Development services to stay at par with the industry
          giants!</p>
        </div>
      </div>
      </div>
    </div>
   
    </div>
    <!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> services begin ============================-->
    <section class=" services">
    <div class="container">
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="text-color">Our Services</h2>
      <p class="px-lg-4 mt-3">Our service offerings are aligned to the changing world of our customers. Our portfolio
        of services range from designing strategy to delivering impact.</p>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div>
      {{-- @if($serv_data->id % 2 == 0) --}}
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <!-- Left column: nav cards -->
        <div class="col-lg-8 col-12 row nav overflow-x-auto" id="v-pills-tab" role="tablist"
        aria-orientation="vertical">

        @foreach($service_data as $index => $serv_data)
  <div class="col-lg-4 col-md-6 col-sm-12 my-3">
    
    <div style="height: 100%;">
      <button class="nav-link card-button w-100 h-100 px-2 border-0 bg-transparent  {{ $index == 0 ? 'active' : '' }}" 
        id="tab-{{$index}}"
        data-bs-toggle="pill" 
        data-bs-target="#content-{{$index}}" 
        type="button"   
        role="tab" 
        aria-controls="content-{{$index}}">
      <div class="card border zoom-bg {{ $index == 0 ? 'shadow' : '' }}" 
      style="background: linear-gradient(to bottom right, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('storage/media/' . $serv_data->imaage) }}'); background-repeat:no-repeat; background-position:center center ;background-size: cover; height: 200px;">
          <div class="card-body"></div>
          <div class="card-footer">
            <h5 class="card-title">{{$serv_data->title}}</h5>
          </div>
        </div>
      </button>
      </div>
  </div>
@endforeach

        </div>

        <!-- Right column: content display -->
        <div class="col-lg-4 col-12 tab-content" id="v-pills-tabContent">
        @foreach($service_data as $index => $serv_data)
      <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="content-{{$index}}" role="tabpanel"
        aria-labelledby="tab-{{$index}}" tabindex="0">
        <div class="p-3">
        <h4 class="text-color">{{$serv_data->title}}</h4>
        <p>{!! $serv_data->short_desc !!}</p>
         @if($serv_data->slug == 'recruitment staffing')
          <a href="{{url('/services/recruitment_staffing')}}">Learn More <i class="fas fa-arrow-right"></i></a>
        @else
          <a href="{{url('/services')}}/{{$serv_data->slug}}">Learn More <i class="fas fa-arrow-right"></i></a>
        @endif
        </div>
      </div>
    @endforeach
        </div>
      </div>

      {{-- @endif --}}
      </div>

     
    </div>
    <!-- end of .container-->
    </section>
    <!-- <section> services close ============================-->
    <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> take the right step begin ============================-->
        <section>
          <div class="bg-primary p-5" >
          <!--/.bg-holder-->
          <div class="container mx-auto">

          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-3 col-md-6">
              <div class="my-5">
                <h4 class="fs-3 fs-lg-5 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":250}'>250 </h4>
                <h6 class="fs-0 text-white pb-lg-5" data-zanim-xs='{"delay":0.2}'>Experts in Our Team</h6>
              </div>
              <div class="my-5">
                <h4 class="fs-3 fs-lg-5 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":500}'>500 </h4>
                <h6 class="fs-0 text-white " data-zanim-xs='{"delay":0.2}'>Happy Customers Worldwide</h6>
              </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none text-center">
            <img src="{{asset('assets/inbox/Groupteam.png')}}" class="img-fluid">
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="my-5 ">
              <h4 class="fs-3 fs-lg-5 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":10}'>10 </h4>
                    <h6 class="fs-0 text-white pb-lg-5" data-zanim-xs='{"delay":0.2}'>Years of
                      Experience</h6>
              </div>
              <div class="my-5">
              <h4 class="fs-3 fs-lg-5 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":550}'>550 </h4>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Projects Delivered Successfully</h6>
              </div>
            </div>
          </div>
            <!-- <div class="d-flex"><span class="me-3"> <img src="{{asset('assets/img/checkmark.png')}}" alt="checkmark" style="width: 55px"/></span>
              <div class="flex-1">
                <h2 class="text-warning fs-3 fs-lg-4" style="font-size: 3.1573345183rem;letter-spacing: -0.15rem;">Take the right step,<br /><span class="text-white">do the big things.</span></h2> -->
                <div class="row mt-4 pe-lg-10">
                  <!-- <div class="overflow-hidden col-lg-3 border-end text-center col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <p class="fs-3 fs-lg-4 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":250}'>250 </p>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Experts in Our Team</h6>
                  </div>
                  <div class="overflow-hidden col-lg-3 border-end text-center col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <p class="fs-3 fs-lg-4 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":500}'>500 </p>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Happy
                      Customers
                      Worldwide
                      </h6>
                  </div> -->
                  <!-- <div class="w-100 d-flex d-lg-none"></div> -->
                  <!-- <div class="overflow-hidden col-lg-3 border-end text-center col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <p class="fs-3 fs-lg-4 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":10}'>10 </p>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Years of
                      Experience</h6>
                  </div>
                  <div class="overflow-hidden col-lg-3 col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <p class="fs-3 fs-lg-4 mb-0 fw-bold text-white lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":550}'>550 </p>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Projects Delivered
                      Successfully
                      </h6>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          
          <!-- end of .container-->
          </div>
        </section><!-- <section> take the right step close ============================-->
        <!-- ============================================-->
  

    <!-----------------------------------  product section start --------------------------->

    <section class="product">
    <div class="container">
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
      <h5 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Our Industry Led Solutions </h5>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div>
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        @foreach($myproducts as $product)

        <div class="col-lg-3 col-md-6 my-3">
        <?php $new = str_replace(' ', '_', $product->title); ?>
        <a href="{{url('products')}}/{{$product->slug}}" class="text-decoration-none">
          <div class="card shadow" style="width: 100%;">
          <div class="card-header" style="width: 100%;">
            <img src="{{ asset('storage/media/')}}/{{$product->imaage}}"
            style="width: 100%; height: 100%; object-fit: cover;" alt="{{$product->image_alt}}">
          </div>
          <div class="card-body p-3">
            <h5 class="text-color"> {{$product->title}} </h5>
            <!-- <p> Transforming financial services with secure, AI-driven solutions. </p> -->
          </div>
          <div class="card-footer p-3">
            <a href="{{url('products')}}/{{$product->slug}}">Read More  </a>
          </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
    </div>
    </section>

    <!-----------------------------------  product section end --------------------------->



    <!-- ============================================-->
    <!-- <section> Our hiring model  begin ============================-->
    <!-- ============================================-->

    <section class="my-5 hiring-model">
    <div class="container">
      <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
      <h2 class=" fs-md-3 text-color"> Our Hiring Model </h2>
      <p> At Inbox Infotech, we understand the importance of
        collaboration in bringing your projects to life. That's why
        we offer a range of engagement options tailored to your
        needs. Choose from our proven models or propose your
        own—we're here to make your vision a reality, together. </p>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div class="my-5">
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-3  col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div class="" style="width: 30%;">
          <img src="{{asset('assets/img/icons/svg_icons/Build_Your_Team.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> Build Your Team </h5>
          <p class="lh-md">Transform your business ideas into reality with our agile, cross-functional teams—delivering seamless execution and excellence at every step of the journey.</p>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div class="" style="width: 30%;">
          <img src="{{asset('assets/img/icons/svg_icons/Dedicated_Talent.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> Dedicated Talent </h5>
          <p class="lh-md"> Empower your projects with expert, tailored solutions. Our dedicated team ensures your software aligns seamlessly with your vision, goals, and business needs.</p>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div class="" style="width: 30%;">
          <img src="{{asset('assets/img/icons/svg_icons/On_Demand_Talent.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> On-Demand Talent </h5>
          <p class="lh-md"> Explore our On-Demand model—perfect for flexible, hourly expert support. Get the guidance you need, exactly when you need it, short- or long-term.</p>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div class="" style="width: 30%;">
          <img src="{{asset('assets/img/icons/svg_icons/Fixed Cost Projects.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> Fixed Cost Projects</h5>
          <p class="lh-md"> Control your budget with our fixed-cost model—ideal for proofs-of-concept and unique ideas. Enjoy transparent pricing and innovate confidently without financial stress. </p>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>

    <!-- <section> Our hiring model close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> Our Remote team  begin ============================-->
    <!-- ============================================-->

    <section class="my-5">
    <div class="container">
      <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
      <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Hire Your Own Remote
        Team </h6>
      <p> Build a high-performance tech team —
        without the hiring hassle.
      </p>
      <p> We help you build remote teams of top-tier
        professionals in high-demand tech domains. Whether
        you need niche consultants or entire project teams,
        we provide scalable, cost-effective talent solutions
        aligned to your business needs. </p>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div class="my-5">
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/oracle.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Oracle <br> Consultant </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> SAP <br> Consultant </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Hadoop.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Hadoop <br> Consultant </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Salesforce-Developers.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Salesforce <br> Developers </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/ServiceNow_Developers.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> ServiceNow <br> Developers </p>
        </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/AI_ML_Development.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> AI/ML <br> Developers </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Frontend_Development.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Frontend <br> Developers </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Backend_Development.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Backend <br> Developers </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/mobile_app_developer.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> MobileApp <br> Developers </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Database_Administration.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Database Experts </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Datacenter_Solutions.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Datacenter <br> Experts </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Cyber_Security_Services.png')}}" class="img-fluid">
          </div>
          <p class="fw-medium"> Cyber Security <br> Experts </p>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>

    <!-- <section> Our Remote team close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> rquest a callback begin ============================-->
    <section class="bg-primary">
    <div class="container">
      <div class="row align-items-center text-white">
      <div class="col-lg-4">
        <div class="border border-2 border-white p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}"
        data-zanim-trigger="scroll">
        <div class="overflow-hidden">
          <h6 class="text-white" data-zanim-xs='{"delay":0}'
          style="font-size:1.776889rem;letter-spacing: -0.05rem;">Request a call back</h6>
        </div>
        <div class="overflow-hidden">
          <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to one of our
          advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us
          if you would prefer.</p>
        </div>
        </div>
      </div>
      <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
        <h6 class="text-white" style="font-size:1.333rem;letter-spacing: -0.05rem;">I would like to discuss:</h6>
        <form action="{{url('contactus/form/submit')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-6"><input class="form-control" type="text" name="name" placeholder="Your Name"
            aria-label="Your Name" required /></div>
          <div class="col-6"><input class="form-control" type="text" name="email" placeholder="Email Id"
            aria-label="Email Id" required /></div>
          <div class="col-6 mt-4"><input class="form-control" type="text" name="message" placeholder="Subject"
            aria-label="Subject" required /></div>
          <input type="hidden" value="{{$_SERVER['REMOTE_ADDR']}}" name="ip">
          <div class="col-6 mt-4"><button class="btn btn-primary w-100" type="submit">Submit</button></div>
        </div>
        </form>
      </div>
      </div>
    </div><!-- end of .container-->
    </section><!-- <section> rquest a callback close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> Our Tech arsenal  begin ============================-->
    <!-- ============================================-->

    <section class="my-5 tech-arsenal">
    <div class="container">
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
      <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem">Our Tech Arsenal</h6>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>
      <div class="my-5">
      {{-- <div class="row justify-content-between">
        <div class="col-lg-4 my-2"> --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="1000">
          <li class="nav-item" role="presentation">
          <a class="nav-link active" id="backend-tab" data-bs-toggle="tab" data-bs-target="#backend" role="tab"
            aria-controls="backend" aria-selected="false">Backend </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="frontend-tab" data-bs-toggle="tab" data-bs-target="#frontend" role="tab"
            aria-controls="frontend" aria-selected="false">Frontend </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="aiml-tab" data-bs-toggle="tab" data-bs-target="#aiml" role="tab"
            aria-controls="aiml" aria-selected="false"> AI/ML </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="datastore-tab" data-bs-toggle="tab" data-bs-target="#datastore" role="tab"
            aria-controls="datastore" aria-selected="false"> Database </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="server-tab" data-bs-toggle="tab" data-bs-target="#server" role="tab"
            aria-controls="server" aria-selected="true"> Servers </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="devop-tab" data-bs-toggle="tab" data-bs-target="#devop" role="tab"
            aria-controls="devop" aria-selected="false"> DevOps </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="monitoring-tab" data-bs-toggle="tab" data-bs-target="#monitoring" role="tab"
            aria-controls="monitoring" aria-selected="false"> Monitoring </a>
          </li>

          <li class="nav-item" role="presentation">
          <a class="nav-link" id="api-tab" data-bs-toggle="tab" data-bs-target="#api" role="tab"
            aria-controls="api" aria-selected="false">API </a>
          </li>
          <li class="nav-item" role="presentation">
          <a class="nav-link" id="analytics-tab" data-bs-toggle="tab" data-bs-target="#analytics" role="tab"
            aria-controls="analytics" aria-selected="false"> Analytics </a>
          </li>
          
        </ul>
        {{--
        </div> --}}
        {{-- <div class="col-lg-8 my-2"> --}}
        <div class="tab-content my-5" data-aos="fade-up" data-aos-duration="1000">
          <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab"
          tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/net.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> .Net </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/php.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> PHP </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Laravel.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Laravel </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/node.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Node.js</p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/python.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Python </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/java.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Java </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/rubyOnRail.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Ruby On Rails </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/django.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Django </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/express.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Express.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/flask.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Flask </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/springboot.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Spring boot </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/unity3D.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Unity </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/angular.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Angular.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/react.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> React.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/bootstrap.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Bootstrap </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/jqery.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> jQuery </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/vue.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Vue.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/ember.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Ember.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/bbackbone.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Backbone.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/flutter.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Flutter </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/unity3D.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Unity 3D </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/shopify.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Shopify </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/wordpress.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> WordPress </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/magento.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Magento </p>
            </div>
            </div>

          </div>
          </div>
          <div class="tab-pane fade" id="aiml" role="tabpanel" aria-labelledby="aiml-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/GIT-HUB.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Github Copilot </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/TABNINE-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Tabnine </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/CHATGPT.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> ChatGPT </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/tensorflow-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Tansorflow </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/openaicodex.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> OpenAI Codex </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/otter.ai_.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Otter.ai </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/codewhisperer.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> CodeWhisperer</p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/hugging-face.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Hugging Face </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/blackbox ai.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Blackbox AI </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/cursor ai.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Cursor AI </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="datastore" role="tabpanel" aria-labelledby="datastore-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mysql.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> MySQL </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mongodb.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> MongoDB </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/postgresql.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> PostgreySQL </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/snowflake.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Snowflake </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/redshift.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Redshift </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/azure-sql-synapse.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Azure SQL Synapse </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/splunk.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Splunk </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/talend.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Talend </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/fivetran.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Fivetran </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/oracle.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Oracle </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mariaDB.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> MariaDB </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sql_server.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> SQL Server </p>
            </div>
            </div>
          </div>
          </div>

          <div class="tab-pane fade " id="server" role="tabpanel" aria-labelledby="server-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/linux.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Linux </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/ubantoo.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Ubantoo </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/windows.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Windows </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/AWS.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> AWS </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/google-cloud.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Google Cloud </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/azure-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Azure </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/apache-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Apache </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/nginx.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Nginx </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/cloudflare.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Cloudflare </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/fastly.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Fastly </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/digital ocean.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Digital Ocean </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/euris.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Euris </p>
            </div>
            </div>
          </div>
          </div>

          <div class="tab-pane fade" id="devop" role="tabpanel" aria-labelledby="devop-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Kubernetes.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Kubernetes </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/ECS.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> ECS </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/EC2.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> EC2 </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Lambda.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Lambda </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/CloudFormation.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> CloudFormation </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Terraform.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Terraform </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Jenkins.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Jenkins </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Bitbucket.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Bitbucket </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/github.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> GitHub </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Go.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Go </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/SaltStack.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> SaltStack </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Docker.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Docker </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/new-relic.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> New Relic </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/appdynamic-logo-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> AppDynamics </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/dynatrace-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Dynatrace </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/datadog.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Datadog </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="api" role="tabpanel" aria-labelledby="api-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/segement.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Segment </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/google-apigee.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Google Apigee </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mulesoft.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Mulesoft </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/tealium.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Tealium </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/zapier.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Zapier </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sonarqube.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> SonarQube </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/twilio.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Twilio </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sendgrid.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Sendgrid </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/stripe.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Stripe </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/paypal.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Paypal </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/BUSINESS-INTELIGENCE-POWERBI.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Power BI </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sap-business-objects.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> SAP </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/tableau-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Tableau </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/looker-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Looker </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/qlik-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Qlik </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/heap-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Heap </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/google-analytics.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Google Analytics </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/amplitude-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Amplitude </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mixpanel-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Mixpanel </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="tech-logo p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/countly.png')}}" class="img-fluid">
              </div>
              <p class="fw-medium"> Countly </p>
            </div>
            </div>
          </div>
          </div>
        
        </div>
        {{--
        </div> --}}

      </div>
      </div>
    </div><!-- end of .container-->
    </section>

    <!-- <section> Our Tech arsenal close ============================-->
    <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> Industries  begin ============================-->
    <!-- ============================================-->
    <section class="industry-rec my-5">
    <div class="container">
      <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
      <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Industries Recognition </h6>

      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div class="my-5">
      <div class="swiper myIndRecSwiper p-5">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div style="width: 90%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/good-firms.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <div style="width: 75%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/itreate.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <div style="width: 90%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/clutch-software.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <div style=" width: 90%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/btech_behemonth.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <divb style="width: 90%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/crm_consulting.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </divb>
        </div>
        <div class="swiper-slide">
          <divb style="width: 80%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/oracle_excellence.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </divb>
        </div>
        <div class="swiper-slide">
          <div style="width: 80%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/sap.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <div style="width: 68%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/software_developer.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <div style="width: 90%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/top-software-development.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="swiper-slide">
          <div style="width: 80%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/appfutura.png')}}"
            style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
        {{-- <div class="swiper-pagination"></div> --}}
      </div>
      </div>
    </div>

    </section>

    <!-- <section> Industries  close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-primary py-6 text-center text-md-start">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-md">
        <h6 class="text-white mb-0" style="letter-spacing: -0.05rem;font-size: 1.77689rem;">If you have any query
        related development<br class="d-md-none" /> we are available 24/7</h6>
      </div>
      <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill"
        href="{{url('/contact-us')}}">Contact Us</a></div>
      </div>
    </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> testimonial begin ============================-->
    <section style="padding-top:40px;padding-bottom: 10px;">
    <div class="container">
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
      <p>WHAT CLIENT SAYS ABOUT US</p>
      <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem">Our Testimonials</h6>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>
    </div><!-- end of .container-->
    </section><!-- <section> close ============================-->

    <section class="testimonial">
      <div class="container">
        <div class="swiper testimonial-swiper">
          <div class="swiper-wrapper">
            @foreach($testimonials as $testimonialslist)
              <div class="swiper-slide d-flex" style="height: auto">
                <div class="card shadow p-3 d-flex flex-column w-100" style="height: 100%">
                  <div class="row align-items-center mb-3">
                    <div class="col-3">
                      <img class="rounded-3 mx-auto img-fluid" src="{{asset('storage/media/' . $testimonialslist->photo)}}" alt="Member" />
                    </div>
                    <div class="col-9">
                      <h6 class="fs-0 mb-1 mt-4 text-color">{{$testimonialslist->name}}</h6>
                      <p class="mb-0 text-500">{{$testimonialslist->title}}</p>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <p class="lead">{!! $testimonialslist->details !!}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="swiper-nav">
            <div class="swiper-pagination"></div>
          </div>
        </div>
        
      </div><!-- end of .container-->
    </section><!-- <section> testimonial close ============================-->

    <!-- ============================================-->

  </main><!-- ===============================================-->

  <script>
  document.addEventListener('DOMContentLoaded', function () {
  const tabButtons = document.querySelectorAll('.card-button');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      // Remove 'active' class from all buttons
      tabButtons.forEach(b => b.classList.remove('active'));

      // Add 'active' class to the clicked button
      this.classList.add('active');

      // Show related tab using Bootstrap
      const targetId = this.getAttribute('data-bs-target');
      const tab = new bootstrap.Tab(document.querySelector(targetId));
      tab.show();
    });
  });
});
   
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


@endsection
