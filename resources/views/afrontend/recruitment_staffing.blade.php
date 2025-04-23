@extends('afrontend/layout')
@section('page_title','Products | Voksen')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")


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
        <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('storage/media/876868410.webp')}});"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <p class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}' style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;color:#fff">Recruitment and Staffing</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs" style="color: #fff" data-zanim-xs='{"delay":0.1}'>Connecting top talent with the right opportunities – tailored recruitment and staffing solutions for your business success.</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="{{url('/about-us')}}">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="{{url('/contact-us')}}">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
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

      <!-- ============================================-->
      <!-- <section> begin ============================-->

      <section class="bg-white" style="padding-top:50px;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
              <h1 style="margin-bottom: 1.333rem; font-size:3.1573345183rem; font-weight: 700;">Recruitment and Staffing</h1>
              <p >With 10+ years of proven expertise in the IT and services sector, our highly skilled and passionate developers bring deep knowledge across various technologies including mobile apps, web platforms, Blockchain, AI, and beyond. We are equipped to handle all your software development needs with precision and quality.</p>
              <p>At Inbox Infotech, you have the freedom to hire top-tier developers from India on a schedule that fits your project—hourly, part-time, or full-time. Our dedicated professionals are here to support startups, entrepreneurs, and enterprises in building robust web and mobile applications from the ground up.</p>
              <p>Choosing to hire developers from India allows you to quickly expand your development team, reduce overhead costs, and maintain full control over your project’s lifecycle with ease and efficiency.</p>
            </div>
            <div class="col-lg-4 text-center">
              <img src="{{asset('assets/inbox/developer.svg')}}" style="height: 100%; object-fit: cover;">
            </div>
          </div>
          {{-- introduction --}}
          <div class="row mt-4 mt-md-5 ">
            <h2 class="my-5 mt-md-5 text-center"> Hire Your Own Expert Remote Team Today </h2>
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
                  <h5 class="text-color"> Hire Salesforce Developer </h5>
                  <p class=""> Certified Salesforce developers to customize and automate your CRM. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/ServiceNow-Developers.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire ServiceNow Developer </h5>
                  <p class=""> Build seamless workflows with our experienced ServiceNow developers. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/AI_ML_Development.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire AI/ML Developer </h5>
                  <p class=""> Advanced AI/ML developers to turn data into intelligent business solutions. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/Frontend_Development.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire Frontend Developer </h5>
                  <p class=""> Creative frontend developers for responsive and user-friendly interfaces. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/Backend_Development.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire Backend Developer </h5>
                  <p class=""> Reliable backend developers for scalable and secure server-side solutions. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/mobile_app_developer.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire MobileApp Developer </h5>
                  <p class="">  Innovative mobile app developers for iOS and Android platforms. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/Database_Administration.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire Database Administrator </h5>
                  <p class=""> Proficient DBAs to manage, secure, and optimize your databases. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/Datacenter_Solutions.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire Datacenter Solutions </h5>
                  <p class=""> Comprehensive datacenter solutions for high availability and performance. </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-3">
                <div class="card shadow p-3" style="height: 100%;">
                  <div style="width: 30%; margin: 4% 0;">
                    <img src="{{asset('assets/inbox/Cyber_Security_Services.png')}}" class="img-fluid">
                  </div>
                  <h5 class="text-color"> Hire Cyber Security Exports </h5>
                  <p class=""> Certified experts to protect your digital assets and ensure compliance. </p>
                </div>
              </div>
          </div>
        </div>
        
        <!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <section >
        <div class="container">
          <div class="row ">
            <h2 class="my-3">Why Vrinsoft is Your Workforce</h2>
            <div class="col-lg-5 mt-2">
              <div class="card p-3 bg-primary ">
                <h3 class="mb-3 text-white">Our Certified Team</h3>
                <p class="text-white">Transparency is the hallmark of our process for hiring skilled Indian developers. With over a decade of experience in the market, we can ensure the quality of work and results for your project. Our dedicated developers are top performers, and by onboarding them, you can complete your project on time and within budget.</p>
              </div>
            </div>
            <div class="col-lg-7 row">
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
            </div>
          </div>
        </div>
      </section>

    </main>
   @endsection