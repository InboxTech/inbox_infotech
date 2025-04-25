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
  {{-- <style>
    body {
    font-size: 17px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 450;
    color: black;
    }
  </style> --}}
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
      <div class="" data-aos="fade-up" data-aos-duration="3000">
      <div class="">
        <p style="margin-bottom: 1.333rem;font-size: 1.77689rem;font-weight: 700;color: black;">Welcome to the <br>
        </p>
        <h1 class="text-color" style="margin-bottom: 1.333rem;font-size:3.1573345183rem;font-weight: 700;">Inbox
        Infotech</h1>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
      </div>
      <div class="row text-lg-start">
        <div class="col-lg-6">
        <p class="px-lg-4 mt-4" style="font-weight: 600;font-size: 1.77689rem;line-height:1; ">
          Software Development Company Trusted By 550+ Businesses Globally
        </p>
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
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="3000">
      <h2 class="text-color">Our Services</h2>
      <p class="px-lg-4 mt-3">Our service offerings are aligned to the changing world of our customers. Our portfolio
        of services range from designing strategy to delivering impact.</p>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div>
      {{-- @if($serv_data->id % 2 == 0) --}}
      <div class="row" data-aos="fade-up" data-aos-duration="3000">
        <!-- Left column: nav cards -->
        <div class="col-lg-8 col-12 row nav overflow-x-auto" id="v-pills-tab" role="tablist"
        aria-orientation="vertical">

        @foreach($service_data as $index => $serv_data)
      <div class="col-lg-4 col-12  my-3">
        <button class="nav-link card-button w-100 p-0 border-0 bg-transparent" id="tab-{{$index}}"
        data-bs-toggle="pill" data-bs-target="#content-{{$index}}" type="button" role="tab"
        aria-controls="content-{{$index}}" {{-- aria-selected="{{ $index == 0 ? 'true' : 'false' }}" --}}>

        <div style="height: 100%; color: white;">
        <div class="card border"
        style="background: linear-gradient(to bottom right, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('storage/media/' . $serv_data->imaage) }}'); background-repeat:no-repeat; background-size: cover; background-position: center; height:16rem;">
        <div class="card-body">
        </div>
        <div class="card-footer">
          <h5 class="card-title text-white">{{$serv_data->title}}</h5>
          
        </div>
        </div>
        </div>
        </button>
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
        <a href="{{url('/services')}}/{{$serv_data->slug}}">Learn More <i
        class="fas fa-arrow-right"></i></a>
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
          <div class="bg-holder overlay overlay-elixir" style="background-image:url('{{ asset('assets/img/background-15.jpg') }}');"></div>
          <!--/.bg-holder-->
          <div class="container">
            <div class="d-flex"><span class="me-3"> <img src="{{asset('assets/img/checkmark.png')}}" alt="checkmark" style="width: 55px"/></span>
              <div class="flex-1">
                <h2 class="text-warning fs-3 fs-lg-4" style="font-size: 3.1573345183rem;letter-spacing: -0.15rem;">Take the right step,<br /><span class="text-white">do the big things.</span></h2>
                <div class="row mt-4 pe-lg-10">
                  <div class="overflow-hidden col-lg-3 col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":250}'>250 <span class="plus"> +</span></div>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Experts in Our Team</h6>
                  </div>
                  <div class="overflow-hidden col-lg-3 col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":500}'>500 <span class="plus"> +</span></div>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Happy
                      Customers
                      Worldwide
                      </h6>
                  </div>
                  <div class="w-100 d-flex d-lg-none"></div>
                  <div class="overflow-hidden col-lg-3 col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":10}'>10 <span class="plus"> +</span></div>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Years of
                      Experience</h6>
                  </div>
                  <div class="overflow-hidden col-lg-3 col-md-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs countup-plus" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":550}'>550 +</div>
                    <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Projects Delivered
                      Successfully
                      </h6>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> take the right step close ============================-->
        <!-- ============================================-->
  

    <!-----------------------------------  product section start --------------------------->

    <section class="product">
    <div class="container">
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="3000">
      <h5 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Our Industry Led Solutions </h5>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>

      <div>
      <div class="row" data-aos="fade-up" data-aos-duration="3000">
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

    <section class="my-5">
    <div class="container">
      <div class="text-center" data-aos="fade-up" data-aos-duration="3000">
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
      <div class="row" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 3% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/Build_Your_Team.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> Build Your Team </h5>
          <p class="lh-md"> Experience the power of our cross-functional
            teams in transforming your business ideas
            into reality. With our agile approach, we deliver
            excellence at every step, ensuring your vision
            comes to life seamlessly. </p>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 3% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/Dedicated_Talent.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> Dedicated Talent </h5>
          <p class="lh-md"> Empower your projects with our exclusive
            expertise, precisely tailored to your needs.
            Take charge of your software solutions,
            guided by our dedicated team to ensure they
            align seamlessly with your vision & objectives.</p>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 3% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/On_Demand_Talent.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> On-Demand Talent </h5>
          <p class="lh-md"> Discover our On-Demand engagement model,
            ideal for companies seeking expert assistance
            on an hourly basis. Whether it's short-term
            support or ongoing guidance, our flexible
            approach ensures you have access to the
            expertise you need, precisely when you need it. </p>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 3% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/Fixed Cost Projects.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
          <h5 class="text-color"> Fixed Cost Projects</h5>
          <p class="lh-md"> Take full control of your budget with our fixed
            cost model, designed to support the
            development of proofs-of-concept & the
            execution of your unique ideas. With
            transparent project costs unleash your innovation
            without financial worries. </p>
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
      <div class="text-center" data-aos="fade-up" data-aos-duration="3000">
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
      <div class="row" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/oracle.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Oracle <br> Consultant </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> SAP <br> Consultant </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Hadoop.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Hadoop <br> Consultant </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Salesforce-Developers.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Salesforce <br> Developer </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/ServiceNow-Developers.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> ServiceNow <br> Developer </p>
        </div>
        </div>

        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/AI_ML_Development.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> AI/ML <br> Developer </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Frontend_Development.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Frontend <br> Developer </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Backend_Development.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Backend <br> Developer </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/mobile_app_developer.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> MobileApp <br> Developer </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Database_Administration.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Database Administrator </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Datacenter_Solutions.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Datacenter <br> Solutions </p>
        </div>
        </div>
        <div class="col-lg-2 my-3">
        <div class="card shadow text-center" style="height: 100%;">
          <div style="width: 50%;margin: 0 auto;">
          <img src="{{asset('assets/inbox/Cyber_Security_Services.png')}}" class="img-fluid">
          </div>
          <p class="fw-bold"> Cyber Security <br> Exports </p>
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
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="3000">
      <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem">Our Tech Arsenal</h6>
      <hr class="short"
        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
        data-zanim-trigger="scroll" />
      </div>
      <div class="my-5">
      {{-- <div class="row justify-content-between">
        <div class="col-lg-4 my-2"> --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="3000">
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
        <div class="tab-content my-5" data-aos="fade-up" data-aos-duration="3000">
          <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab"
          tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/net.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> .Net </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/php.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> PHP </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Laravel.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Laravel </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/node.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Node.js</p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/python.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Python </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/java.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Java </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/rubyOnRail.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Ruby On Rails </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/django.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Django </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/express.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Express.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/flask.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Flask </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/springboot.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Spring boot </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/unity3D.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Unity </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/angular.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Angular.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/react.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> React.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/bootstrap.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Bootstrap </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/jqery.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> jQuery </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/vue.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Vue.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/ember.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Ember.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/bbackbone.js.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Backbone.js </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/flutter.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Flutter </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/unity3D.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Unity 3D </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/shopify.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Shopify </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/wordpress.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> WordPress </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/magento.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Magento </p>
            </div>
            </div>

          </div>
          </div>
          <div class="tab-pane fade" id="aiml" role="tabpanel" aria-labelledby="aiml-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/GIT-HUB.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Github Copilot </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/TABNINE-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Tabnine </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/CHATGPT.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> ChatGPT </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/tensorflow-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Tansorflow </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/openaicodex.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> OpenAI Codex </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/otter.ai_.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Otter.ai </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/codewhisperer.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> CodeWhisperer</p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/hugging-face.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Hugging Face </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/blackbox ai.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Blackbox AI </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/cursor ai.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Cursor AI </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="datastore" role="tabpanel" aria-labelledby="datastore-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mysql.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> MySQL </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mongodb.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> MongoDB </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/postgresql.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> PostgreySQL </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/snowflake.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Snowflake </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/redshift.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Redshift </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/azure-sql-synapse.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Azure SQL Synapse </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/splunk.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Splunk </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/talend.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Talend </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/fivetran.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Fivetran </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/oracle.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Oracle </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mariaDB.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> MariaDB </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sql_server.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> SQL Server </p>
            </div>
            </div>
          </div>
          </div>

          <div class="tab-pane fade " id="server" role="tabpanel" aria-labelledby="server-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/linux.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Linux </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/ubantoo.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Ubantoo </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/windows.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Windows </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/AWS.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> AWS </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/google-cloud.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Google Cloud </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/azure-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Azure </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/apache-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Apache </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/nginx.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Nginx </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/cloudflare.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Cloudflare </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/fastly.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Fastly </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/digital ocean.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Digital Ocean </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/euris.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Euris </p>
            </div>
            </div>
          </div>
          </div>

          <div class="tab-pane fade" id="devop" role="tabpanel" aria-labelledby="devop-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Kubernetes.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Kubernetes </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/ECS.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> ECS </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/EC2.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> EC2 </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Lambda.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Lambda </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/CloudFormation.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> CloudFormation </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Terraform.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Terraform </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Jenkins.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Jenkins </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Bitbucket.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Bitbucket </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/github.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> GitHub </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Go.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Go </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/SaltStack.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> SaltStack </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/Docker.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Docker </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/new-relic.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> New Relic </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/appdynamic-logo-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> AppDynamics </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/dynatrace-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Dynatrace </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/datadog.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Datadog </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="api" role="tabpanel" aria-labelledby="api-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/segement.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Segment </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/google-apigee.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Google Apigee </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mulesoft.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Mulesoft </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/tealium.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Tealium </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/zapier.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Zapier </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sonarqube.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> SonarQube </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/twilio.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Twilio </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sendgrid.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Sendgrid </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/stripe.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Stripe </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/paypal.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Paypal </p>
            </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab" tabindex="0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/BUSINESS-INTELIGENCE-POWERBI.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Power BI </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/sap-business-objects.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> SAP </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/tableau-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Tableau </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/looker-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Looker </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/qlik-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Qlik </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/heap-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Heap </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/google-analytics.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Google Analytics </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/amplitude-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Amplitude </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/mixpanel-1.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Mixpanel </p>
            </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 my-2">
            <div class="card shadow p-2 text-center" style="height: 100%;">
              <div style="width: 40%;margin: 3% auto;">
              <img src="{{asset('assets/inbox/countly.png')}}" class="img-fluid">
              </div>
              <p class="fw-bold"> Countly </p>
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
      <div class="text-center" data-aos="fade-up" data-aos-duration="3000">
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
    <!-- <section> begin ============================-->
    <section style="padding-top:40px;padding-bottom: 10px;">
    <div class="container">
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="3000">
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
                    <div class="col-lg-3">
                      <img class="rounded-3 mx-auto img-fluid" src="{{asset('storage/media/' . $testimonialslist->photo)}}" alt="Member" />
                    </div>
                    <div class="col-lg-9">
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
    </section><!-- <section> close ============================-->

    <!-- ============================================-->

  </main><!-- ===============================================-->

  <script>
    document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.card-button');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', function () {
      // Remove 'active' class from all tab buttons
      tabButtons.forEach(b => b.classList.remove('active'));

      // Add 'active' to the clicked button
      this.classList.add('active');

      // Use Bootstrap's Tab API to show tab
      const targetId = this.getAttribute('data-bs-target');
      const tab = new bootstrap.Tab(document.querySelector(targetId));
      tab.show();
      });
    });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


@endsection
