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
        <div class="bg-holder">
          <img src="{{ asset('storage/media/services/banner/1214549853.jpg') }}" alt="recruitment & staffing" class="lcp-image" fetchpriority="high"  width="1920" height="1080" loading="lazy"/>
        </div>
        <!--/.bg-holder-->
        <div class="container">
        <div class="row min-vh-100 py-8 align-items-center justify-content-center" data-inertia='{"weight":1.5}'>
          <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
          style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
          <div class="overflow-hidden">
            <p class="fs-4 fs-md-5 lh-1 text-color banner-title fade-in-up">
            Recruitment and Staffing
          </p>
          </div>
          <div class="overflow-hidden">
            <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
              Connecting top talent with the right opportunities – tailored recruitment and staffing solutions for your business success.</p>
          </div>
          <div class="overflow-hidden">
           <div class="button-group fade-in-up">
             <a class="btn btn-primary me-3 mt-3" href="{{ url('/about-us') }}"> Read more <span class="fas fa-chevron-right ms-2"></span> </a>
             <a class="btn btn-warning mt-3" href="{{ url('/contact-us') }}"> Contact us <span class="fas fa-chevron-right ms-2"></span> </a>
        </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      {{-- @foreach($slider as $list)
      @endforeach --}}
      </div>
      <!-- <div class="swiper-nav">
      <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
      <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
      </div> -->
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
          <img src="{{asset('storage/media/clients/1665116922.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1665117520.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1665117298.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1673940283.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1745238697.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1745235052.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1745238602.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1673943640.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1673943414.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/1665117275.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/7.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        <div class="swiper-slide">
          <img src="{{asset('storage/media/clients/8.png')}}" class="w-100 h-100" alt="client logo" loading="lazy">

        </div>
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
      </div>

      </div>
    </section>

    <!-----------------------------------  client swiper end------------------------------------------------->



    <!-- <section> begin ============================-->

    <section class="bg-white">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-lg-6 col-md-12">
        <h2 style=" font-weight: 500;">Whether it's for permanent positions, contractual roles, or project-based hiring, Inbox ensures the right fit by aligning candidate skills with organizational goals and culture.
        </h2>

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
      <h2 class="text-center" data-aos="fade-up" data-aos-duration="1000"> Our Hiring Services </h2>
      <div class="my-5">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Permanent_Recruitment.svg')}}" class="" alt="permanant recruitment" loading="lazy">
          </div>
          <div class="card-body p-2">
            <h3 class="fs-2"> Permanent Recruitment </h3>
            <p class="lh-md">
				End-to-end recruitment support for long-term technical roles, ensuring candidates are both technically competent and culturally aligned.
            </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Contract_Staffing.svg')}}" class="" alt="contract staffing" loading="lazy">
          </div>
          <div class="card-body p-2">
            <h3 class="fs-2"> Contract Staffing </h3>
            <p class="lh-md">
				 Flexible IT staffing solutions that allow companies to quickly scale up or down based on project needs and market dynamics. </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Executive_Search.svg')}}" class="" alt="executive search" loading="lazy">
          </div>
          <div class="card-body p-2">
            <h3 class="fs-2"> Executive Search </h3>
            <p class="lh-md">
				Specialized hiring for mid-level to senior IT roles requiring domain expertise and leadership experience.
            </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Remote_Offshore_Staffing.svg')}}" class="" alt="remote offshore staffing" loading="lazy">
          </div>
          <div class="card-body p-2">
            <h3 class="fs-2"> Remote/Offshore Staffing </h3>
            <p class="lh-md"> Access to highly talented offshore IT professionals. </p>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card shadow p-3" style="height: 100%;">
          <div class="svg-icons">
            <img src="{{asset('assets/img/icons/svg_icons/Volume_Hiring.svg')}}" class="" alt="volume hiring" loading="lazy">
          </div>
          <div class="card-body p-2">
            <h3 class="fs-2"> Volume Hiring </h3>
            <p class="lh-md">
				High-speed recruitment solutions for rapidly growing tech teams, BPOs, and ITES companies.
            </p>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </section>

    <!------------------------- our hiring service end --------------------------------->
	  </div>


