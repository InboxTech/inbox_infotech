@extends('afrontend/layout')
@section('page_title', 'Cyber Security')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/Cyber_Security.png') }});">
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color">
                                            <span style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;">
                                                Advanced Cybersecurity to Safeguard Your Business
                                            </span>
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
                                            From proactive threat detection to rapid incident response, we offer end-to-end security for your digital assets
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-zanim-xs='{"delay":0.2}'>
                                            <a class="btn btn-primary me-3 mt-3" href="{{ url('/about-us') }}">
                                                Read more <span class="fas fa-chevron-right ms-2"></span>
                                            </a>
                                            <a class="btn btn-warning mt-3" href="{{ url('/contact-us') }}">
                                                Contact us <span class="fas fa-chevron-right ms-2"></span>
                                            </a>
                                        </div>
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

        <div class="container cyber-security">
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
                                        <img class="img-fluid" src="{{ asset('storage/media/' . $clogolist->image) }}" alt="partnerco" data-zanim-xs="{}" />
                                        {{--</div> --}}
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="swiper-pagination"></div> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-----------------------------   client swiper end ---------------------------->

            <!-----------------------------   About _______ start ---------------------------->
            <section class="" style="padding-top:50px;">
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <img src="{{asset('storage/media/579290391.webp')}}" alt="" class="img-fluid rounded" data-zanim-xs="{}">
                    </div>
                    <div class="col-xl-6 ps-5 col-12">
                        <h2 class="text-color">About </h2>
                        <p class="">
                            Our AI-based Hospital Management System is a comprehensive, next-generation platform designed to streamline and optimize hospital operations through intelligent automation and data-driven decision-making. Leveraging advanced artificial intelligence, the system enhances efficiency across key functions including patient management, scheduling, electronic medical records (EMR), billing, diagnostics, inventory, and administrative workflows. It empowers healthcare providers with real-time insights, predictive analytics, and personalized care recommendations—improving patient outcomes, operational productivity, and resource utilization.</p>
                    </div>
                </div>
            </section>
            <!-----------------------------   About _______ end ---------------------------->

            <!----------------------------- Cybersecurity Services start ---------------------------->

            <section class="" style="padding-top:50px; padding-bottom:50px;">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Our Comprehensive Cybersecurity Services </h6>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Authentication & Access Control</h5>
                                <p>
                                    Manages user identity and access using multi-factor authentication, role-based permissions, and session controls to prevent unauthorized system access.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Network Security</h5>
                                <p>
                                    Secures data in transit with firewalls, intrusion detection/prevention systems, VPNs, and encrypted communication protocols to block external threats.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Data Protection</h5>
                                <p>
                                    Safeguards sensitive data using encryption, secure backups, masking, and data loss prevention tools to avoid breaches and data leakage.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Threat Detection & Monitoring</h5>
                                <p>
                                    Continuously monitors systems to identify, analyze, and respond to suspicious activities, leveraging threat intelligence and anomaly detection tools.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Vulnerability Management</h5>
                                <p>
                                    Detects and resolves security weaknesses through regular scanning, patch deployment, risk assessments, and simulated attacks like penetration testing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Endpoint Security</h5>
                                <p>
                                    Protects end-user devices using antivirus software, EDR tools, access restrictions, and remote wipe capabilities to secure all endpoints.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Web & Application Security</h5>
                                <p>
                                    Defends web apps and APIs using WAFs, secure coding practices, regular security tests, and OWASP Top 10 compliance measures.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Incident Response & Forensics</h5>
                                <p>
                                    Manages cybersecurity incidents with logging, automated response, forensic tools, and root cause analysis to quickly contain and recover from breaches.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="service-card">
                            <div class="">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Compliance & Reporting</h5>
                                <p>
                                    Ensures adherence to laws and standards like GDPR or ISO, with audit trails, security reports, and real-time compliance monitoring dashboards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!----------------------------- Cybersecurity Services end ---------------------------->

            <!-----------------------------   Cybersecurity AIstart   ---------------------------->
            <section class="" style="padding-top:50px;">
                <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem">Solving Today's Cybersecurity Challenges with AI's Intelligence</h6>
                    <p class="lead text-muted mb-4">Today's cyber threats are complex and fast-moving. Inbox Infotech uses the power of Artificial Intelligence to provide smarter, faster, and more adaptive security.</p>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6 my-3">
                        <div class="unified-card">
                            <h5 class="mb-2"> Smarter Threat Detection </h5>
                            <div class="my-2">
                                <p>
                                    AI analyzes massive amounts of data to pinpoint real threats, reducing overwhelming alerts for our security experts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                        <div class="unified-card">
                            <h5 class="mb-2"> Detecting New Attacks </h5>
                            <div class="my-2">
                                <p>
                                    AI learns and identifies subtle signs of even the newest attack methods that traditional security might miss.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                        <div class="unified-card">
                            <h5 class="mb-2"> Faster Response </h5>
                            <div class="my-2">
                                <p>
                                    AI automates actions to quickly contain threats like ransomware, minimizing damage and downtime.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                        <div class="unified-card">
                            <h5 class="mb-2"> Understanding User Behavior </h5>
                            <div class="my-2">
                                <p>
                                    AI spots unusual activity that could indicate compromised accounts or insider threats.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                        <div class="unified-card">
                            <h5 class="mb-2"> Extending Security Expertise </h5>
                            <div class="my-2">
                                <p>
                                    AI provides advanced insights, helping our team deliver stronger security even with industry-wide skill shortages.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-----------------------------   Cybersecurity AIend   ---------------------------->

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

        <!------------------------- Cloud-First Architecture start --------------------------------->
        <section>
            <div class="container my-5">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h2> Cloud-First Architecture</h2>
                    <p class="lead text-muted mb-4">Designed for growth, built for the future.</p>
                </div>
                <div class="scalable-cloud" data-aos="fade-up" data-aos-duration="1500">
                    <div class="row my-3">
                        <div class="col-lg-3 col-12 d-flex justify-content-between"><h5 class="text-color">Multi-Location Support</h5> <div class="vr d-lg-block d-none"></div></div>
                        <div class="col-lg-9 col-12">Enables seamless operations across various locations with flexible access options, empowering centralized management and efficient collaboration for dispersed teams.</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3 col-12 d-flex justify-content-between"><h5 class="text-color">Scalable Architecture</h5> <div class="vr d-lg-block d-none"></div></div>
                        <div class="col-lg-9 col-12">Designed to accommodate growth, this robust architecture effortlessly scales from individual clinics to expansive hospital networks, ensuring consistent performance and adaptability.</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3 col-12 d-flex justify-content-between"><h5 class="text-color">Cloud Deployment</h5> <div class="vr d-lg-block d-none"></div></div>
                        <div class="col-lg-9 col-12">Eliminates the necessity for on-site infrastructure, resulting in accelerated deployment timelines and a reduced total cost of ownership for healthcare providers.</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3 col-12 d-flex justify-content-between"><h5 class="text-color">Third-Party Integration</h5> <div class="vr d-lg-block d-none"></div></div>
                        <div class="col-lg-9 col-12">Facilitates smooth connections with external systems like labs, insurance providers, TPAs, and government portals, streamlining workflows and enhancing data exchange capabilities.</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3 col-12 d-flex justify-content-between"><h5 class="text-color">Tenant Segregation</h5> <div class="vr d-lg-block d-none"></div></div>
                        <div class="col-lg-9 col-12">Provides each tenant with a dedicated and secure database while offering administrators centralized oversight and control for corporate-level management and reporting.</div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-3 col-12 d-flex justify-content-between"><h5 class="text-color">24/7 Reliability</h5> <div class="vr d-lg-block d-none"></div></div>
                        <div class="col-lg-9 col-12">Features a high-availability architecture that guarantees continuous business operations around the clock, minimizing downtime and ensuring uninterrupted critical services.</div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------- Cloud-First Architecture end --------------------------------->

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
