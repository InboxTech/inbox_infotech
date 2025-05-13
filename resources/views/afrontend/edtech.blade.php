@extends('afrontend/layout')
@section('page_title', 'EdTech')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/1214549853.jpg') }});">
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
                                            EdTech</p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                        EdTech, or educational technology, uses digital tools to enhance teaching, learning, and educational access across all levels.</p>
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

            <!------------------------ e-learning overview start ----------------------->

            <section>
                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>  Overview of E-Learning Software Development </h3>
                        </div>
                        <div class="col-lg-6">
                            <p> At Inbox, we believe technology is revolutionizing the way people teach, learn, and grow. Our e-learning software development services are designed to empower educators, trainers, and learning institutions by delivering powerful, interactive, and scalable digital learning solutions. </p>
                            <p> E-learning is no longer just a digital alternative to the classroom—it's a complete ecosystem that supports remote learning, lifelong skill development, corporate training, onboarding, and more. We help businesses, universities, schools, and EdTech startups build custom e-learning platforms that are secure, user-friendly, and aligned with their instructional goals.</p>
                            <p> Whether you're envisioning a full-scale Learning Management System (LMS), an engaging mobile learning app, or a virtual classroom with real-time collaboration features, our team brings the technical expertise and educational insight needed to bring your vision to life.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!------------------------ e-learning overview end ----------------------->


            <!---------------------------  our services start ------------------------->
              <section class="">
                <div class="row">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                            <h3 class="text-color">Types of E-Learning Software Solutions</h3>
                            <p class="fw-light">The development services typically cover a wide range of solutions, depending on the client’s needs. These include:
                            </p>

                            <div class="mt-5" >
                                 <img src="{{ asset('assets/inbox/E_Learning.png') }}" class="img-fluid" style="border-radius: 30px;"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Custom Learning Management Systems (LMS)</h5>
                            </div>
                            <p class="text-black mb-0">A Learning Management System is the backbone of most e-learning platforms. It allows administrators to create and organize courses, manage users, assign roles, track learner progress, and generate reports. Custom LMS development involves building a tailored system that fits a client’s specific instructional methods, branding, and administrative workflow. Unlike off-the-shelf LMSs like Moodle or Blackboard, custom solutions provide full control over features and user experience.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Mobile Learning Applications</h5>
                            </div>
                            <p class="text-black mb-0">With the increasing use of smartphones, e-learning apps are essential for mobile-first learners. These apps are typically developed for Android and iOS platforms and may support offline learning, push notifications for reminders or course updates, and gamification to increase user engagement.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2"> Virtual Classrooms and Live Learning Tools</h5>
                            </div>
                            <p class="text-black mb-0">Modern e-learning platforms often include live teaching capabilities. This involves integrating or developing virtual classroom features such as live video conferencing, screen sharing, chat, whiteboards, breakout rooms, and session recording. This can be built using technologies like WebRTC or integrated with third-party services like Zoom or Microsoft Teams.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Content Authoring and Management Tools</h5>
                            </div>
                            <p class="text-black mb-0">Another critical component is the content creation system. Educators or trainers need easy-to-use tools to create courses that include multimedia elements such as video, audio, quizzes, and interactive scenarios. Many systems are built to support e-learning content standards like SCORM or xAPI, ensuring that content is reusable and trackable.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Assessment, Testing, and Certification</h5>
                            </div>
                            <p class="text-black mb-0">E-learning platforms often include features for conducting tests and assessments, both formative (during learning) and summative (final evaluations). These systems can auto-grade quizzes, track performance, issue feedback, and generate certificates upon course completion.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Analytics and Reporting</h5>
                            </div>
                            <p class="text-black mb-0">To measure learning effectiveness, detailed analytics are crucial. These might include data on course completion rates, user engagement, time spent on tasks, and performance trends. Reporting dashboards can be built for administrators, instructors, and even learners to monitor progress.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Gamification and Interactive Learning</h5>
                            </div>
                            <p class="text-black mb-0">Engagement is a major challenge in online learning. Developers often build features like point systems, badges, leaderboards, and challenges to motivate learners. Interactive elements such as drag-and-drop activities, simulations, and decision trees also make learning more dynamic.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">AI and Personalization</h5>
                            </div>
                            <p class="text-black mb-0">Modern e-learning platforms can use AI to recommend personalized learning paths based on user performance and preferences. Chatbots can assist learners by answering questions, guiding through lessons, or providing reminders. Machine learning algorithms can also help instructors identify struggling students early.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Third-Party Integration</h5>
                            </div>
                            <p class="text-black mb-0">E-learning software often integrates with other tools like payment gateways (for monetized courses), Customer Relationship Management (CRM) systems, Enterprise Resource Planning (ERP) software, and collaboration tools. This allows for a seamless experience, especially in enterprise or institutional environments.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Security and Compliance </h5>
                            </div>
                            <p class="text-black mb-0">Educational data is sensitive, especially in systems involving minors or corporate knowledge. Security is baked into the software with role-based access, encryption, secure authentication, and compliance with standards such as GDPR, HIPAA, or FERPA. Accessibility is also critical, ensuring that users with disabilities can interact with the content per standards like WCAG 2.1.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!---------------------------  our services end ------------------------->







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
