@extends('afrontend/layout')
@section('page_title', 'Web Development')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag', "$s1")
@section('seo_description', "$s2")
@section('seo_keyword', "$s3")
@section('seo_canonical', "$s4")


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
                    style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;"> Web
                    Development </p>
                </div>
                <div class="overflow-hidden">
                  <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>Being a well reputed
                    web app development company, we hold a specialization in designing, building, testing and deploying
                    web-based applications, tailored to propel businesses forward.</p>
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


    <section>
      <div class="text-center my-5" data-aos="fade-up" data-aos-duration="1000">
        <h3> Comprehensive End-to-End Web Development Services </h3>
        <p> Unlock your digital potential with our end-to-end web development services, tailored to deliver
          high-performance, scalable, and secure web solutions. From initial strategy and design to development,
          deployment, and ongoing support, we handle every stage of the web development lifecycle. Whether you're
          launching a new site or modernizing an existing one, our expert team ensures a seamless experience with a
          strong focus on user engagement, functionality, and business growth. </p>
      </div>
      <div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Custom Web App Development </h5>
                </div>
              </div>

              <div class="my-2">
                <p>We build tailored web applications designed to meet your unique business needs—scalable, secure, and
                  optimized for performance. From concept to launch, our team delivers fully customized solutions that
                  enhance user experience and drive results.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5>Enterprise
                    Web Application </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We develop robust, scalable, and secure enterprise web applications that streamline operations,
                  support complex workflows, and integrate seamlessly with your existing systems—empowering your
                  business to operate more efficiently at scale. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> UI/UX Modernization </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We revamp outdated interfaces with modern, intuitive, and user-centered designs that enhance
                  usability, improve engagement, and align with current design standards—giving your application a
                  fresh, competitive edge. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Fullstack Development Services </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We offer end-to-end full-stack development services, combining front-end and back-end expertise to
                  build dynamic, responsive, and scalable web applications—ensuring seamless performance across the
                  entire technology stack. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Single Page Applications
                    ( SPA)</h5>
                </div>
              </div>
              <div class="my-2">
                <p> We develop fast, interactive Single Page Applications (SPAs) that deliver seamless user experiences
                  by dynamically loading content without full page reloads—ideal for modern, high-performance web
                  solutions. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Progressive Web App Development(PWA) </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We create Progressive Web Apps that combine the best of web and mobile—offering fast, reliable, and
                  engaging user experiences with offline access, push notifications, and native-like performance across
                  all devices. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Content Management System(CMS) </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We develop flexible and user-friendly CMS solutions that empower you to easily create, manage, and
                  update website content—streamlining workflows and reducing reliance on technical support.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Integration, Upgradation & Migration </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We provide seamless integration with third-party systems, upgrade outdated technologies, and migrate
                  legacy applications to modern platforms—ensuring improved performance, security, and scalability with
                  minimal disruption. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3">
            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
              <div class="row">
                <div class="col-3">
                  <img src="" alt="icon">
                </div>
                <div class="col-9">
                  <h5> Website Support & Maintenance </h5>
                </div>
              </div>
              <div class="my-2">
                <p> We offer ongoing website support and maintenance services to ensure your site runs smoothly, remains
                  secure, and stays up-to-date with regular updates, performance monitoring, and quick issue resolution.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
                <div class="tab-pane fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab"
                  tabindex="0">
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



    <!------------------------------------- web development process start  ----------------------------------->

    <section class="web-dev-process">
      <div class="container">
        <div class="text-center my-5" data-aos="fade-up" data-aos-duration="1000">
          <h3> Web Development Process </h3>
          <p> We collaborate with the client to understand their business goals, target audience, and required website features—such as services, contact forms, team profiles, and branding. This helps us define the project scope and ensure the site meets both functional and marketing needs.
          </p>
        </div>
  
        <div class="my-5 p-5">
          
        <div class="position-relative process-after">
          <div class="shadow position-relative w-50 my-4 p-4" style="left: -5%;">
            <div class="web-process-no" style="position: absolute; right: -7%;top: 40%;"> 1 </div>
            <div>
              <h4> Discovery & Requirement Gathering </h4>
              <p> TWe gather information about the website's content, target audience, and content needs to define the website's structure, features, and overall direction. <p>
            </div>
          </div>
       
          <div class=" shadow position-relative w-50 my-4 p-4" style="left: 55%;">
            <div class="web-process-no" style="position: absolute; left: -7%;top: 40%;"> 2 </div>
            <div>
              <h4> Planning & Proposal </h4>
              <p> We outline the website structure, features, and technology stack, then provide a detailed proposal with project scope, timeline, and cost for approval. </p>
            </div>
          </div>
       
          <div class=" shadow position-relative w-50 my-4 p-4" style="left: -5%;">
            <div class="web-process-no" style="position: absolute; right: -7%;top: 40%;"> 3 </div>
            <div>
              <h4> Design (UI/UX) </h4>
              <p> We create user-friendly, responsive designs that reflect the company’s brand, including layout mockups and visual elements to ensure an engaging user experience. </p>
            </div>
          </div>
       
          <div class="shadow position-relative w-50 my-4 p-4" style="left: 55%;">
            <div class="web-process-no" style="position: absolute; left: -7%;top: 40%;"> 4 </div>
            <div>
              <h4> Development </h4>
              <p> We build the website by transforming designs into functional code, incorporating features like content management systems (CMS), forms, and databases, ensuring optimal performance and security.</p>
            </div>
          </div>
       
          <div class=" shadow position-relative w-50 my-4 p-4" style="left: -5%;">
            <div class="web-process-no" style="position: absolute; right: -7%;top: 40%;"> 5 </div>
            <div>
              <h4> Testing & Quality Assurance</h4>
              <p> We thoroughly test the website across different devices and browsers to ensure all features work correctly, perform efficiently, and meet security standards before launch. </p>
            </div>
          </div>
       
          <div class=" shadow position-relative w-50 my-4 p-4" style="left: 55%;">
            <div class="web-process-no"style="position: absolute; left: -7%;top: 40%;"> 6 </div>
            <div>
              <h4> Deployment </h4>
              <p> We prepare the website for launch by setting up hosting, configuring the domain, and transferring files to the live server, ensuring everything is optimized and functioning as expected. </p>
            </div>
          </div>
       
          <div class=" shadow position-relative w-50 my-4 p-4" style="left: -5%;">
            <div class="web-process-no" style="position: absolute; right: -7%;top: 40%;"> 7 </div>
            <div>
              <h4>Training & Handover </h4>
              <p> We provide training on how to manage and update the website, along with documentation, ensuring the client is equipped to handle day-to-day operations.
              </p>
            </div>
          </div>
     
        <div class=" shadow position-relative w-50 my-4 p-4" style="left: 55%;">
          <div class="web-process-no" style="position: absolute; left: -7%;top: 40%;"> 8 </div>
          <div>
            <h4>  Maintenance & Support </h4>
            <p> We offer ongoing support to ensure the website runs smoothly, providing updates, security patches, performance monitoring, and troubleshooting as needed. </p>
          </div>
       
      </div>
     

        </div>
        </div>

      </div>
    </section>
    <!------------------------------------- web development process end  ----------------------------------->


  </div>
</main>
@endsection