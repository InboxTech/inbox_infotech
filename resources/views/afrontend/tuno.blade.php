@extends('afrontend/layout')
@section('page_title','Tuno')
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
    color: #00406d;
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
                      <p class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}' style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;color:#fff">Tuno</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs" style="color: #fff" data-zanim-xs='{"delay":0.1}'>AI-Powered Voice Automation for Smarter Customer Engagement</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="{{url('/about-us')}}">Read more<span class="fas fa-chevron-right ms-2"></span></a>
                      <a class="btn btn-warning mt-3" href="{{url('#tuno-contnect')}}">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
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

      <section class="bg-white text-center" style="padding-top:50px;">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-10 col-md-10">
              <h1 class="text-color" style="margin-bottom: 1.333rem;font-size:3.1573345183rem;font-weight: 700;">Tuno</h1>
              <p style="margin-bottom: 1.333rem;font-size: 1.77689rem;font-weight: 700;">AI-Powered Voice Automation for Smarter Customer Engagement  <br></p>
			  {{-- <h1 class="px-lg-4 mt-4" style="font-weight: 700;color:#2A3855;font-size: 1.77689rem;letter-spacing: 0.1rem;line-height:1; " >The Best Cyber Security Company in India</h1>
			  
              <p class="px-lg-4 mt-4">Get started today to conquer the bigger challenges of your business with our development services. Explore Inbox Infotech’s Development services to stay at par with the industry giants!</p> --}}

              
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
          </div>
          {{-- introduction --}}
          <div class="row mt-4 mt-md-5">
            <h2 class="text-color"> Introduction </h2>
            {{-- <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem;letter-spacing: -0.05rem;">What We Offer</h6> --}}
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-rocket"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">AI-powered voicebot</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>automating outbound calls.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-database"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Trained on client data</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>for real-time, intelligent interactions.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-plug"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Seamless integration</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>with existing call center infrastructure.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-dollar-sign"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Reduces costs</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>by handling initial calls & summarizing insights.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-phone-volume"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Outbound Sales Calls</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Automates customer outreach.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-user-check"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Customer Verification & Feedback</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Enhances engagement.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-calendar-check"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Appointment Scheduling</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Automates bookings & demos.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-filter"></span></div>
              <h3 class="mt-4 text-color" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Lead Qualification</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Filters prospects before agent intervention.</p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      {{-- our service --}}
      <section class="bg-100" style="padding-top:10px;">
        <div class="container">
          <div class="text-center mb-6">
            <h2 class="text-color">Industries We Serve</h2>
			      {{-- <p class="px-lg-4 mt-3">Call Center AI Voicebot - Case Study (Banking Sector).</p> --}}
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>

          <div class="swiper theme-slider " data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-zanim-timeline="{}">
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                  <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
                    <div class="bg-holder" style="background-image:url({{ asset('storage/media/132288596.webp')}}/);"></div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white ">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100" style="padding-top:5px;">
                      <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                          <h3 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.77689rem;letter-spacing: -0.05rem;">Banking & Finance</h3>
                        </div>
                        <div class="overflow-hidden">
                          <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Credit card applications, loan eligibility, fraud</p>
                        </div>
                        <div class="overflow-hidden">
                          <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}/">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-zanim-timeline="{}">
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                  <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
                    <div class="bg-holder" style="background-image:url({{ asset('storage/media/138989707.webp')}}/);"></div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100">
                      <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                          <h3 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.77689rem;letter-spacing: -0.05rem;">Automotive</h3>
                        </div>
                        <div class="overflow-hidden">
                          <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Loan pre-approval, service bookings, insurance claims</p>
                        </div>
                        <div class="overflow-hidden">
                          <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}/">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-zanim-timeline="{}">
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                  <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
                    <div class="bg-holder" style="background-image:url({{ asset('storage/media/157078749.jpg')}}/);"></div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100" style="padding-top:5px;">
                      <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                          <h3 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.77689rem;letter-spacing: -0.05rem;">E-commerce & Retail</h3>
                        </div>
                        <div class="overflow-hidden">
                          <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Personalized shopping, order tracking, loyalty</p>
                        </div>
                        <div class="overflow-hidden">
                          <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}/">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-zanim-timeline="{}">
                <div class="row g-0 position-relative mb-4 mb-lg-0">
                  <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
                    <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url({{ asset('storage/media/182861534.jpg')}}/);"></div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100">
                      <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                          <h3 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.77689rem;letter-spacing: -0.05rem;">Healthcare</h3>
                        </div>
                        <div class="overflow-hidden">
                          <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Appointment scheduling, prescription reminders, insurance verification</p>
                        </div>
                        <div class="overflow-hidden">
                          <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}/">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        {{-- @foreach($service_data as $serv_data)
        @if($serv_data->id % 2 == 0)
        @elseif($serv_data->id % 2 == 1)
            
        @endif
        @endforeach --}}
          <div class="row justify-content-center mt-7">
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-color fs-0 me-3 far fa-clock"></span>24/7 Instant Assistance</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Unlike human agents, the AI voice bot never sleeps. It provides around-the-clock customer support—instantly responding to booking inquiries, itinerary changes, cancellations, or general travel questions.</p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-color fs-0 me-3 fas fa-comment"></span>Natural, Human-Like Conversations</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Built with advanced natural language processing (NLP), the AI voice bot understands and responds in a way that feels personal and intuitive—minimizing frustration and boosting customer satisfaction.</p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-color fs-0 me-3 fas fa-globe"></span>Multilingual Capabilities</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Seamlessly serve travelers from around the world. Our AI voice bot can communicate fluently in multiple languages, breaking down barriers and delivering a localized experience.</a></p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-color fs-0 me-3 fas fa-dollar-sign"></span>Cost Efficiency</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Reduce reliance on large support teams. The AI voice bot handles high volumes of requests simultaneously—lowering operational costs while improving response times.</p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-color fs-0 me-3 fas fa-brain"></span>Continuous Learning</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>With every interaction, the AI bot becomes smarter. It learns from user queries to improve accuracy, anticipate needs, and provide even faster solutions over time.</p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 class="text-color" data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-color fs-0 me-3 fas fa-sync-alt"></span>Consistency</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Provides the same quality and tone of service every single time and minimizes the human errors and emotional variability.</p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section style="padding-top:50px;">
        <div class="container">
          <div class="text-center mb-7">
            <h6 class="text-color fs-2 fs-md-3" style="font-size: 2.368593037rem;letter-spacing: -0.05rem;">Why Choose Tuno AI Voicebot?</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{asset('assets/inbox/123456.jpg')}}" alt="about" /></div>
            <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                  <h6 class="text-color fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-puzzle-piece fs-1 me-2" data-fa-transform="flip-h"></span>Easy Integration</h6>
                  <p class="mt-2">Plug & play with CRMs & APIs.</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-3" data-zanim-xs='{"delay":0}'>
                  <h6 class="text-color fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-robot fs-1 me-2" data-fa-transform="shrink-1"></span>Customizable AI</h6>
                  <p class="mt-2">Industry-specific training & workflows</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-3" data-zanim-xs='{"delay":0}'>
                  <h6 class="text-color fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-server fs-1 me-2" data-fa-transform="grow-1"></span>On-Prem Deployment</h6>
                  <p class="mt-2">Full data control & compliance.</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-3" data-zanim-xs='{"delay":0}'>
                  <h6 class="text-color fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-language fs-1 me-2" data-fa-transform="flip-h"></span>Multi-Language Support</h6>
                  <p class="mt-2">25+ languages, adaptive accents.</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-3" data-zanim-xs='{"delay":0}'>
                  <h6 class="text-color fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-chart-bar fs-1 me-2" data-fa-transform="shrink-1"></span>Custom Analytics Dashboard</h6>
                  <p class="mt-2">Real-time insights & reports.</p>
                </div>
              </div>

            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary py-6 text-center text-md-start">
        <div class="container" id="tuno-contnect">
          <div class="row align-items-center">
          <div class="card shadow">
        <div class="card-body h-100 ">
          <h5 class="mb-3 text-color">Write to us</h5>
          <form action="{{url('contactus/form/submit')}}" method="post">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-4">
            <div class="mb-4"><input class="form-control bg-white" type="text" name="name"
              placeholder="Your Name" required="required" /></div>
            </div>
            <div class="col-4">
            <div class="mb-4"><input class="form-control bg-white" type="email" name="email" placeholder="Email"
              required="required" /></div>
            </div>
            <div class="col-4">
            <div class="mb-4"><input class="form-control bg-white" type="tel" name="phone" placeholder="Phone" /></div>
            </div>
          </div>
          <div>
            <div class="mb-4"><textarea class="form-control bg-white" rows="9" name="message"
              placeholder="Enter your descriptions here..." required="required"></textarea></div>
            <input type="hidden" value="{{$_SERVER['REMOTE_ADDR']}}" name="ip">
            <button class="btn btn-md-lg bg-primary" type="Submit"> <span class="color-white fw-600">Send
              Now</span></button>
          </div>
          </form>
        </div>
        </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center" style="padding-top:50px;">
        <div class="container">
          <div class="text-center">
            <h6 class="text-color fs-2 fs-md-3" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Key Features</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-phone-volume"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Automated Outbound Calls</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Engage customers at scale.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-language"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Multilingual AI</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Arabic, English, Hindi & more.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-chart-line"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Analytics Dashboard</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Real-time call insights.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-chart-bar"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Sentiment Analysis</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Understand customer emotions.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-plug"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">CRM Integration</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Sync data seamlessly.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-file-audio"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Call Transcriptions</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Detailed, actionable summaries.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-sync"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Automated Follow-ups</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Smart reminders & callbacks.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden">
                  <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-shield-alt"></span></div>
                </div>
                <div class="overflow-hidden">
                  <h6 class="text-color mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Compliance Management</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Secure & regulatory-compliant.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 text-center" style="padding-top:50px;">
        <div class="container">

          <div class="text-center mb-6">
            <h6 class="text-color fs-2 fs-md-3" style="font-size:1.333rem;letter-spacing: -0.05rem;">Competitor Comparison</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
    <div class="row border-bottom py-2">
      <div class="col-4 feature-name">Feature</div>
      <div class="col feature-name">Our AI Voicebot</div>
      <div class="col feature-name">Competitor A</div>
      <div class="col feature-name">Competitor B</div>
    </div>
    <div class="row border-bottom py-2">
      <div class="col-4 feature-name">Multilingual AI</div>
      <div class="col text-center"><i class="fas fa-check checkmark"></i> <br> Yes</div>
      <div class="col text-center"><i class="fas fa-exclamation-triangle checkmark"></i> <br> Limited</div>
      <div class="col text-center"><i class="fas fa-times checkmark"></i> <br> No</div>
    </div>
    <div class="row border-bottom py-2">
      <div class="col-4 feature-name">Call Insights</div>
      <div class="col text-center"> <i class="fas fa-check checkmark"></i> <br> Yes</div>
      <div class="col text-center"> <i class="fas fa-times checkmark"></i> <br> No</div>
      <div class="col text-center"><i class="fas fa-check checkmark"></i> <br> Yes</div>
    </div>
    <div class="row border-bottom py-2">
      <div class="col-4 feature-name">CRM Integration</div>
      <div class="col text-center"><i class="fas fa-check checkmark"></i> <br> Yes</div>
      <div class="col text-center"><i class="fas fa-exclamation-triangle checkmark"></i> <br> Limited</div>
      <div class="col text-center"><i class="fas fa-exclamation-triangle checkmark"></i> <br> Limited</div>
    </div>
    <div class="row border-bottom py-2">
      <div class="col-4 feature-name">Scalability</div>
      <div class="col text-center"> <i class="fas fa-check checkmark"></i> <br> Yes</div>
      <div class="col text-center"> <i class="fas fa-times checkmark"></i>  <br> No</div>
      <div class="col text-center"><i class="fas fa-check checkmark"></i> <br> Yes</div>
    </div>
    <div class="row border-bottom py-2">
      <div class="col-4 feature-name">Pricing</div>
      <div class="col text-center"> <i class="fas fa-money-bill checkmark"></i> <br> Flexible </div>
      <div class="col text-center"> <i class="fas fa-lock checkmark"></i> <br> Fixed</div>
      <div class="col text-center"> <i class="fas fa-dollar-sign checkmark"></i> <br> High </div>
    </div>

        </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
   @endsection