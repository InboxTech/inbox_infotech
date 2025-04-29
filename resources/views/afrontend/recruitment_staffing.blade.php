@extends('afrontend/layout')
@section('page_title', 'Recruitment & Staffing')
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
    body {
    font-size: 17px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 450;
    }

    .checkmark {
    color: #2A3855;
    }

    .category {
    font-weight: bold;
    margin-top: 1rem;
    }

    .feature-name {
    padding-left: 1rem;
    }
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
      <div class="swiper-slide" data-zanim-timeline="{}">
        <div class="bg-holder" style="background-image:url({{asset('storage/media/1214549853.jpg')}});"></div>
        <!--/.bg-holder-->
        <div class="container">
        <div class="row min-vh-100 py-8 align-items-center justify-content-center" data-inertia='{"weight":1.5}'>
          <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
          style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
          <div class="overflow-hidden">
            <p class="fs-4 fs-md-5 lh-1 text-color" data-zanim-xs='{"delay":0}'
            style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;">Recruitment
            and Staffing</p>
          </div>
          <div class="overflow-hidden">
            <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>Connecting top
            talent with the right opportunities – tailored recruitment and staffing solutions for your business
            success.</p>
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
      {{-- @foreach($slider as $list)
      @endforeach --}}
      </div>
      <div class="swiper-nav">
      <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
      <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
      </div>
    </div>
    </section>

    <div class="container">
    <!-- ============================================-->

    <!-----------------------------------  client swiper start------------------------------------------------->
    <section>
      <div class="client">

      <div class="swiper myClientSwiper">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="{{asset('storage/media/1665116922.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1665117520.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1665117298.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1673940283.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1745238697.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1745235052.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1745238602.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1673943640.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1673943414.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/1665117275.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/7.png')}}" class="img-fluid">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/8.png')}}" class="img-fluid">

        </div>
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
      </div>

      </div>
    </section>

    <!-----------------------------------  client swiper end------------------------------------------------->



    <!-- <section> begin ============================-->

    <section class="bg-white" style="padding-top:50px;">
      <div class="row justify-content-center">
      <div class="col-lg-6 col-md-12">
        <h1 class="my-5" style="font-size:3.1573345183rem; font-weight: 700;">Recruitment and Staffing</h1>

      </div>
      <div class="col-lg-6 ">
        <p>With 10+ years of proven expertise in the IT and services sector, our highly skilled and passionate
        developers bring deep knowledge across various technologies including mobile apps, web platforms,
        Blockchain, AI, and beyond. We are equipped to handle all your software development needs with precision and
        quality.</p>
        <p>At Inbox Infotech, you have the freedom to hire top-tier developers from India on a schedule that fits your
        project—hourly, part-time, or full-time. Our dedicated professionals are here to support startups,
        entrepreneurs, and enterprises in building robust web and mobile applications from the ground up.</p>
        <p>Choosing to hire developers from India allows you to quickly expand your development team, reduce overhead
        costs, and maintain full control over your project’s lifecycle with ease and efficiency.</p>
      </div>
      </div>
      {{-- introduction --}}




      <!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!------------------------- our hiring service start --------------------------------->

    <section>
      <div>
      <h3 class="text-color text-center"> Our Hiring Services </h3>
      <div class="my-5">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Permanent_Recruitment.svg')}}" class="img-fluid">
          </div>
          <div class="card-body p-2">
            <h5 class="text-color"> Permanent Recruitment </h5>
            <p class="lh-md">End-to-end recruitment
            support for long-term technical
            roles, ensuring candidates are
            both technically competent
            and culturally aligned.
            </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Contract_Staffing.svg')}}">
          </div>
          <div class="card-body p-2">
            <h5 class="text-color"> Contract Staffing </h5>
            <p class="lh-md"> Flexible IT staffing solutions
            that allow companies to
            quickly scale up or down
            based on project needs and
            market dynamics. </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Executive_Search.svg')}}">
          </div>
          <div class="card-body p-2">
            <h5 class="text-color"> Executive Search </h5>
            <p class="lh-md"> Specialized hiring for mid-level
            to senior IT roles requiring
            domain expertise and
            leadership experience.
            </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Remote_Offshore_Staffing.svg')}}">
          </div>
          <div class="card-body p-2">
            <h5 class="text-color"> Remote/Offshore Staffing </h5>
            <p class="lh-md"> Access to highly talented
            offshore IT professionals. </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Volume_Hiring.svg')}}">
          </div>
          <div class="card-body p-2">
            <h5 class="text-color"> Volume Hiring </h5>
            <p class="lh-md"> High-speed recruitment
            solutions for rapidly growing
            tech teams, BPOs, and ITES
            companies.
            </p>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </section>

    <!------------------------- our hiring service end --------------------------------->




    <section>
      <!-- <div class="container"> -->
      <div>
      <h2 class="my-3 text-center">Why inbox is Your Workforce</h2>
      </div>
      <div class="card bg-primary  p-5">
      <div class="text-center p-3 bg-primary">
        <h3 class="mb-3 text-white">Our Certified Team</h3>
        <p class="text-white">Transparency is the hallmark of our process for hiring skilled Indian developers. With
        over a decade of experience in the market, we can ensure the quality of work and results for your project.
        Our dedicated developers are top performers, and by onboarding them, you can complete your project on time
        and within budget.</p>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-3">
        <div class="card shadow p-4 my-3 h-100">
          <h5> 300+ Clients </h5>
          <p class="text-black"> Ranging from MSMES to
          Fortune 500s across several
          countries
          </p>
        </div>
        <div class="card shadow p-4 my-3 h-100">
          <h5> 50+ Team
          Members </h5>
          <p class="text-black"> We have a large team of
          recruiters working on various
          verticals to deliver quality
          services </p>
        </div>
        </div>
        <div class="col-lg-6 mt-2">
        <div class="text-center">
          <img src="{{asset('assets/inbox/Teams.png')}}" class="img-fluid">
        </div>
        </div>
        <div class="col-lg-3">
        <div class="card shadow p-4 my-3 h-100">
          <h5>7000+ Placements
          </h5>
          <p class="text-black"> Ranging from entry level
          workers to top management.
          We are also experts in head
          hunting. </p>
        </div>
        <div class="card shadow p-4 my-3 h-100">
          <h5> 3 Locations </h5>
          <p class="text-black"> Vadodara, Delhi, UAE
          </p>
        </div>
        </div>

        <!-- <div class="col-lg-3 row">
        <div class="col-lg-4 mb-3">
        <div class="shadow  text-center" style="height: 100%;">
          <div style="width: 50%;margin: 5% auto;">
          <i class="fas fa-lightbulb fs-6 p-3 text-color"></i>
          </div>
          <p class="fw-bold"> Creative Support </p>
        </div>
        </div>
        <div class="col-lg-4 mb-3">
        <div class="shadow  text-center" style="height: 100%;">
          <div style="width: 50%;margin: 5% auto;">
          <i class="fas fa-magic fs-6 p-3 text-color"></i>
          </div>
          <p class="fw-bold"> Creating Experiences </p>
        </div>
        </div>
        <div class="col-lg-4 mb-3">
        <div class="shadow  text-center" style="height: 100%;">
          <div style="width: 50%;margin: 5% auto;">
          <i class="fas fa-cubes fs-6 p-3 text-color"></i>
          </div>
          <p class="fw-bold"> Product Consulting </p>
        </div>
        </div>
        <div class="col-lg-4 mb-3">
        <div class="shadow  text-center" style="height: 100%;">
          <div style="width: 50%;margin: 5% auto;">
          <i class="fas fa-chart-line fs-6 p-3 text-color"></i>
          </div>
          <p class="fw-bold"> Business Boosting </p>
        </div>
        </div>
        <div class="col-lg-4 mb-3">
        <div class="shadow  text-center" style="height: 100%;">
          <div style="width: 50%;margin: 5% auto;">
          <i class="fas fa-chess fs-6 p-3 text-color"></i>
          </div>
          <p class="fw-bold"> Strategic Approach </p>
        </div>
        </div>
        <div class="col-lg-4 mb-3">
        <div class="shadow  text-center" style="height: 100%;">
          <div style="width: 50%;margin: 5% auto;">
          <i class="fas fa-truck fs-6 p-3 text-color"></i>
          </div>
          <p class="fw-bold"> Logistic Consulting </p>
        </div>
        </div>
        </div> -->
      </div>
      </div>
    </section>

    <section>
      <div class="row mt-4 mt-md-5 ">
      <h3 class="my-5 mt-md-5 text-center"> Hire Your Own Expert Remote Team Today </h3>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/oracle.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Oracle Consultant </h5>
        <p class=""> Expert Oracle consultants to streamline your enterprise database and applications. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire SAP Consultant </h5>
        <p class=""> Skilled SAP consultants for end-to-end implementation and optimization. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Hadoop.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Hadoop Consultant </h5>
        <p class=""> Big data specialists to manage and analyze large-scale data with Hadoop. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Salesforce-Developers.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Salesforce Developers </h5>
        <p class=""> Certified Salesforce developers to customize and automate your CRM. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/ServiceNow-Developers.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire ServiceNow Developers </h5>
        <p class=""> Build seamless workflows with our experienced ServiceNow developers. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/AI_ML_Development.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire AI/ML Developers </h5>
        <p class=""> Advanced AI/ML developers to turn data into intelligent business solutions. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Frontend_Development.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Frontend Developers </h5>
        <p class=""> Creative frontend developers for responsive and user-friendly interfaces. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Backend_Development.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Backend Developers </h5>
        <p class=""> Reliable backend developers for scalable and secure server-side solutions. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/mobile_app_developer.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire MobileApp Developers </h5>
        <p class=""> Innovative mobile app developers for iOS and Android platforms. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Database_Administration.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Database Experts </h5>
        <p class=""> Proficient DBAs to manage, secure, and optimize your databases. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Datacenter_Solutions.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Datacenter Experts </h5>
        <p class=""> Comprehensive datacenter solutions for high availability and performance. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/Cyber_Security_Services.png')}}" class="img-fluid">
        </div>
        <h5 class="text-color"> Hire Cyber Security Experts </h5>
        <p class=""> Certified experts to protect your digital assets and ensure compliance. </p>
        </div>
      </div>
      </div>
    </section>


    <!---------------------------------- Performance Highlights start  -------------------------------------->

    <section>
      <div class="text-center">
      <h3 class="text-center">Our Performance Highlights </h3>
      <p> Database of 100,000+ Pre-vetted IT Professionals</p>
      </div>

      <div>
      <div class="row">
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
          </div>
          <h5 class="text-color"> Average Time-toHire </h5>
          <p class=""> Our average time to hire 5–10
          business days, However
          sometimes it varies by role
          complexity and client
          responsiveness.
          </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
          </div>
          <h5 class="text-color">Interview-to-Offer
          Ratio </h5>
          <p class=""> On average, 1 out of every 3
          candidates we submit and who
          reaches the interview stage receives
          an offer.
          </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
          </div>
          <h5 class="text-color"> Client Retention
          Rate</h5>
          <p class=""> Our high client retention rate is
          a reflection of the trust,
          satisfaction, and results we
          deliver. 90% of our clients
          return to work with us again.
          </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" class="img-fluid">
          </div>
          <h5 class="text-color"> NPS Score / Client
          Satisfaction</h5>
          <p class=""> Inbox Infotech proudly
          maintains a Net Promoter
          Score (NPS) of +70, placing us
          in the "Excellent" category by
          global standards.
          </p>
        </div>
        </div>
      </div>
      </div>
    </section>
    <!---------------------------------- Performance Highlights end  -------------------------------------->
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
        <img class="rounded-3 mx-auto img-fluid"
          src="{{asset('storage/media/' . $testimonialslist->photo)}}" alt="Member" />
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

    </div>
  </main>
@endsection