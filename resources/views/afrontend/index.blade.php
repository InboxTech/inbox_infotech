@extends('afrontend/layout')
@section('page_title','What is Managed Cloud Services - Inbox Infotech')
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
			@foreach($slider as $list)
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('storage/media/banner/'.$list->image)}});"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <p class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}' style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;color:#2A3855">{{$list->btn_txt}}</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>{{$list->btn_link}}</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="{{url('/about-us')}}">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="{{url('/contact-us')}}">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
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

      <!-- ============================================-->
      <!-- <section> begin ============================-->

      <section class="bg-white text-center" style="padding-top:50px;">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-10 col-md-10">
              <p style="margin-bottom: 1.333rem;font-size: 1.77689rem;font-weight: 700;color:#2A3855">Welcome to the <br></p>
			  <p style="margin-bottom: 1.333rem;font-size:3.1573345183rem;font-weight: 700;color:#2A3855">Inbox Infotech</p>
			  <h1 class="px-lg-4 mt-4" style="font-weight: 700;color:#2A3855;font-size: 1.77689rem;letter-spacing: 0.1rem;line-height:1; " >The Best Cyber Security Company in India</h1>
			  
              <p class="px-lg-4 mt-4">Get started today to conquer the bigger challenges of your business with our development services. Explore Inbox Infotech’s Development services to stay at par with the industry giants!</p>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
          </div>
          <div class="row mt-4 mt-md-5">
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-chart-bar"></span></div>
              <h3 class="mt-4" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Custom IT Solutions</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Solution for every IT related problems, readily <br /> and skillfully.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span></div>
              <h3 class="mt-4" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Development Services</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>We are providing development Services like software <br /> and Mobile Application.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-lightbulb"></span></div>
              <h3 class="mt-4" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">IT Infrastructure</h3>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Know the market before taking any step, reduce <br /> risks before you go.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Quality Services</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Experience unparalleled service, from beginning <br /> to final development.</p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100" style="padding-top:10px;">
        <div class="container">
          <div class="text-center mb-6">
            <h2>Our Services</h2>
			<p class="px-lg-4 mt-3">Our service offerings are aligned to the changing world of our customers. Our portfolio of services range from designing strategy to delivering impact.</p>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
		  @foreach($service_data as $serv_data)
		  @if($serv_data->id % 2 == 0)
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  " style="background-image:url({{ asset('storage/media/')}}/{{$serv_data->imaage}});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg rounded-lg-be-0 rounded-lg-te-lg ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100" style="padding-top:5px;">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h3 data-zanim-xs='{"delay":0}' style="font-size: 1.77689rem;letter-spacing: -0.05rem;">{{$serv_data->title}}</h3>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>{!! $serv_data->short_desc!!}</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}/{{$serv_data->slug}}">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  @elseif($serv_data->id % 2 == 1)
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url({{ asset('storage/media/')}}/{{$serv_data->imaage}});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h4 data-zanim-xs='{"delay":0}'>{{$serv_data->title}}</h4>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>{!! $serv_data->short_desc!!}
					</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}/{{$serv_data->slug}}">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  @endif
		  @endforeach
          <div class="row mt-7">
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-primary fs-0 me-3 far fa-credit-card"></span>Awards winner team</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>We are proud to be the holders of eminent industry awards that reflect our past contribution and excellence throughout the field.</p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-primary fs-0 me-3 fas fa-comment-alt"></span>Chat with team</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Have a question? Chat online with an expert. <!--<a href='javascript:void(0);'>Start chatting <span class='fas fa-external-link-alt ms-1'></span></a>--></p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h6 data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="text-primary fs-0 me-3 fas fa-envelope"></span>Mail at specialist</h6>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Our 24/7 support team is ready for you at <a href="mailto:info@inboxtechs.com">info@inboxtechs.com</a></p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section style="padding-top:50px;">
        <div class="container">
          <div class="text-center mb-7">
            <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem;letter-spacing: -0.05rem;">Why Choose Inbox</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{asset('assets/inbox/Inbox-Infotech-banner.webp')}}" alt="about" /></div>
            <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                  <h6 class="fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-comment-dots fs-1 me-2" data-fa-transform="flip-h"></span>We Are Professional</h6>
                  <p class="mt-3">Inbox Infotech, the pioneer of offering IT solutions combines business intelligence along with experience to incorporate new innovative changes and deliver constructive results.</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                  <h6 class="fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-palette fs-1 me-2" data-fa-transform="shrink-1"></span>We Are Creative</h6>
                  <p class="mt-3">With so many factors to consider when deciding how to characterize your company , wouldn’t it be great to have a group of forward-thinking, well-informed individuals on board who know what they’re doing?</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                  <h6 class="fs-0 fs-lg-1" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><span class="fas fa-stopwatch fs-1 me-2" data-fa-transform="grow-1"></span>24/7 Great Support</h6>
                  <p class="mt-3">Design clever and compelling marketing strategies, improve product positioning, and drive conversion rates, Inbox is all time available to guide you.</p>
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
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md">
              <h6 class="text-white mb-0" style="letter-spacing: -0.05rem;font-size: 1.77689rem;">If you have any query related development<br class="d-md-none" /> we are available 24/7</h6>
            </div>
            <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="{{url('/contact-us')}}">Contact Us</a></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center" style="padding-top:50px;">
        <div class="container">
          <div class="text-center">
            <h6 class="fs-2 fs-md-3" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Things You Get</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/sharing.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h6 class="mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Creative Support</h6>
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
                  <h6 class="mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Creating Experiences</h6>
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
                  <h6 class="mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Product Consulting</h6>
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
                  <h6 class="mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Business Boosting</h6>
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
                  <h6 class="mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Strategic Approach</h6>
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
                  <h6 class="mt-3" data-zanim-xs='{"delay":0.1}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">Logistic Consulting</h6>
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



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary">
        <div class="container">
          <div class="row align-items-center text-white">
            <div class="col-lg-4">
              <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h6 class="text-white" data-zanim-xs='{"delay":0}' style="font-size:1.776889rem;letter-spacing: -0.05rem;">Request a call back</h6>
                </div>
                <div class="overflow-hidden">
                  <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to one of our advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
              <h6 class="text-white" style="font-size:1.333rem;letter-spacing: -0.05rem;">I would like to discuss:</h6>
              <form action="{{url('contactus/form/submit')}}" method="post">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-6"><input class="form-control" type="text" name="name" placeholder="Your Name" aria-label="Your Name" required /></div>
                  <div class="col-6"><input class="form-control" type="text" name="email" placeholder="Email Id" aria-label="Email Id" required /></div>
                  <div class="col-6 mt-4"><input class="form-control" type="text"  name="message" placeholder="Subject" aria-label="Subject" required /></div>
                  <input type="hidden" value="{{$_SERVER['REMOTE_ADDR']}}" name="ip">
				  <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Submit</button></div>
                </div>
              </form>
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
            <h6 class="fs-2 fs-md-3" style="font-size:1.333rem;letter-spacing: -0.05rem;">Global leadership</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
		  @foreach($leadership as $leader)
            <div class="col-sm-6 col-lg-4    ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('storage/media/'.$leader->photo)}}" alt="Reenal Scott" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h6 data-zanim-xs='{"delay":0}' style="font-size: 1.333rem;letter-spacing: -0.05rem;">{{$leader->name}}</h6>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>{{$leader->title}}</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>{!!$leader->details!!}</p>
                  </div>
                </div>
              </div>
            </div>
			@endforeach
            </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="bg-holder overlay overlay-elixir" style="background-image:url('{{ asset('assets/img/background-15.jpg') }}');"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="d-flex"><span class="me-3"> <img src="{{asset('assets/img/checkmark.png')}}" alt="checkmark" style="width: 55px"/></span>
            <div class="flex-1">
              <h2 class="text-warning fs-3 fs-lg-4" style="font-size: 3.1573345183rem;letter-spacing: -0.15rem;">Take the right step,<br /><span class="text-white">do the big things.</span></h2>
              <div class="row mt-4 pe-lg-10">
                <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":150}'>150 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Happy Clients</h6>
                </div>
                <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":164}'>164 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Finished Projects</h6>
                </div>
                <div class="w-100 d-flex d-lg-none"></div>
                <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":50}'>50 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Skilled Experts</h6>
                </div>
                <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":1500}'>1500 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Media Posts</h6>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- ============================================-->

      <section class="bg-100" style="padding-top:40px;padding-bottom: 10px;">
        <div class="container">
          <div class="text-center mb-6">
            <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem">Our Tech Arsenal</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>	
          <div>
            <div class="d-flex align-items-start">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-ospl-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ospl" type="button" role="tab" aria-controls="v-pills-ospl" aria-selected="true"> Operating Systems & Programming Languages </button>

                <button class="nav-link" id="v-pills-servers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-servers" type="button" role="tab" aria-controls="v-pills-servers" aria-selected="false"> Servers & Load Balancing </button>

                <button class="nav-link" id="v-pills-datastore-tab" data-bs-toggle="pill" data-bs-target="#v-pills-datastore" type="button" role="tab" aria-controls="v-pills-datastore" aria-selected="false" disabled> Data Storage & Querying </button>

                <button class="nav-link" id="v-pills-backend-tab" data-bs-toggle="pill" data-bs-target="#v-pills-backend" type="button" role="tab" aria-controls="v-pills-backend" aria-selected="false">Backend Frameworks </button>

                <button class="nav-link" id="v-pills-frontend-tab" data-bs-toggle="pill" data-bs-target="#v-pills-frontend" type="button" role="tab" aria-controls="v-pills-frontend" aria-selected="false">Frontend Frameworks </button>

                <button class="nav-link" id="v-pills-api-tab" data-bs-toggle="pill" data-bs-target="#v-pills-api" type="button" role="tab" aria-controls="v-pills-api" aria-selected="false">API Services </button>

                <button class="nav-link" id="v-pills-monitoring-tab" data-bs-toggle="pill" data-bs-target="#v-pills-monitoring" type="button" role="tab" aria-controls="v-pills-monitoring" aria-selected="false"> Monitoring & Performance Tools  </button>

                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Business Intelligence  </button>

                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Behavioral & Product Analytics  </button>

                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> AI/ML </button>

                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> DevOps & Clouds </button>

                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Document Management  </button>

                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Project Management & Scrum Masters  </button>
              </div>
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-ospl" role="tabpanel" aria-labelledby="v-pills-ospl-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/linux.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/iOS.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/android.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/swift.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/java.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/ruby.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/python.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/javascript.png')}}" class="w-100 h-inherit">
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-servers" role="tabpanel" aria-labelledby="v-pills-servers-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/AWS.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/google-cloud.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/azure-1.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/apache-1.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/nginx.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/cloudflare.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/python.png')}}" class="w-100 h-inherit">
                    </div>
                  
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-datastore" role="tabpanel" aria-labelledby="v-pills-datastore-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/mysql.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/mongodb.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/postgresql.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/snowflake.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/redshift.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/azure-sql-synapse.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/splunk.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/talend.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/fivetran.png')}}" class="w-100 h-inherit">
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-backend" role="tabpanel" aria-labelledby="v-pills-backend-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/rubyOnRail.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/django.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/Laravel.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/net.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/node.js.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/express.js.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/flask.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/springboot.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/unity3D.png')}}" class="w-100 h-inherit">
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-frontend" role="tabpanel" aria-labelledby="v-pills-frontend-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/react.js.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/bootstrap.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/jqery.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/vue.js.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/ember.js.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/bbackbone.js.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/unity3D.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/shopify.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/wordpress.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/magento.png')}}" class="w-100 h-inherit">
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-api" role="tabpanel" aria-labelledby="v-pills-api-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/segement.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/google-apigee.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/mulesoft.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/tealium.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/zapier.png')}}" class="w-100 h-inherit">
                    </div>
                    
                   
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-monitoring" role="tabpanel" aria-labelledby="v-pills-monitoring-tab" tabindex="0">
                  <div class="row">
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/new-relic.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/appdynamic-logo-1.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/dynatrace-1.png')}}" class="w-100 h-inherit">
                    </div>
                    <div class="col-3">
                      <img src="{{asset('assets/inbox/datadog.png')}}" class="w-100 h-inherit">
                    </div>
                   
                    
                   
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
              </div>
            </div>
          </div>
         </div><!-- end of .container-->
      </section>
     
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <!-- ============================================-->

      <div class="bg-200 py-6">
        <div class="container">
          <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
		        @foreach($clientlogos as $clogolist)
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="{{asset('storage/media/'.$clogolist->image)}}" alt="partnerco" data-zanim-xs="{}" />
            </div>
            @endforeach
			    </div>
        </div>
    </div>
    

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100" style="padding-top:40px;padding-bottom: 10px;">
        <div class="container">
          <div class="text-center mb-6">
		  <h6>WHAT CLIENT SAYS ABOUT US</h6>
            <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem">Our Testimonials</h6>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>		  
         </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
	  
	  <section class="bg-white" style="padding-top:30px;">
        <div class="container">
          <div class="swiper theme-slider" data-swiper='{"loop":true,"slidesPerView":1,"autoplay":{"delay":5000}}'>
            <div class="swiper-wrapper">
			@foreach($testimonials as $testimonialslist)
              <div class="swiper-slide">
                <div class="row px-lg-8">
                  <div class="col-4 col-md-3 mx-auto"><img class="rounded-3 mx-auto img-fluid" src="{{asset('storage/media/'.$testimonialslist->photo)}}" alt="Member" /></div>
                  <div class="col-md-9 mt-4 mt-md-0 px-4 px-sm-3">
                    <p class="lead">{!!$testimonialslist->details!!}</p>
                    <h6 class="fs-0 mb-1 mt-4">{{$testimonialslist->name}}</h6>
                    <p class="mb-0 text-500">{{$testimonialslist->title}}</p>
                  </div>
                </div>
              </div>
			  @endforeach
               </div>
            <div class="swiper-nav">
              <div class="swiper-button-prev icon-item icon-item-lg"><span class="fas fa-chevron-left fs--2"></span></div>
              <div class="swiper-button-next icon-item icon-item-lg"><span class="fas fa-chevron-right fs--2"></span></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      
      <!-- ============================================-->

    </main><!-- ===============================================-->
   @endsection