@extends('afrontend/layout')
@section('page_title', 'About Us | Inbox Infotech Pvt. Ltd.')
<?php $s1 = 'index,follow'; ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.'; ?>
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

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="my-5">
            <div class="container">

                <!------------------------------------ company overview start --------------------------->
                <div class="row mt-6">
                    <div class="col" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="text-center text-color fs-2 fs-md-3">Company Overview</h3>
                        <p class="text-center">Discover Inbox</p>
                        <hr class="short"
                            data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll" />
                    </div>

                    @foreach ($compover as $compovers)
                        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-6 my-2">
                                <h5 class="fw-medium ms-3 mb-0 text-color">{{ $compovers->title }}</h5>
                                <p style="padding-left:18px; font-size: 1.2rem;"><br><br>{{ $compovers->short_details }}</p>
                            </div>
                            <div class="col-lg-6 my-2">
                                <img src="{{ asset('storage/cmsimages') }}/{{ $compovers->main_image }}"
                                    class="img-fluid" />
                            </div>
                        </div>
                        {{-- <div class="col-12">
                          <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                            <h5 class="fw-medium ms-3 mb-0">{{$compovers->nav_title}}</h5><br>
                            <p class="column-lg-2 dropcap">{{$compovers->nav_description}}</p><br>
                            <p style="padding-left:18px">{!!$compovers->long_details!!}</p>
                          </div>
                        </div> --}}
                    @endforeach
                </div>

                <!------------------------------------------ company overview end ----------------------->

                <!------------------------------------------mission vision values start ----------------------->

                <section class="my-5 MisVisVal">
                    <div>
                        <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="text-color" style="font-size: 2.368593037rem"> Mission Vision & Values
                            </h3>
                            <hr class="short"
                                data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                                data-zanim-trigger="scroll" />
                        </div>
                        <div>
                            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-lg-4 my-2">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div class="" style="width: 30%;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/Mission.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class=" text-color"> Our Mission </h5>
                                            <p style="font-size: 1rem;"> At Inbox Infotech, we envision a
                                                world where technology goes beyond
                                                existence to enrich lives and foster
                                                community connections. We are
                                                passionate about creating solutions that
                                                simplify everyday tasks, spark creativity,
                                                and empower businesses to thrive. Each
                                                innovation is driven by our deep
                                                commitment to building a brighter, more
                                                inclusive future.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div class="" style="width: 30%;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/vision.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class=" text-color"> Our Vision </h5>
                                            <p style="font-size: 1rem;"> At the core of our vision is a future where
                                                technology makes life better and brings
                                                people closer together. We are dedicated to developing solutions that
                                                simplify daily
                                                tasks, ignite creativity, and enable businesses to flourish. Each innovation
                                                we create
                                                is fueled by our commitment to building a brighter, more inclusive future
                                                for everyone.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div class="" style="width: 30%;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/Values.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class=" text-color"> Our Values </h5>
                                            <p style="font-size: 1rem;"> We are a cohesive team that values dedication and
                                                excellence in every project
                                                we take on. Our commitment to delivering exceptional software development
                                                solutions is guided by our core values, which define our positive impact in
                                                the
                                                offshore software development landscape.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!------------------------------------------mission vision values  end ----------------------->

                <!------------------------------------------ core services start ----------------------->

                <section class="my-5 core-service">
                    <div>
                        <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class=" text-color" style="font-size: 2.368593037rem"> Core Services </h3>
                            <hr class="short"
                                data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                                data-zanim-trigger="scroll" />
                        </div>
                        <div>
                            <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-lg-6 my-2">
                                    <p class="lh-lg" style="font-size: 1.1rem;"> Empowering businesses with advanced
                                        websites and
                                        apps that redefine digital experiences and craft your
                                        digital future, we offer a full suite of services for digital
                                        transformation. From mobile app and web development
                                        to CRM & ERP solutions and cloud services, we keep
                                        your business ahead. Our UI/UX/CX design ensures
                                        seamless user experiences, while rigorous QA and
                                        testing guarantee top-quality performance. Additionally,
                                        our digital marketing strategies drive growth and
                                        expertise in API & integrations ensures seamless
                                        connectivity.
                                    </p>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <div class="row " data-aos="fade-up" data-aos-duration="1000">
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img
                                                        src="{{ asset('assets/img/icons/svg_icons/Mobile_App.svg') }}"class="img-fluid">
                                                </div>
                                                <p class="my-2"> Mobile App <br> Development </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/Emerging_Technologies.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> Emerging <br> Technology </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/Web_Development.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> Web <br> Development </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/AI_ML_Development.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> AI/ML <br> Development </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/Cloud_Services.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> Cloud <br> Services </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/UI_UX_CX.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> UI/UX/CX </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/Hire_Remote.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> Recruitment & <br> Staffing </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/CRM_ERP.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> CRM & ERP </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                                            <div class="core-service-name p-2 text-center" style="height: 100%;">
                                                <div style="width: 40%;margin: 5% auto;">
                                                    <img src="{{ asset('assets/img/icons/svg_icons/Cyber_Security.svg') }}"
                                                        class="img-fluid">
                                                </div>
                                                <p class="my-2"> Cyber <br> Security </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!------------------------------------------ core services   end ----------------------->


                <!------------------------------------------ Agile approach start ----------------------->

                <section class="my-5 agile-approach">
                    <div>
                        <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Agile Approach </h3>
                            <hr class="short"
                                data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                                data-zanim-trigger="scroll" />
                        </div>

                        <div>
                            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-lg-3 col-md-6 my-3">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div style="width: 25%; margin: 3% 0;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/Agile.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class="text-color"> Agile </h5>
                                            <p> We utilize the adaptive Agile methodology
                                                at its fullest. It focuses on continuously
                                                improving processes. We emphasize on
                                                the delivery of software at the end of
                                                sprints while we utilize the Agile
                                                methodology.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 my-3">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div style="width: 25%; margin: 3% 0;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/DevOps.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class="text-color"> DevOps </h5>
                                            <p> A design process wherein we break the
                                                project into phases such as:
                                                Requirements, Design, Implementation,
                                                Verification and Maintenance. We use it
                                                for projects requiring no/a smaller
                                                number of changes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 my-3">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div style="width: 25%; margin: 3% 0;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/Scrum.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class="text-color"> Scrum </h5>
                                            <p> A subset of agile that fits best for projects
                                                with rapidly changing requirements. We
                                                use it for its flexibility, and adaptability.
                                                We undertake fixed-length sprints while
                                                using Scrum for our clients.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 my-3">
                                    <div style="height: 100%;" class="card shadow p-3">
                                        <div style="width: 25%; margin: 3% 0;">
                                            <img src="{{ asset('assets/img/icons/svg_icons/Lean.svg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <h5 class="text-color"> Lean </h5>
                                            <p> We use it for creating more value with
                                                fewer resources. It emphasizes efficiency
                                                optimization by eliminating waste,
                                                advocating for a strong focus while we
                                                learn from the customer themself.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!------------------------------------------ Agile approach end ----------------------->

            </div>

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

            <div class="container">
                <!--------------------------------------------------  Industries we serve start ---------------------------->
                <section class="my-5 industry-serve">
                    <div>
                        <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class=" text-color" style="font-size: 2.368593037rem"> Industries We Serve
                            </h3>
                            <p class="lh-lg" style="font-size: 1.2rem;"> As a Software Development Company, we understand
                                every industry has its own set of challenges. We don't offer a one-size-fits-all solution.
                                Instead, we focus on the unique risks, opportunities, and best practices of your domain.
                                This allows us to craft agile and
                                resilient IT solutions that are specifically tailored to your business needs. Let's build
                                something strong together.
                            </p>
                            <hr class="short"
                                data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                                data-zanim-trigger="scroll" />
                        </div>
                        <div>
                            <div class="">
                                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto; ">
                                                <img src="{{ asset('assets/inbox/industry_serve/Retail.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Retail </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Telecom.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Telecom </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Manufacturing.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Manufacturing </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Professional_Service.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Legal Service </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Healthcare.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Healthcare </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Lending.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Lending </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style=" width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Logistics_Transpotation.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Logistics </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Engineering_Construction.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Enginnering </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Bank.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Bank </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Oil_Gas.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Oil & Gas </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Investment.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Investment </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6 my-3">
                                        <div style="height: 100%;" class="indserve pt-2">
                                            <div style="width: 50%; margin: 5% auto;">
                                                <img src="{{ asset('assets/inbox/industry_serve/Insurance.png') }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <p class="text-center"> Insurance </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> --}}
                                {{-- <div class="swiper-pagination"></div> --}}
                            </div>
                        </div>


                    </div>
                </section>
                <!--------------------------------------------------  Industries we serve end ---------------------------->

                <!------------------------------------------ msg from ceo start   end ----------------------->
                <section class="my-5">
                    @foreach ($ceomessage as $msgt)
                        <div class="card ">
                            <div class="row shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="col-lg-4 py-3 py-lg-0 position-relative"
                                    style="min-height:400px; background-position: top">
                                    <div class="bg-holder  rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0"
                                        style="background-image:url('{{ asset('storage/cmsimages') }}/{{ $msgt->main_image }}');">
                                    </div>
                                    <!--/.bg-holder-->
                                </div>

                                <div
                                    class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
                                    <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                        <h5 class="text-color" data-zanim-xs='{"delay":0}'>{{ $msgt->title }}</h5>
                                        <p class="my-4 lh-lg" style="font-size: 1.3rem;" data-zanim-xs='{"delay":0.1}'>
                                            {!! $msgt->long_details !!}</p>
                                        <h5 class="text-uppercase text-color mt-3 fw-medium mb-1"
                                            data-zanim-xs='{"delay":0.3}'>{{ $msgt->short_details }}</h5>
                                        <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>
                                            {{ $msgt->nav_title }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
                <!------------------------------------------ msg from ceo end ----------------------->


                <!---------------------------------------------  Awards start ---------------------------->
                <div class="row mt-6">
                    <div class="col" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="text-center text-color fs-2 fs-md-3">Awards & Achievements</h3>
                        <p class="text-center">We are proud to be the holders of eminent industry awards that reflect our
                            past
                            contribution and excellence throughout the field.</p>
                        <hr class="short"
                            data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll" />
                    </div>

                    <div class=" my-5">
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            @foreach ($award as $compovers)
                                <div class="col-lg-4 my-3">
                                    <div class="card shadow" style="height: 100%;">
                                        <div class="award-img mx-auto card-header">
                                            <img src="{{ asset('storage/media') }}/{{ $compovers->image }}"
                                                style="min-height:200px; background-position: top" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="text-color">{{ $compovers->title }}</h5>
                                            <p style="padding-left:15px;">{!! $compovers->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

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


    </main>
    <!-- ===============================================-->


@endsection
