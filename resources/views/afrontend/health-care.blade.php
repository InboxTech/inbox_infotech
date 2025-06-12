@extends('afrontend/layout')
@section('page_title', 'Healthcare')
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
    <main class="main health-tech" id="top">
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/banner/Healthcare.jpg') }});">
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color" data-zanim-xs='{"delay":0}'
                                            style="font-size:4.2087269129rem !important; letter-spacing: -0.25rem;font-weight: 700;">
                                            Healthcare</p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                            Healthcare IT Services: Leading IT Support for the Healthcare Industry.
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div data-zanim-xs='{"delay":0.2}'>
                                            <a class="btn btn-primary me-3 mt-3" href="{{ url('/about-us') }}">
                                                Read more<span class="fas fa-chevron-right ms-2"></span>
                                            </a>
                                            <a class="btn btn-warning mt-3" href="{{ url('/contact-us') }}">
                                                Contact us<span class="fas fa-chevron-right ms-2"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach ($slider as $list)     @endforeach --}}
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                </div>
            </div>
      </section>

        <div class="container">
            <!-- ============================================-->
            <section class="">
                <!------------------------- AI Innovation & engagement start --------------------------------->
                <div class="row my-5 custom-border">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h3 class="text-color">AI Innovation & engagement</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="row">
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Predictive Diagnostics</h5>
                                <p class="text-black mb-0">Early detection of diseases using AI models (e.g., sepsis prediction, radiology image analysis).</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Smart Scheduling</h5>
                                <p class="text-black mb-0">AI Chatbot handles 24/7 patient queries, appointment scheduling, and availability checks.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Virtual Transcript</h5>
                                <p class="text-black mb-0">Real-time transcription of audio and video consultations for accurate EHR documentation.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Virtual Health Assistants</h5>
                                <p class="text-black mb-0">24/7 patient support through AI Voice Bot which enables phonebased appointment booking and
                                    handles patient queries for elderly or less tech-savvy patients.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Real-time alerts</h5>
                                <p class="text-black mb-0">Personalized medicine reminders based on prescribed dosage and time using AI
                                    models to patients, Notifies staff of anomalies in vitals or lab results.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Personalized Treatment Plans</h5>
                                <p class="text-black mb-0">AI analyzes patient history to recommend customized care.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------- AI Innovation & engagement end --------------------------------->

                <!------------------------- Seamless Patient Experience start --------------------------------->
                <div class="row my-5 custom-border">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h3 class="text-color">Seamless Patient Experience</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="row">
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Online Scheduling</h5>
                                <p class="text-black mb-0">Online scheduling and virtual check-ins to reduce wait times</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Telemedicine</h5>
                                <p class="text-black mb-0">Remote consultation options via secure video/audio calls.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Instant Visibility</h5>
                                <p class="text-black mb-0">Real-time calendar view for doctor availability and bed status.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Patient Chat</h5>
                                <p class="text-black mb-0">In-app chat for ongoing patient-doctor communication.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Smart Reminders</h5>
                                <p class="text-black mb-0">Tailored reminders for appointments, medications, or screenings via SMS/email, AI Voice Assistance.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Patient Feedback</h5>
                                <p class="text-black mb-0">Post-visit surveys and real-time feedback tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------- Seamless Patient Experience end --------------------------------->

                <!------------------------- Actionable Insights & Dashboard start --------------------------------->
                <div class="row my-5 custom-border">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                            <h3 class="text-color">Actionable Insights & Dashboard</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="row">
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Live Oversight</h5>
                                <p class="text-black mb-0">Real-time dashboards for hospital admins, doctors, and department heads</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Predictive Intelligence</h5>
                                <p class="text-black mb-0">Predictive analytics for patient trends, resource utilization, and care optimization.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Access Management</h5>
                                <p class="text-black mb-0">Role-based access ensures personalized insights across roles for super admin, admin, Doctors, Receptionist, Radiologist, Pharmacist etc.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Patient Flagging</h5>
                                <p class="text-black mb-0">Identifying patients at risk for readmission, enabling early interventions.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Custom Dashboards</h5>
                                <p class="text-black mb-0">Different dashboards for clinicians, administrators, finance teams, etc.</p>
                            </div>
                            <div class="col-6 card mb-4">
                                <h5 class="text-color my-2">Layered Analytics</h5>
                                <p class="text-black mb-0">multi-layered data access that caters to both strategic decisionmakers and frontline system users.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------- Actionable Insights & Dashboard end --------------------------------->
            </section>

            <!------------------------- Compliance & Global Standards start --------------------------------->
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                      <div class="col-md-8 text-center">
                        <h2>Compliance & Global Standards</h2>
                        <p class="lead text-muted mb-4">Built with trust and global reach in mind.</p>
                      </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                      <div class="col">
                        <div class="card shadow-sm h-100">
                          <div class="card-body">
                            <h5 class="card-title">ICD-10 & ICD-11 Ready</h5>
                            <p class="card-text text-muted">Seamlessly supports both ICD-10 and the upcoming ICD-11 coding systems.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm h-100">
                          <div class="card-body">
                            <h5 class="card-title">HIPAA & GDPR Compliant</h5>
                            <p class="card-text text-muted">Your patient data is protected with full adherence to HIPAA and GDPR regulations.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm h-100">
                          <div class="card-body">
                            <h5 class="card-title">HL7 / FHIR Interoperability</h5>
                            <p class="card-text text-muted">Adheres to HL7 and FHIR standards for smooth electronic health record (EHR) exchange.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm h-100">
                          <div class="card-body">
                            <h5 class="card-title">End-to-End Data Encryption</h5>
                            <p class="card-text text-muted">Ensuring the security of your data both at rest and during transit (TLS/SSL).</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm h-100">
                          <div class="card-body">
                            <h5 class="card-title">Multi-Language & Multi-Currency</h5>
                            <p class="card-text text-muted">Designed to support healthcare providers operating in diverse, international environments.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm h-100">
                          <div class="card-body">
                            <h5 class="card-title">Built for Global Healthcare</h5>
                            <p class="card-text text-muted">Specifically tailored for healthcare providers with multi-region operations.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </section>
            <!------------------------- Compliance & Global Standards end --------------------------------->

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