<!-------------------------- why inbox is workforce start ------------------------------>
  <section>
        <!--/.bg-holder-->
        <h2 class="my-3 text-center"> Why inbox is Your Workforce </h2>
        <div class="bg-primary p-5">
            <div class="container mx-auto">
                <div class="text-center p-3">
                    <h3 class="mb-3 text-white">Our Certified Team</h3>
                    <p class="text-white">Transparency is the hallmark of our process for hiring skilled Indian developers. With
                    over a decade of experience in the market, we can ensure the quality of work and results for your project.
                    Our dedicated developers are top performers, and by onboarding them, you can complete your project on time
                    and within budget.</p>
                </div>
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-3 col-md-6 ">
                        <div class="my-5 progress-no">
                            <h4 class="fs-3 fs-lg-3 mb-0 fw-bold lh-xs countup-plus" data-zanim-xs='{"delay":0.1}'
                                data-countup='{"endValue":150}'>150</h4>
                            <h5 class="fs-0" data-zanim-xs='{"delay":0.2}'>Clients Globally</h5>
                        </div>
                        <div class="my-5 progress-no">
                            <h4 class="fs-3 fs-lg-3 mb-0 fw-bold lh-xs countup-plus" data-zanim-xs='{"delay":0.1}'
                                data-countup='{"endValue":35}'>35</h4>
                            <h5 class="fs-0" data-zanim-xs='{"delay":0.2}'>Highly Experienced Recruiters</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 d-lg-block d-none text-center">
                        <img src="{{ asset('assets/inbox/Teams.png') }}" class="w-100 h-100" alt="inbox team" loading="lazy">
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-center align-items-lg-end py-5">
                        <div class="mb-5 progress-no ">
                            <h4 class="fs-3 fs-lg-3 mb-0 fw-bold lh-xs countup-plus" data-zanim-xs='{"delay":0.1}'
                                data-countup='{"endValue":3000}'>3000</h4>
                            <h5 class="fs-0" data-zanim-xs='{"delay":0.2}'>Placements across global</h5>
                        </div>
                        <div class=" progress-no">
                            <h4 class="fs-3 fs-lg-3 mb-0 fw-bold lh-xs " data-zanim-xs='{"delay":0.1}'
                                data-countup='{"endValue":3}'>3</h4>
                            <h5 class="fs-0" data-zanim-xs='{"delay":0.2}'>Locations <br> Vadodara, Delhi, UAE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-------------------------- why inbox is workforce end ------------------------------>

<div class="container">
<!------------------------------------- Hire Your Own Expert Remote Team start  -------------------------------------->
    <section>
      <div class="row mt-4 mt-md-5 " data-aos="fade-up" data-aos-duration="1000">
      <h2 class="my-5 mt-md-5 text-center"> Hire Your Own Expert Remote Team Today </h2>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/oracle.png')}}" class="w-100 h-100" alt="oracle consultant" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Oracle Consultant </h3>
        <p class=""> Expert Oracle consultants to streamline your enterprise database and applications. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/SAP_Consultancy.png')}}" class="w-100 h-100" alt="SAP consultant" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire SAP Consultant </h3>
        <p class=""> Skilled SAP consultants for end-to-end implementation and optimization. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Hadoop.png')}}" class="w-100 h-100" alt="Hadoop consultant" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Hadoop Consultant </h3>
        <p class=""> Big data specialists to manage and analyze large-scale data with Hadoop. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Salesforce-Developers.png')}}" class="w-100 h-100" alt="Salesforce developers" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Salesforce Developers </h3>
        <p class=""> Certified Salesforce developers to customize and automate your CRM. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/ServiceNow_Developers.png')}}" class="w-100 h-100" alt="ServiceNow developers" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire ServiceNow Developers </h3>
        <p class=""> Build seamless workflows with our experienced ServiceNow developers. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/AI_ML_Development.png')}}" class="w-100 h-100" alt="AI and ML development" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire AI/ML Developers </h3>
        <p class=""> Advanced AI/ML developers to turn data into intelligent business solutions. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Frontend_Development.png')}}" class="w-100 h-100" alt="Frontend development" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Frontend Developers </h3>
        <p class=""> Creative frontend developers for responsive and user-friendly interfaces. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Backend_Development.png')}}" class="w-100 h-100" alt="Backend development" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Backend Developers </h3>
        <p class=""> Reliable backend developers for scalable and secure server-side solutions. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/mobile_app_developer.png')}}" class="w-100 h-100" alt="Mobile app developer" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire MobileApp Developers </h3>
        <p class=""> Innovative mobile app developers for iOS and Android platforms. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Database_Administration.png')}}" class="w-100 h-100" alt="Database administration" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Database Experts </h3>
        <p class=""> Proficient DBAs to manage, secure, and optimize your databases. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Datacenter_Solutions.png')}}" class="w-100 h-100" alt="Datacenter solutions" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Datacenter Experts </h3>
        <p class=""> Comprehensive datacenter solutions for high availability and performance. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
        <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/inbox/remote_team/Cyber_Security_Services.png')}}" class="w-100 h-100" alt="Cyber security services" loading="lazy">
        </div>
        <h3 class="fs-2"> Hire Cyber Security Experts </h3>
        <p class=""> Certified experts to protect your digital assets and ensure compliance. </p>
        </div>
      </div>
      </div>
    </section>
