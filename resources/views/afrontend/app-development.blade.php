@extends('afrontend/layout')
@section('page_title', 'Mobile Application Development')
<?php $s1 = 'index,follow'; ?>
<?php $s2 = 'A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization.'; ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara'; ?>
<?php $s4 = 'https://inboxtechs.com'; ?>
@section('seo_noindex_tag', "$s1")
@section('seo_description', "$s2")
@section('seo_keyword', "$s3")
@section('seo_canonical', "$s4")


@section('container')
    <style>
        /* .bg-holder{
        position: relative;
        overflow: visible;
      }
      .bg-holder::before {
        content: '';
        position: absolute;
        right: 0%;
        bottom: -20%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 980px;
        height: 700px;
        z-index: 99;
        background-image: url({{ asset('storage/media/112673532.webp') }});
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
                    <div class="swiper-slide" data-zanim-timeline="{}">
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/services/banner/Mobile_app.jpg') }});">
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color">Custom
                                            <span
                                                style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;">
                                                Mobile App Development </span>
                                            Company
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
                                            Empowering innovation with expert app development – bespoke solutions to drive your digital success.
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                                href="{{ url('/about-us') }}">Read more<span
                                                    class="fas fa-chevron-right ms-2"></span></a><a
                                                class="btn btn-warning mt-3" href="{{ url('/contact-us') }}">Contact us<span
                                                    class="fas fa-chevron-right ms-2"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                </div>
            </div>
        </section>

        <div class="container">
            <!-- ============================================-->

            <!-----------------------------   client swiper start ---------------------------->
            <section>
                <div class="client">
                    <div class="container">
                        <div class="swiper myClientSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($clientlogos as $clogolist)
                                    <div class="swiper-slide">
                                        {{-- <div style="width: 100%;"> --}}
                                        <img class="img-fluid" src="{{ asset('storage/media/clients/' . $clogolist->image) }}"
                                            alt="partnerco" data-zanim-xs="{}" />
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



            <!-- <section> begin ============================-->

            <section class="bg-white" style="padding-top:50px;">
                <div>

                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 my-3">
                        <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/inbox/android.png') }}" class="img-fluid"
                                    style="width: 50px; height: 50px;">
                                <h5 class="ms-2"> Android App Development </h5>
                            </div>
                            <div class="my-2">
                                <p>Expertise in the complete Android app development stack, including Java and Kotlin. Build
                                    scalable, secure, and high-performance apps tailored to business needs across
                                    industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/inbox/iOS.png') }}" class="img-fluid"
                                    style="width: 50px; height: 50px;">
                                <h5 class="ms-2"> iOS App Development </h5>
                            </div>
                            <div class="my-2">
                                <p>Specialized in crafting elegant and efficient iOS applications using Swift and
                                    Objective-C. Delivering seamless experiences that meet Apple’s design and performance
                                    standards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/inbox/tech_arsenal/flutter.png') }}" class="img-fluid"
                                    style="width: 50px; height: 50px;">
                                <h5 class="ms-2"> Flutter App Development </h5>
                            </div>
                            <div class="my-2">
                                <p>Cross-platform mobile app development using Flutter and Dart. Build natively compiled
                                    applications with expressive UIs and fast performance for both Android and iOS
                                    platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/inbox/tech_arsenal/react.js.png') }}" class="img-fluid"
                                    style="width: 50px; height: 50px;">
                                <h5 class="ms-2"> React Native App Development </h5>
                            </div>
                            <div class="my-2">
                                <p>Cross-platform development with React Native, enabling fast and cost-effective mobile
                                    apps using a single JavaScript codebase. Ideal for startups and enterprises alike.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/inbox/xamarin.png') }}" class="img-fluid"
                                    style="width: 50px; height: 50px;">
                                <h5 class="ms-2"> Xamarin App Development </h5>
                            </div>
                            <div class="my-2">
                                <p>Enterprise-level mobile app solutions using Xamarin and C#. Leverage native APIs with a
                                    shared codebase for iOS, Android, and Windows apps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/inbox/ionic.png') }}" class="img-fluid"
                                    style="width: 50px; height: 50px;">
                                <h5 class="ms-2"> Ionic App Development </h5>
                            </div>
                            <div class="my-2">
                                <p>Hybrid mobile apps built with web technologies like HTML, CSS, and JavaScript. Perfect
                                    for rapid development and deployment across multiple platforms.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- <section> close ============================-->
            <!-- ============================================-->

            <!------------------------- custom mobile app step start --------------------------------->

            <section class="">
                <div class="row">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                            <h3 class="text-color">Custom Mobile App Development Services</h3>
                            <p class="fw-light">Build high-performance, user-focused mobile apps with a team that
                                specializes in end-to-end custom solutions for iOS, Android, and cross-platform development.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Mobile App Strategy & Consulting</h5>
                            </div>
                            <p class="text-black mb-0">We start by understanding your business goals, target audience, and
                                industry challenges. Our experts help you choose the right platform, development language,
                                and feature set to ensure your app delivers maximum value. From market research to MVP
                                planning, we turn your vision into a clear, actionable roadmap.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Mobile App Design</h5>
                            </div>
                            <p class="text-black mb-0">Design is at the heart of user engagement. Our UI/UX designers craft
                                intuitive, responsive interfaces with a mobile-first mindset. Using tools like Figma and
                                Adobe XD, we create wireframes, prototypes, and final designs that ensure a seamless
                                experience across iOS, Android, and hybrid platforms.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Custom App Development</h5>
                            </div>
                            <p class="text-black mb-0">We specialize in building fully customized mobile applications
                                tailored to your business goals, industry needs, and user expectations. Whether you're
                                targeting iOS, Android, or both, we develop apps using the most suitable technology stack —
                                including native languages like Swift and Kotlin, or modern frameworks like Flutter and
                                React Native. Every app we build is designed from the ground up, ensuring unique
                                functionality, performance, and user experience. From design to deployment, we craft
                                solutions that align perfectly with your brand and vision.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Cross-Platform App Development</h5>
                            </div>
                            <p class="text-black mb-0">Need to launch on both iOS and Android without doubling your budget?
                                We develop cross-platform apps using Flutter, React Native, and Xamarin. These apps share a
                                single codebase while maintaining native-like performance and user experience, reducing
                                time-to-market and maintenance efforts.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Backend Development & API Integration</h5>
                            </div>
                            <p class="text-black mb-0">Every great app needs a powerful backend. We build secure, scalable
                                server-side architectures using Node.js, Python, PHP, Firebase, AWS, and more. Whether
                                you're syncing data, authenticating users, or integrating third-party APIs, we ensure smooth
                                communication between frontend and backend systems.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Mobile App Testing & QA</h5>
                            </div>
                            <p class="text-black mb-0">Before any app goes live, it goes through rigorous testing. We
                                perform functional, performance, security, and user acceptance testing on real devices to
                                ensure your app works flawlessly. Our QA team uses both manual and automated tools to
                                eliminate bugs and optimize for performance across platforms.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">App Deployment & Launch</h5>
                            </div>
                            <p class="text-black mb-0">We manage the entire app release process, from preparing assets to
                                publishing on the App Store and Google Play. We ensure your app meets all compliance
                                standards, help with app store optimization (ASO), and coordinate a smooth rollout with
                                version control and update planning.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Post-Launch Support & Maintenance</h5>
                            </div>
                            <p class="text-black mb-0">After your app is live, we continue to support it. Our team provides
                                regular updates, performance monitoring, bug fixes, and feature enhancements. With real-time
                                analytics and user feedback loops, we help you evolve your app to meet changing user demands
                                and OS updates.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">App Modernization & Migration</h5>
                            </div>
                            <p class="text-black mb-0">Already have an app but it’s outdated or underperforming? We can
                                modernize your codebase, upgrade to newer frameworks, and even migrate from one platform to
                                another — such as from Android Java to Flutter or from hybrid to fully native — all while
                                improving performance, design, and scalability.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Emerging Tech Integrationt</h5>
                            </div>
                            <p class="text-black mb-0">Stay ahead of the curve by integrating the latest technologies. We
                                help you add features like AI/ML for personalization, AR/VR for immersive experiences, IoT
                                connectivity for smart devices, voice assistants, blockchain for secure data, and more — all
                                seamlessly integrated into your mobile ecosystem.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!------------------------- custom mobile app step end --------------------------------->
        </div>

        <!-- <section> rquest a callback begin ============================-->
        <section class="bg-primary p-5 my-5">
            <div class="container">
                <div class="row align-items-center text-white">
                    <div class="col-lg-4">
                        <div class="border border-2 border-white p-4 py-lg-5 text-center rounded-3"
                            data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                            </div>
                            <div class="overflow-hidden">
                                <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak
                                    to
                                    one of our advisers over the phone? Just submit your details and we’ll be in touch
                                    shortly. You can also email us if you would prefer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0 ">
                        <div class="bg-white rounded-3 p-4 call-back-form">
                            <h5 class="text-color mb-4">I would like to discuss:</h5>
                            <form action="{{ url('contactus/form/submit') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Your Name" aria-label="Your Name" />
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex">
                                            <!-- Country Code Dropdown -->
                                            <select class="form-select" name="country_code" style="max-width: 110px;"
                                                required>
                                                <option value="+91" selected>+91 (IN)</option>
                                                <option value="+1">+1 (US)</option>
                                                <option value="+44">+44 (UK)</option>
                                                <option value="+61">+61 (AU)</option>
                                                <option value="+81">+81 (JP)</option>
                                                <option value="+49">+49 (DE)</option>
                                                <option value="+33">+33 (FR)</option>
                                                <option value="+39">+39 (IT)</option>
                                                <option value="+34">+34 (ES)</option>
                                                <option value="+82">+82 (KR)</option>
                                                <option value="+86">+86 (CN)</option>
                                                <option value="+55">+55 (BR)</option>
                                                <option value="+7">+7 (RU)</option>
                                                <option value="+41">+41 (CH)</option>
                                                <option value="+31">+31 (NL)</option>
                                                <option value="+46">+46 (SE)</option>
                                                <option value="+45">+45 (DK)</option>
                                                <option value="+358">+358 (FI)</option>
                                                <option value="+351">+351 (PT)</option>
                                                <option value="+36">+36 (HU)</option>
                                                <option value="+420">+420 (CZ)</option>
                                                <option value="+421">+421 (SK)</option>
                                                <option value="+43">+43 (AT)</option>
                                                <option value="+32">+32 (BE)</option>
                                                <option value="+353">+353 (IE)</option>
                                            </select>
                                            <!-- Phone Input -->
                                            <input class="form-control bg-white" type="tel" name="phone"
                                                placeholder="Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-12"><input class="form-control" type="email" name="email"
                                            placeholder="Email" aria-label="Email" /></div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" id="" rows="4" placeholder="Subject"
                                            aria-label="Enter your Descriptions here..."></textarea>
                                    </div>
                                    <input type="hidden" value="{{ $_SERVER['REMOTE_ADDR'] }}" name="ip">
                                    <div class="col-4 mt-4 mx-auto"><button class="btn btn-primary w-100"
                                            type="submit">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section>
        <!-- <section> rquest a callback close ============================-->

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
                            <a class="nav-link active" id="backend-tab" data-bs-toggle="tab" data-bs-target="#backend"
                                role="tab" aria-controls="backend" aria-selected="false">Backend </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="frontend-tab" data-bs-toggle="tab" data-bs-target="#frontend"
                                role="tab" aria-controls="frontend" aria-selected="false">Frontend </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="aiml-tab" data-bs-toggle="tab" data-bs-target="#aiml"
                                role="tab" aria-controls="aiml" aria-selected="false"> AI/ML </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="datastore-tab" data-bs-toggle="tab" data-bs-target="#datastore"
                                role="tab" aria-controls="datastore" aria-selected="false"> Database </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="server-tab" data-bs-toggle="tab" data-bs-target="#server"
                                role="tab" aria-controls="server" aria-selected="true"> Servers </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="devop-tab" data-bs-toggle="tab" data-bs-target="#devop"
                                role="tab" aria-controls="devop" aria-selected="false"> DevOps </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="monitoring-tab" data-bs-toggle="tab" data-bs-target="#monitoring"
                                role="tab" aria-controls="monitoring" aria-selected="false"> Monitoring </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="api-tab" data-bs-toggle="tab" data-bs-target="#api"
                                role="tab" aria-controls="api" aria-selected="false">API </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="analytics-tab" data-bs-toggle="tab" data-bs-target="#analytics"
                                role="tab" aria-controls="analytics" aria-selected="false"> Analytics </a>
                        </li>

                    </ul>
                    {{--
          </div> --}}
                    {{-- <div class="col-lg-8 my-2"> --}}
                    <div class="tab-content my-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="tab-pane fade show active" id="backend" role="tabpanel"
                            aria-labelledby="backend-tab" tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/net.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> .Net </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/php.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> PHP </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Laravel.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Laravel </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/node.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Node.js</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/python.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Python </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/java.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Java </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/rubyOnRail.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Ruby On Rails </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/django.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Django </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/express.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Express.js </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/flask.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Flask </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/springboot.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Spring boot </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/unity3D.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Unity </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/angular.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Angular.js </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/react.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> React.js </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/bootstrap.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Bootstrap </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/jqery.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> jQuery </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/vue.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Vue.js </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/ember.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Ember.js </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/bbackbone.js.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Backbone.js </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/flutter.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Flutter </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/unity3D.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Unity 3D </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/shopify.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Shopify </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/wordpress.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> WordPress </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/magento.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Magento </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="aiml" role="tabpanel" aria-labelledby="aiml-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/GIT-HUB.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Github Copilot </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/TABNINE-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Tabnine </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/CHATGPT.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> ChatGPT </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/tensorflow-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Tansorflow </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/openaicodex.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> OpenAI Codex </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/otter.ai_.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Otter.ai </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/codewhisperer.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> CodeWhisperer</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/hugging-face.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Hugging Face </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/blackbox ai.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Blackbox AI </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/cursor ai.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Cursor AI </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="datastore" role="tabpanel" aria-labelledby="datastore-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/mysql.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> MySQL </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/mongodb.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> MongoDB </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/postgresql.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> PostgreySQL </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/snowflake.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Snowflake </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/redshift.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Redshift </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/azure-sql-synapse.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Azure SQL Synapse </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/splunk.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Splunk </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/talend.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Talend </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/fivetran.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Fivetran </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/oracle.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Oracle </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/mariaDB.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> MariaDB </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/sql_server.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> SQL Server </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="server" role="tabpanel" aria-labelledby="server-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/linux.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Linux </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/ubantoo.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Ubantoo </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/windows.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Windows </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/AWS.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> AWS </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/google-cloud.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Google Cloud </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/azure-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Azure </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/apache-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Apache </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/nginx.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Nginx </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/cloudflare.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Cloudflare </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/fastly.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Fastly </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/digital ocean.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Digital Ocean </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/euris.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Euris </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="devop" role="tabpanel" aria-labelledby="devop-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Kubernetes.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Kubernetes </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/ECS.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> ECS </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/EC2.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> EC2 </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Lambda.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Lambda </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/CloudFormation.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> CloudFormation </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Terraform.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Terraform </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Jenkins.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Jenkins </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Bitbucket.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Bitbucket </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/github.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> GitHub </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Go.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Go </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/SaltStack.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> SaltStack </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/Docker.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Docker </p>
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
                                            <img src="{{ asset('assets/inbox/tech_arsenal/new-relic.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> New Relic </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/appdynamic-logo-1.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> AppDynamics </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/dynatrace-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Dynatrace </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/datadog.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Datadog </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="api" role="tabpanel" aria-labelledby="api-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/segement.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Segment </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/google-apigee.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Google Apigee </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/mulesoft.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Mulesoft </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/tealium.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Tealium </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/zapier.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Zapier </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/sonarqube.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> SonarQube </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/twilio.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Twilio </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/sendgrid.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Sendgrid </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/stripe.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Stripe </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/paypal.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Paypal </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab"
                            tabindex="0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/BUSINESS-INTELIGENCE-POWERBI.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Power BI </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/sap-business-objects.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> SAP </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/tableau-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Tableau </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/looker-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Looker </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/qlik-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Qlik </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/heap-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Heap </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/google-analytics.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Google Analytics </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/amplitude-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Amplitude </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/mixpanel-1.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Mixpanel </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                                        <div style="width: 40%;margin: 3% auto;">
                                            <img src="{{ asset('assets/inbox/tech_arsenal/countly.png') }}" class="img-fluid">
                                        </div>
                                        <p class="fw-bold"> Countly </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- </div> --}}

                </div>
            </div>
            </div><!-- end of .container-->
        </section>

        <!-- <section> Our Tech arsenal close ============================-->

         <!------------------------------  things you know start ------------------------->
         <section class="my-5">
            <div class="container">
                <div class="text-center">
                    <h3 class="fs-2 fs-md-3">Things You Get</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>

                <div>
                    <div class="row">
                        <div class="col-lg-5 mt-4">
                            <div class=" p-3 bg-primary">
                                <!-- <div class=" "> -->
                                <h3 class="mb-3 text-white"> Our Expertise</h3>
                                <p class="text-white">Working with our certified experts means you get tailored,
                                    high-quality solutions, delivered on time and within budget. We ensure seamless
                                    collaboration, leveraging industry-best practices to bring your vision to life with
                                    efficiency and reliability.
                                </p>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="h-100">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/Product_Consulting.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/customized-solution.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Customized Solution</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/scalable-solution.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Scalable Solution</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/user-friendly.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>User-friendly Interface</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/data-security.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Data Security</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}"
                                        data-zanim-trigger="scroll">
                                        <div class="h-100 shadow p-3">
                                            <div class="w-50 p-3 mx-auto">
                                                <img src="{{ asset('assets/img/icons/svg_icons/dedicated-support.svg') }}"
                                                    alt="icon" class="img-fluid" data-zanim-xs='{"delay":0}' />
                                            </div>
                                            <div class="text-center">
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Dedicated Support</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- end of .container-->
        </section>
        <!-- <section> things you know close ============================-->


        {{-- </div> --}}
    </main>
@endsection
