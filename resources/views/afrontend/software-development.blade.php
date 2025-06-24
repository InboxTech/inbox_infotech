@extends('afrontend/layout')
@section('page_title', 'Software Development')
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
                        <div class="bg-holder">
                            <img src="{{ asset('storage/media/Software_Developer.png') }}" alt="software development" class="lcp-image" fetchpriority="high"  width="1920" height="1080" loading="lazy"/>
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color  banner-title fade-in-up" >
                                            Software Development </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
                                            Being a well reputed web app development company, we hold a specialization in designing, building,testing and deploying
                                            web-based applications, tailored to propel businesses forward.</p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="button-group fade-in-up">
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
                    {{-- @foreach ($slider as $list)
      @endforeach --}}
                </div>
                <!-- <div class="swiper-nav">
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
                </div> -->
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
                                    <img class="w-100 h-100" src="{{ asset('storage/media/' . $clogolist->image) }}"
                                        alt="partnerco" data-zanim-xs="{}" loading="lazy"/>
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
            <section>
                <div class="text-center my-5" data-aos="fade-up" data-aos-duration="1000">
                    <h2> Comprehensive End-to-End Web Development Services </h2>
                    <p> Unlock your digital potential with our end-to-end web development services, tailored to deliver
                        high-performance, scalable, and secure web solutions. From initial strategy and design to
                        development,
                        deployment, and ongoing support, we handle every stage of the web development lifecycle. Whether
                        you're
                        launching a new site or modernizing an existing one, our expert team ensures a seamless experience
                        with a
                        strong focus on user engagement, functionality, and business growth. </p>
                </div>
                <div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00256d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/Custom_Web_App_Development.png') }}" class="w-100 h-100" alt="custom web app development" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Custom Web App Development </h3>
                                    </div>
                                </div>

                                <div class="my-2">
                                    <p>We build tailored web applications designed to meet your unique business
                                        needs—scalable, secure, and
                                        optimized for performance. From concept to launch, our team delivers fully
                                        customized solutions that
                                        enhance user experience and drive results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/Enterprise_Web_Application.png') }}"
                                            class="w-100 h-100" alt="enterprise web application" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2">Enterprise Web Application </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We develop robust, scalable, and secure enterprise web applications that streamline operations, support complex workflows, and integrate seamlessly with your existing systems—empowering your business to operate more efficiently at scale. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/UI_UX_Moder.png') }}" class="w-100 h-100" alt="UI/UX Modernization" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> UI/UX Modernization </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We revamp outdated interfaces with modern, intuitive, and user-centered designs that
                                        enhance
                                        usability, improve engagement, and align with current design standards—giving your
                                        application a
                                        fresh, competitive edge. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/Fullstack_Development_Services.png') }}" class="w-100 h-100" alt="Fullstack Development Services" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Fullstack Development Services </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We offer end-to-end full-stack development services, combining front-end and
                                        back-end expertise to
                                        build dynamic, responsive, and scalable web applications—ensuring seamless
                                        performance across the
                                        entire technology stack. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/Single_Page_Applications.png') }}" class="w-100 h-100" alt="Single Page Applications" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Single Page Applications
                                            ( SPA)</h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We develop fast, interactive Single Page Applications (SPAs) that deliver seamless
                                        user experiences
                                        by dynamically loading content without full page reloads—ideal for modern,
                                        high-performance web
                                        solutions. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/progressive_web_app_development.png') }}" class="w-100 h-100" alt="Progressive Web App Development" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Progressive Web App Development(PWA) </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We create Progressive Web Apps that combine the best of web and mobile—offering
                                        fast, reliable, and
                                        engaging user experiences with offline access, push notifications, and native-like
                                        performance across
                                        all devices. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/content_management_system.png') }}" class="w-100 h-100" alt="Content Management System" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Content Management System(CMS) </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We develop flexible and user-friendly CMS solutions that empower you to easily
                                        create, manage, and
                                        update website content—streamlining workflows and reducing reliance on technical
                                        support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/Integration_Upgradation_Migration.png') }}" class="w-100 h-100" alt="Integration, Upgradation & Migration" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Integration, Upgradation & Migration </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We provide seamless integration with third-party systems, upgrade outdated
                                        technologies, and migrate
                                        legacy applications to modern platforms—ensuring improved performance, security, and
                                        scalability with
                                        minimal disruption. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/img/icons/svg_icons/website_maintenance_support.png') }}" class="w-100 h-100" alt="Website Support & Maintenance" loading="lazy">
                                    </div>
                                    <div class="col-9">
                                        <h3 class="fs-2"> Website Support & Maintenance </h3>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p> We offer ongoing website support and maintenance services to ensure your site runs
                                        smoothly, remains
                                        secure, and stays up-to-date with regular updates, performance monitoring, and quick
                                        issue resolution.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!------------------------------------- web development process start  ----------------------------------->

            <section class="web-dev-process">
                <div class="container">
                    <div class="text-center my-5" data-aos="fade-up" data-aos-duration="1000">
                        <h2> Web Development Process </h2>
                        <p> We collaborate with the client to understand their business goals, target audience, and required
                            website
                            features—such as services, contact forms, team profiles, and branding. This helps us define the
                            project
                            scope and ensure the site meets both functional and marketing needs.
                        </p>
                    </div>

                    <div class="my-5 p-5">

                        <div class="process-after">
                            <div class="web-process web-process-left shadow  my-4">
                                <div class="web-process-no" style=""> 1 </div>
                                <div>
                                    <h5> Discovery & Requirement Gathering </h5>
                                    <p> We gather information about the website's content, target audience, and content
                                        needs to define the
                                        website's structure, features, and overall direction.
                                    <p>
                                </div>
                                <div class="left-container-arrow"></div>
                            </div>

                            <div class="web-process web-process-right shadow my-4 ">
                                <div class="web-process-no"> 2 </div>
                                <div>
                                    <h5> Planning & Proposal </h5>
                                    <p> We outline the website structure, features, and technology stack, then provide a
                                        detailed proposal
                                        with project scope, timeline, and cost for approval. </p>
                                </div>
                                <div class="right-container-arrow"></div>

                            </div>

                            <div class=" web-process web-process-left shadow  my-4 ">
                                <div class="web-process-no"> 3 </div>
                                <div>
                                    <h5> Design (UI/UX) </h5>
                                    <p> We create user-friendly, responsive designs that reflect the company’s brand,
                                        including layout
                                        mockups and visual elements to ensure an engaging user experience. </p>
                                </div>
                                <div class="left-container-arrow"></div>

                            </div>

                            <div class="web-process web-process-right shadow my-4 ">
                                <div class="web-process-no"> 4 </div>
                                <div>
                                    <h5> Development </h5>
                                    <p> We build the website by transforming designs into functional code, incorporating
                                        features like
                                        content management systems (CMS), forms, and databases, ensuring optimal performance
                                        and security.</p>
                                </div>
                                <div class="right-container-arrow"></div>

                            </div>

                            <div class="web-process web-process-left shadow  my-4">
                                <div class="web-process-no"> 5 </div>
                                <div>
                                    <h5> Testing & Quality Assurance</h5>
                                    <p> We thoroughly test the website across different devices and browsers to ensure all
                                        features work
                                        correctly, perform efficiently, and meet security standards before launch. </p>
                                </div>
                                <div class="left-container-arrow"></div>

                            </div>

                            <div class="web-process web-process-right shadow  my-4 ">
                                <div class="web-process-no"> 6 </div>
                                <div>
                                    <h5> Deployment </h5>
                                    <p> We prepare the website for launch by setting up hosting, configuring the domain, and
                                        transferring
                                        files to the live server, ensuring everything is optimized and functioning as
                                        expected. </p>
                                </div>
                                <div class="right-container-arrow"></div>

                            </div>

                            <div class="web-process web-process-left shadow  my-4">
                                <div class="web-process-no"> 7 </div>
                                <div>
                                    <h5>Training & Handover </h5>
                                    <p> We provide training on how to manage and update the website, along with
                                        documentation, ensuring the
                                        client is equipped to handle day-to-day operations.
                                    </p>
                                </div>
                                <div class="left-container-arrow"></div>

                            </div>

                            <div class="web-process web-process-right shadow my-4 ">
                                <div class="web-process-no" style=""> 8 </div>
                                <div>
                                    <h5> Maintenance & Support </h5>
                                    <p> We offer ongoing support to ensure the website runs smoothly, providing updates,
                                        security patches,
                                        performance monitoring, and troubleshooting as needed. </p>
                                </div>
                                <div class="right-container-arrow"></div>

                            </div>


                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!------------------------------------- web development process end  ----------------------------------->


        <!-- ============================================-->
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
                                              <label for="country_code" style="position: absolute;
                                                    width: 1px;
                                                    height: 1px;
                                                    padding: 0;
                                                    margin: -1px;
                                                    overflow: hidden;
                                                    clip: rect(0, 0, 0, 0);
                                                    white-space: nowrap;
                                                    border: 0;">Country Code</label>
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
            <!-- ============================================-->
            <!-- <section> Our Tech arsenal  begin ============================-->
            <!-- ============================================-->
            <section class="my-5 tech-arsenal">
                <div class="container">
                    <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                        <h2> Our Tech Arsenal</h2>
                        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll" />
                    </div>
                    <div class="my-5">
                        {{-- <div class="row justify-content-between">
        <div class="col-lg-4 my-2"> --}}
                        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up"
                            data-aos-duration="1000">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="backend-tab" data-bs-toggle="tab"
                                    data-bs-target="#backend" role="tab" aria-controls="backend"
                                    aria-selected="false">Backend </a>
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
                                <a class="nav-link" id="monitoring-tab" data-bs-toggle="tab"
                                    data-bs-target="#monitoring" role="tab" aria-controls="monitoring"
                                    aria-selected="false"> Monitoring </a>
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
                                                <img src="{{ asset('assets/inbox/net.png') }}" class="w-100 h-100" alt="dotnet" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> .Net </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/php.png') }}" class="w-100 h-100" alt="php" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> PHP </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Laravel.png') }}" class="w-100 h-100" alt="laravel" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Laravel </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/node.js.png') }}" class="w-100 h-100" alt="node.js" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Node.js</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/python.png') }}" class="w-100 h-100" alt="python" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Python </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/java.png') }}" class="w-100 h-100" alt="java" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Java </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/rubyOnRail.png') }}" class="w-100 h-100" alt="rubyOnRail" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Ruby On Rails </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/django.png') }}" class="w-100 h-100" alt="django" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Django </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/express.js.png') }}" class="w-100 h-100" alt="express.js" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Express.js </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/flask.png') }}" class="w-100 h-100" alt="flask" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Flask </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/springboot.png') }}" class="w-100 h-100" alt="springboot" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Spring boot </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/unity3D.png') }}" class="w-100 h-100" alt="unity" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Unity </p>
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
                                                <img src="{{ asset('assets/inbox/angular.js.png') }}" class="w-100 h-100">
                                            </div>
                                            <p class="fw-medium"> Angular.js </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/react.js.png') }}" class="w-100 h-100" alt="react.js" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> React.js </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/bootstrap.png') }}" class="w-100 h-100" alt="bootstrap" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Bootstrap </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/jqery.png') }}" class="w-100 h-100" alt="jQuery" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> jQuery </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/vue.js.png') }}" class="w-100 h-100" alt="vue.js" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Vue.js </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/ember.js.png') }}" class="w-100 h-100" alt="ember.js" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Ember.js </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/bbackbone.js.png') }}" class="w-100 h-100" alt="backbone.js" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Backbone.js </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/flutter.png') }}" class="w-100 h-100" alt="flutter" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Flutter </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/unity3D.png') }}" class="w-100 h-100" alt="unity3D" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Unity 3D </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/shopify.png') }}" class="w-100 h-100" alt="shopify" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Shopify </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/wordpress.png') }}" class="w-100 h-100" alt="wordpress" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> WordPress </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/magento.png') }}" class="w-100 h-100" alt="magento" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Magento </p>
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
                                                <img src="{{ asset('assets/inbox/GIT-HUB.png') }}" class="w-100 h-100" alt="github" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Github Copilot </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/TABNINE-1.png') }}" class="w-100 h-100" alt="tabnine" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Tabnine </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/CHATGPT.png') }}" class="w-100 h-100" alt="chatgpt" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> ChatGPT </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/tensorflow-1.png') }}" class="w-100 h-100" alt="tensorflow" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Tensorflow </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/openaicodex.png') }}" class="w-100 h-100" alt="openaicodex" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> OpenAI Codex </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/otter.ai_.png') }}" class="w-100 h-100" alt="otter.ai" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Otter.ai </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/codewhisperer.png') }}" class="w-100 h-100" alt="codewhisperer" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> CodeWhisperer</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/hugging-face.png') }}" class="w-100 h-100" alt="hugging-face" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Hugging Face </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/blackbox ai.png') }}" class="w-100 h-100" alt="blackbox ai" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Blackbox AI </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/cursor ai.png') }}" class="w-100 h-100" alt="cursor ai" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Cursor AI </p>
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
                                                <img src="{{ asset('assets/inbox/mysql.png') }}" class="w-100 h-100" alt="mysql" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> MySQL </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/mongodb.png') }}" class="w-100 h-100" alt="mongodb" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> MongoDB </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/postgresql.png') }}" class="w-100 h-100" alt="postgresql" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> PostgreySQL </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/snowflake.png') }}" class="w-100 h-100" alt="snowflake" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Snowflake </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/redshift.png') }}" class="w-100 h-100" alt="redshift" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Redshift </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/azure-sql-synapse.png') }}" class="w-100 h-100" alt="azure-sql-synapse" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Azure SQL Synapse </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/splunk.png') }}" class="w-100 h-100" alt="splunk" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Splunk </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/talend.png') }}" class="w-100 h-100" alt="talend" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Talend </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/fivetran.png') }}" class="w-100 h-100" alt="fivetran" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Fivetran </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/oracle.png') }}" class="w-100 h-100" alt="oracle" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Oracle </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/mariaDB.png') }}" class="w-100 h-100" alt="mariaDB" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> MariaDB </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/sql_server.png') }}" class="w-100 h-100" alt="sql_server" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> SQL Server </p>
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
                                                <img src="{{ asset('assets/inbox/linux.png') }}" class="w-100 h-100" alt="linux" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Linux </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/ubantoo.png') }}" class="w-100 h-100" alt="ubantoo" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Ubantoo </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/windows.png') }}" class="w-100 h-100" alt="windows" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Windows </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/AWS.png') }}" class="w-100 h-100" alt="AWS" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> AWS </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/google-cloud.png') }}" class="w-100 h-100" alt="Google Cloud" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Google Cloud </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/azure-1.png') }}" class="w-100 h-100" alt="Azure" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Azure </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/apache-1.png') }}" class="w-100 h-100" alt="Apache" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Apache </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/nginx.png') }}" class="w-100 h-100" alt="Nginx" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Nginx </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/cloudflare.png') }}" class="w-100 h-100" alt="Cloudflare" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Cloudflare </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/fastly.png') }}" class="w-100 h-100" alt="Fastly" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Fastly </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/digital ocean.png') }}" class="w-100 h-100" alt="Digital Ocean" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Digital Ocean </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/euris.png') }}" class="w-100 h-100" alt="Euris" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Euris </p>
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
                                                <img src="{{ asset('assets/inbox/Kubernetes.png') }}" class="w-100 h-100" alt="Kubernetes" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Kubernetes </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/ECS.png') }}" class="w-100 h-100" alt="ECS" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> ECS </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/EC2.png') }}" class="w-100 h-100" alt="EC2" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> EC2 </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Lambda.png') }}" class="w-100 h-100" alt="Lambda" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Lambda </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/CloudFormation.png') }}" class="w-100 h-100" alt="CloudFormation" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> CloudFormation </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Terraform.png') }}" class="w-100 h-100" alt="Terraform" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Terraform </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Jenkins.png') }}" class="w-100 h-100" alt="Jenkins" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Jenkins </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Bitbucket.png') }}" class="w-100 h-100" alt="Bitbucket" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Bitbucket </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/github.png') }}" class="w-100 h-100" alt="github" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> GitHub </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Go.png') }}" class="w-100 h-100" alt="Go" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Go </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/SaltStack.png') }}" class="w-100 h-100" alt="SaltStack" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> SaltStack </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/Docker.png') }}" class="w-100 h-100" alt="Docker" loading="lazy">
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
                                                <img src="{{ asset('assets/inbox/new-relic.png') }}" class="w-100 h-100" alt="new-relic" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> New Relic </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/appdynamic-logo-1.png') }}" class="w-100 h-100" alt="appdynamic" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> AppDynamics </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/dynatrace-1.png') }}" class="w-100 h-100" alt="dynatrace" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Dynatrace </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/datadog.png') }}" class="w-100 h-100" alt="datadog" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Datadog </p>
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
                                                <img src="{{ asset('assets/inbox/segement.png') }}" class="w-100 h-100" alt="segment" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Segment </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/google-apigee.png') }}" class="w-100 h-100" alt="google-apigee" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Google Apigee </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/mulesoft.png') }}" class="w-100 h-100" alt="mulesoft" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Mulesoft </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/tealium.png') }}" class="w-100 h-100" alt="tealium" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Tealium </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/zapier.png') }}" class="w-100 h-100" alt="zapier" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Zapier </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/sonarqube.png') }}" class="w-100 h-100" alt="sonarqube" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> SonarQube </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/twilio.png') }}" class="w-100 h-100" alt="twilio" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Twilio </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/sendgrid.png') }}" class="w-100 h-100" alt="sendgrid" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Sendgrid </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/stripe.png') }}" class="w-100 h-100" alt="stripe" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Stripe </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/paypal.png') }}" class="w-100 h-100" alt="paypal" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Paypal </p>
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
                                                <img src="{{ asset('assets/inbox/BUSINESS-INTELIGENCE-POWERBI.png') }}" class="w-100 h-100" alt="powerbi" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Power BI </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/sap-business-objects.png') }}" class="w-100 h-100" alt="sap" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> SAP </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/tableau-1.png') }}" class="w-100 h-100" alt="tableau" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Tableau </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/looker-1.png') }}" class="w-100 h-100" alt="looker" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Looker </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/qlik-1.png') }}" class="w-100 h-100" alt="qlik" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Qlik </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/heap-1.png') }}" class="w-100 h-100" alt="heap" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Heap </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/google-analytics.png') }}" class="w-100 h-100" alt="google-analytics" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Google Analytics </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/amplitude-1.png') }}" class="w-100 h-100" alt="amplitude" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Amplitude </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/mixpanel-1.png') }}" class="w-100 h-100" alt="mixpanel" loading="lazy">
                                            </div>
                                            <p class="fw-medium"> Mixpanel </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                                        <div class="tech-logo p-2 text-center" style="height: 100%;">
                                            <div style="width: 40%;margin: 3% auto;">
                                                <img src="{{ asset('assets/inbox/countly.png') }}" class="w-100 h-100" alt="countly" loading="lazy">
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


        <!------------------------------------------ s/w devlopment methodology start ----------------------->

        <section class="my-5 agile-approach">
            <div class="container">
                <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <h2> Software Development Methodology </h2>
                    <p> Our company specializes in software development services designed to meet the unique needs of modern businesses. From custom applications to enterprise solutions, we deliver reliable, scalable, and secure software tailored to support growth and innovation. Using proven methodologies and the latest technologies, our development team ensures efficient project execution, timely delivery, and long-term support.
                    </p>
                    <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>

                <div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-3 col-md-6 my-3">
                            <div style="height: 100%;" class="card shadow p-3">
                                <div style="width: 25%; margin: 3% 0;">
                                    <img src="{{ asset('assets/img/icons/svg_icons/Agile.svg') }}" class="w-100 h-100" alt="Agile" loading="lazy">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="text-color fs-2"> Agile <br> Development </h3>
                                    <p> We utilize Agile development to deliver flexible, customer-driven solutions through
                                        iterative cycles, ensuring continuous feedback, faster delivery, and the ability to
                                        adapt to changing needs. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 my-3">
                            <div style="height: 100%;" class="card shadow p-3">
                                <div style="width: 25%; margin: 3% 0;">
                                    <img src="{{ asset('assets/img/icons/svg_icons/waterfall_developemnt.png') }}" class="w-100 h-100" alt="Waterfall" loading="lazy">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="text-color fs-2"> Waterfall <br> Development</h3>
                                    <p> We follow the Waterfall development model for projects with clear requirements,
                                        ensuring structured, step-by-step execution from planning to deployment with
                                        predictable outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-3">
                            <div style="height: 100%;" class="card shadow p-3">
                                <div style="width: 25%; margin: 3% 0;">
                                    <img src="{{ asset('assets/img/icons/svg_icons/Rapid_developement.png') }}" class="w-100 h-100" alt="Rapid" loading="lazy">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="text-color fs-2"> Rapid <br> Development </h3>
                                    <p> We use Rapid Application Development to quickly build and refine software through
                                        prototyping and user feedback, ensuring faster delivery and improved client
                                        satisfaction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-3">
                            <div style="height: 100%;" class="card shadow p-3">
                                <div style="width: 25%; margin: 3% 0;">
                                    <img src="{{ asset('assets/img/icons/svg_icons/DevOps.svg') }}" class="w-100 h-100" alt="DevOps" loading="lazy">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="text-color fs-2"> DevOps <br> Development </h3>
                                    <p> We implement DevOps practices to streamline development and operations, ensuring
                                        faster delivery, continuous integration, and improved collaboration for reliable,
                                        high-quality software solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------------------------------------------ s/w devlopment methodology end ----------------------->

  <!------------------------------  things you know start ------------------------->
  <section class="my-5">
    <div class="container">
        <div class="text-center">
            <h2>Things You Get</h2>
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
                                            alt="Product_Consulting" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                            alt="customized-solution" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                            alt="scalable-solution" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
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
                                            alt="user-friendly" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                            alt="data-security" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                            alt="dedicated-support" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
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

        </div>

        </div>
    </main>
@endsection