<!------------------------------------- Hire Your Own Expert Remote Team end  -------------------------------------->


    <!---------------------------------- Performance Highlights start  -------------------------------------->

    <section>
      <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="text-center">Our Performance Highlights </h2>
      <p> Database of 100,000+ Pre-vetted IT Professionals</p>
      </div>

      <div>
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/Average_Time_to_Hire.svg')}}" class="w-100 h-100" alt="Average time to hire" loading="lazy">
          </div>
          <h3 class="fs-2"> Average Time-toHire </h3>
          <p class=""> Our average time to hire 5–10 business days, However sometimes it varies by role complexity and client responsiveness. </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/Interview_to_Offer_Ratio.svg')}}" class="w-100 h-100" alt="Interview to offer ratio" loading="lazy">
          </div>
          <h3 class="fs-2">Interview-to-Offer Ratio </h3>
          <p class=""> On average, 1 out of every 3 candidates we submit and who reaches the interview stage receives an offer. </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/Client_Retention_Rate.svg')}}" class="w-100 h-100" alt="Client retention rate" loading="lazy">
          </div>
          <h3 class="fs-2"> Client Retention Rate</h3>
          <p class=""> Our high client retention rate is a reflection of the trust, satisfaction, and results we deliver. 90% of our clients return to work with us again.
          </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 my-3">
        <div class="card shadow p-3" style="height: 100%;">
          <div style="width: 30%; margin: 4% 0;">
          <img src="{{asset('assets/img/icons/svg_icons/NPS_Score _ Client_Satisfaction.svg')}}" class="w-100 h-100" alt="NPS score" loading="lazy">
          </div>
          <h3 class="fs-2"> NPS Score / Client Satisfaction</h3>
          <p class=""> Inbox Infotech proudly maintains a Net Promoter Score (NPS) of +70, placing us in the "Excellent" category by global standards.
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
        <h2> Our Testimonials </h2>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
      </div>
      </div><!-- end of .container-->
    <!-- <section> close ============================-->

    <div class="testimonial">
      <!-- <div class="container"> -->
      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">

        <div class="swiper-slide d-flex" style="height: auto">
          <div class="card shadow p-3 d-flex flex-column w-100" style="height: 100%">
          <div class="row align-items-center mb-3">

            <div class="col-12">
            <h3 class="fs-0 mb-1 mt-4 text-color">Sameer Salunkhe</h3>
            <p class="mb-0 text-500">Director PwC</p>
            </div>
          </div>
          <div class="flex-grow-1">
            <p class="lead">Inbox Infotech's support during our expansion phase was crucial. They delivered pre-vetted tech talent in record time, which helped us maintain project momentum without delays.. </p>
          </div>
          </div>
        </div>
        <div class="swiper-slide d-flex" style="height: auto">
          <div class="card shadow p-3 d-flex flex-column w-100" style="height: 100%">
          <div class="row align-items-center mb-3">

            <div class="col-12">
            <h3 class="fs-0 mb-1 mt-4 text-color">Rohan Arora</h3>
            <p class="mb-0 text-500"> HR Director, HCL Tech</p>
            </div>
          </div>
          <div class="flex-grow-1">
            <p class="lead">Inbox Infotech brought in exceptional candidates that were not only technically skilled but also culturally aligned with our company. Their team was responsive, professional, and incredibly easy to work with. </p>
          </div>
          </div>
        </div>
        <div class="swiper-slide d-flex" style="height: auto">
          <div class="card shadow p-3 d-flex flex-column w-100" style="height: 100%">
          <div class="row align-items-center mb-3">

            <div class="col-12">
            <h3 class="fs-0 mb-1 mt-4 text-color">Varsha Sharma </h3>
            <p class="mb-0 text-500"> Recruitment Head Alembic </p>
            </div>
          </div>
          <div class="flex-grow-1">
            <p class="lead">"We partnered with Inbox for a high-volume recruitment drive, and they delivered beyond expectations. Not only did they meet the deadline, but the quality of candidates was outstanding. Most of them are still with us today. </p>
          </div>
          </div>
        </div>
        <div class="swiper-slide d-flex" style="height: auto">
          <div class="card shadow p-3 d-flex flex-column w-100" style="height: 100%">
          <div class="row align-items-center mb-3">

            <div class="col-12">
            <h3 class="fs-0 mb-1 mt-4 text-color">Sanjay Patel </h3>
            <p class="mb-0 text-500"> Associate Director Recruitment, Shell
            </p>
            </div>
          </div>
          <div class="flex-grow-1">
            <p class="lead">The Inbox team has consistently provided high-quality talent, often ahead of schedule. Their professionalism, follow-ups, and candidate engagement are everything you'd want in a recruitment partner. </p>
          </div>
          </div>
        </div>
        </div>
        <div class="swiper-nav">
        <div class="swiper-pagination"></div>
        </div>
      </div>

      <!-- </div> -->
      <!-- end of .container-->
    </div><!-- <section> testimonial close ============================-->

    <!-- ============================================-->
</section>
    </div>
  </main>
@endsection
