@extends('afrontend/layout')
@section('page_title', 'Infrastructure Management')
<?php $s1 = 'index,follow'; ?>
<?php $s2 = 'A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization.'; ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara'; ?>
<?php $s4 = 'https://inboxtechs.com'; ?>
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/banner/Infrastructure_management.jpg') }});">
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
                                            Infrastructure Management </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                            Infrastructure management involves optimizing and monitoring IT resources like servers, networks, and storage to ensure performance, reduce downtime, and support business continuity.</p>
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
                    {{-- @foreach ($slider as $list)
      @endforeach --}}
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                </div>
            </div>
        </section>

        <!-----------------------------   client swiper start ---------------------------->
        <section>
            <div class="client">
                <div class="container">
                    <div class="swiper myClientSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($clientlogos as $clogolist)
                                <div class="swiper-slide">
                                    {{-- <div style="width: 100%;"> --}}
                                    <img class="img-fluid" src="{{ asset('storage/media/' . $clogolist->image) }}"
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

        <!-----------------------------   client swiper end ---------------------------->

        <div class="container">

            <!-------------------------- optimizing infrastructure start ---------------->
                <section>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    </div>
                    <div class="my-5">
                        <div class="row " data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-6">

                                <h3 > Optimizing IT Infrastructure</h3>
                                <p> At Inbox, we understand that a well-managed IT infrastructure is the backbone of any successful business. Our Infrastructure Management Services provide businesses with the tools and expertise they need to ensure their IT systems are running at peak performance. By taking a proactive approach to monitoring, optimizing, and securing your infrastructure, we help businesses reduce downtime, improve operational efficiency, and ensure long-term scalability.</p>
                                <p> Our team of certified experts works tirelessly to manage and maintain your entire IT environment, from servers and networks to data storage and security systems. We leverage the latest technologies and best practices to ensure your infrastructure not only meets current demands but is also prepared for future growth.
                                </p>
                                <p> With our tailored solutions, we handle everything from day-to-day monitoring to strategic planning, so you can focus on what matters most – growing your business. Whether you're looking to streamline your on-premise systems, transition to the cloud, or implement a hybrid solution, our managed services provide the flexibility, security, and reliability you need.</p>
                            </div>
                            <div class="col-lg-6">
                               <div class="my-3">
                                <h5> Our Commitment to Excellence</h5>
                                <p> A sleek icon or animation representing quality and reliability. </p>
                               </div>
                               <div class="my-3">
                                <h5> What Drives Us</h5>
                                <p> A dynamic illustration or graphic showing the passion behind your work or a highlight of key team achievements.</p>
                               </div>
                               <div class="my-3">
                                <h5> The Heart of Our Business</h5>
                                <p> Creative icons or images representing values like trust, innovation, and collaboration. </p>
                               </div>
                               <div class="my-3">
                                <h5> Building a Future Together</h5>
                                <p> A forward-looking visual or conceptual design showing growth and partnership, possibly with a futuristic touch.</p>
                               </div>

                            </div>

                        </div>
                    </div>
                </section>
        <!--------------------------  optimizing infrastructure end ---------------->

        <!-------------------------------- infrastructure management with ai start ----------------------->

        <section class="infra-manag-ai">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">

               <h3> Smarter Infrastructure with AI </h3>
               <p> AI is transforming the way infrastructure is managed. At Inbox, we leverage Artificial Intelligence to monitor, predict, and optimize your systems—automatically and intelligently.
                From reducing downtime to enhancing security, AI enables your infrastructure to self-learn, self-heal, and scale in real-time based on your business needs. </p>
            </div>

            <div class="my-5">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 my-3">
                        <div class="h-100 card shadow p-3">
                            <h5> Predictive Maintenance </h5>
                            <p> We use AI to analyze system behavior and performance trends, allowing us to detect early signs of potential failures. This helps reduce downtime, avoid costly repairs, and keep your infrastructure running smoothly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 card shadow p-3">
                            <h5> Intelligent Resource Optimization</h5>
                            <p> AI algorithms analyze workloads, usage patterns, and performance data in real-time. This enables automatic scaling of resources—so you get the performance you need without overpaying for unused capacity.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 card shadow p-3">
                            <h5>  Smart Security Monitoring </h5>
                            <p> AI continuously scans for threats and anomalies across your infrastructure. It helps detect suspicious behavior faster than traditional systems, enabling proactive threat mitigation and better data protection. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 card shadow p-3">
                            <h5> Automation of Repetitive Tasks</h5>
                            <p> From server provisioning to log analysis, AI automates routine tasks—freeing up your IT team to focus on strategic projects instead of day-to-day firefighting.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="h-100 card shadow p-3">
                            <h5>  Data-Driven Decision Making</h5>
                            <p> AI-powered dashboards offer real-time insights into system performance, user activity, and potential bottlenecks, helping you make smarter decisions faster. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------------------------- infrastructure management with ai end ----------------------->



        </div>

        <!-- ============================================-->
        <!-- <section> rquest a callback begin ============================-->
            <section class="bg-primary p-5 my-5">
            <div class="container-fluid">
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
        <!-- ============================================-->

        <div class="container">

         <!---------------  infrastructure services start --------------------->
         <section class="">


            <div class="my-5">

                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div>
                            <h3> Infrastructure Management Services </h3>
                            <p class="fw-light">Our Infrastructure Management Services are designed to ensure that your IT environment runs smoothly, securely, and efficiently. We provide comprehensive support for all core infrastructure components, allowing your business to focus on growth while we handle the backend operations
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <h4> <strong>  Key services include: </strong> </h4>
                        <div class="">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Network Management:
                                    </h5>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Network management involves the continuous monitoring, optimization, and security of an organization's network infrastructure to ensure high availability, efficient performance, and minimal downtime, while proactively identifying and resolving connectivity issues before they affect operations.</div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Server Management:
                                    </h5>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Server management includes regular maintenance, software patching, performance optimization, and troubleshooting of both physical and virtual servers to ensure reliability, security, and optimal operation of critical business applications and services across the IT environment.</div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Storage Management:
                                    </h5>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> Storage management focuses on providing reliable and scalable data storage solutions, including regular backups, disaster recovery planning, and capacity optimization to ensure data availability, integrity, and business continuity across all storage environments.</div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Security Operations:
                                      </h5>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body">Security operations involve proactive threat detection, real-time monitoring, firewall management, and access control enforcement. These services ensure your infrastructure is protected against cyber threats while maintaining compliance with industry regulations and minimizing security vulnerabilities.</div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Cloud Infrastructure Support:
                                      </h5>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body">Cloud infrastructure support focuses on the seamless integration and management of public, private, or hybrid cloud environments. It enables scalable, flexible solutions that optimize performance, reduce costs, and ensure secure, efficient cloud operations for your business.</div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseThree">
                                        24/7 Monitoring & Support:
                                      </h5>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body">Our 24/7 monitoring and support services provide continuous system oversight, ensuring any issues are detected and resolved before they affect your operations. This proactive approach minimizes downtime and keeps your infrastructure running smoothly at all times.</div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                                        IT Asset Management:
                                      </h5>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body"> IT asset management involves the tracking, monitoring, and management of both hardware and software assets. This ensures optimal utilization, streamlined procurement, and effective lifecycle management, helping to reduce costs and enhance operational efficiency.</div>
                                    </div>
                                  </div>
                              </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!---------------  infrastructure services end --------------------->


         <!------------------------------  things you know start ------------------------->
         <section class="my-5">
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

        </section>
        <!-- <section> things you know close ============================-->
        </div><!-- end of .container-->

        </div>

        </div>

    </main>
@endsection
