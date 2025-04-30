@extends('afrontend/layout')
@section('page_title','Web Development Company in India | Website Development Services in Vadodara')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")


@section('container')
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
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>{{$list->btn_txt}}</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>{{$list->btn_link}}</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="{{url('/aboutus')}}">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="{{url('/contactus')}}">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
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
      <section class="bg-white text-center">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-10 col-md-10">
              <h3 class="fs-2 fs-lg-3">Welcome to the <br></h3><h2>Inbox Infotech</h3>
              <p class="px-lg-4 mt-3">Get started today to conquer the bigger challenges of your business with our development services. Explore Inbox Infotech’s Development services to stay at par with the industry giants!</p>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
          </div>
          <div class="row mt-4 mt-md-5">
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-chart-bar"></span></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Custom IT Solutions</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Solution for every IT related problems, readily <br /> and skillfully.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Development Services</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>We providing development Services like software <br /> and Mobile Application.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-lightbulb"></span></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>IT Infrastructure</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Know the market before taking any step, reduce <br /> risks before you go.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Quality Services</h5>
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
      <section class="bg-100">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">Our Services</h3>
			<p class="px-lg-4 mt-3">Our service offerings are aligned to the changing world of our customers. Our portfolio of services range from designing strategy to delivering impact.</p>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
		  @foreach($service_data as $serv_data)
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  " style="background-image:url(assets/inbox/cloud-computing.jpg);"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg rounded-lg-be-0 rounded-lg-te-lg ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Cloud Services</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Let a single provider seamlessly and securely connect to diverse cloud solutions. Our industry-leading partnerships let you grow your business, its efficiency, and productivity. The services are catered to helping build an agile IT ecosystem using hybrid multi-cloud environments, networks, and security that is required globally. The world-class solutions enable to expand across the globe and improve efficiency and productivity while delivering seamless customer experience.</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url(assets/inbox/web-development.jpg);"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Web Development</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>
					Promising to offer agile, innovative and competitive services for custom application and software development, Inbox Infotech seeks to be your one-stop solution for software development. Offering next-level business software development services, we aim to offer both backend and front software development services to cater to distinct software project needs and requirements. Contact us for any requirement, from start-ups to large scale organizations, we offer comprehensive business software development solutions to all. 
					</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="#!">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  @endforeach
          <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg " style="background-image:url(assets/inbox/mobile-application-development.jpg);"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Mobile Applications</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Take your mobile application to the next level by exploring our customized mobile app solutions. With Inbox Infotech, experience the power of working with an extremely proficient and knowledgeable team of application developers. Offering integrated app development solutions for both Android and iOS platforms, we are where your dream meets reality.</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="#!">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0" style="background-image:url(assets/inbox/infrastructure_management.jpg);"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Infrastructure Management</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>
					With smart IT infrastructure solutions, the digital age can be easily conquered. Inbox InfoTech’s infrastructure management solutions offer a consolidated end-to-end view of the applications and infrastructure. Offering an integrated dashboard, we enable our clients to monitor the network infrastructure, applications, servers along with other components to optimize IT performance. The proven automation tools essentially standardize operations and eliminate all manual processes while improving accuracy and precision.

 
					</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="#!">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div class="row g-0 position-relative mb-4 mb-lg-0">
            <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
              <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  " style="background-image:url(assets/inbox/artificial_intelligence.jpg);"></div>
              <!--/.bg-holder-->
            </div>
            <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg rounded-lg-be-0 rounded-lg-te-lg ">
              <div class="elixir-caret d-none d-lg-block"></div>
              <div class="d-flex align-items-center h-100">
                <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Artificial Intelligence</h5>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Enhance creativity and unlock new possibilities with the artificial intelligence services of Inbox Infotech solutions. Our AI capabilities are embedded in the software to offer you automated and intelligent solutions. Our AI technologies support a diverse environment including machine learning, computer vision, forecasting and optimization, and natural language processing. Value our technologies are true to meet the changing business needs.</p>
                  </div>
                  <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="{{url('/services')}}">Learn More<div class="overflow-hidden ms-2"><span class="d-inline-block" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-7">
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 far fa-credit-card"></span>Awards winner team</h5>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>We are proud to be the holders of eminent industry awards that reflect our past contribution and excellence throughout the field.</p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-comment-alt"></span>Chat with team</h5>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Have a question? Chat online with an expert. <a href='#!'>Start chatting <span class='fas fa-external-link-alt ms-1'></span></a></p>
            </div>
            <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-phone-alt"></span>Call a specialist</h5>
              <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Our 24/7 support team is ready for you at +91-9662398895.</p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="text-center mb-7">
            <h3 class="fs-2 fs-md-3">Why Choose Inbox</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{asset('assets/inbox/Inbox-Infotech-banner.jpg')}}" alt="about" /></div>
            <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                  <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2" data-fa-transform="flip-h"></span>We Are Professional</h5>
                  <p class="mt-3">Inbox Infotech, the pioneer of offering IT solutions combines business intelligence along with experience to incorporate new innovative changes and deliver constructive results.</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                  <h5 class="fs-0 fs-lg-1"><span class="fas fa-palette fs-1 me-2" data-fa-transform="shrink-1"></span>We Are Creative</h5>
                  <p class="mt-3">With so many factors to consider when deciding how to characterize your company , wouldn’t it be great to have a group of forward-thinking, well-informed individuals on board who know what they’re doing?</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                  <h5 class="fs-0 fs-lg-1"><span class="fas fa-stopwatch fs-1 me-2" data-fa-transform="grow-1"></span>24/7 Great Support</h5>
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
              <h4 class="text-white mb-0">If you have any query related development<br class="d-md-none" /> we are available 24/7</h4>
            </div>
            <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="{{url('/contactus')}}">Contact Us</a></div>
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



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary">
        <div class="container">
          <div class="row align-items-center text-white">
            <div class="col-lg-4">
              <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                </div>
                <div class="overflow-hidden">
                  <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to one of our advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
              <h5 class="text-white">I would like to discuss:</h5>
              <form action="{{url('contactus/form/submit')}}" method="post">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-6"><input class="form-control" type="text" name="name" placeholder="Your Name" aria-label="Your Name" /></div>
                  <div class="col-6"><input class="form-control" type="text" name="email" placeholder="Phone Number" aria-label="Phone Number" /></div>
                  <div class="col-6 mt-4"><input class="form-control" type="text"  name="message" placeholder="Subject" aria-label="Subject" /></div>
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
      <section class="bg-100 text-center">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">Global leadership</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
		  @foreach($leadership as $leader)
            <div class="col-sm-6 col-lg-4    ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('storage/media/'.$leader->photo)}}" alt="Reenal Scott" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>{{$leader->name}}</h5>
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
        <div class="bg-holder overlay overlay-elixir" style="background-image:url(assets/img/background-15.jpg);"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="d-flex"><span class="me-3"> <img src="{{asset('assets/img/checkmark.png')}}" alt="checkmark" style="width: 55px"/></span>
            <div class="flex-1">
              <h2 class="text-warning fs-3 fs-lg-4">Take the right step,<br /><span class="text-white">do the big things.</span></h2>
              <div class="row mt-4 pe-lg-10">
                <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":52}'>100 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Happy Clients</h6>
                </div>
                <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":164}'>150 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Finished Projects</h6>
                </div>
                <div class="w-100 d-flex d-lg-none"></div>
                <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":38}'>50 +</div>
                  <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Skilled Experts</h6>
                </div>
                <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":100}'>1500 +</div>
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

      <div class="bg-200 py-6">
        <div class="container">
          <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
		  @foreach($clientlogos as $clogolist)
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="{{asset('storage/media/'.$clogolist->image)}}" alt="partnerco" data-zanim-xs="{}" /></div>
            @endforeach
			</div>
        </div>
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100" style="padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
          <div class="text-center mb-6">
		  <h6>WHAT CLIENT SAYS ABOUT US</h6>
            <h3 class="fs-2 fs-md-3">Our Testimonials</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>		  
         </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
	  
	  <section class="bg-white">
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