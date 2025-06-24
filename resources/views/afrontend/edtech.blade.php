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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/EdTech.jpg') }});">
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

        <!-----------------------------   client swiper end ---------------------------->

        <div class="container">

            <!------------------------ e-learning overview start ----------------------->

            <section>
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">

                    <h3>  Overview of E-Learning Software Development </h3>
                </div>
                <div class="my-5">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-6">
                                 <img src="{{ asset('assets/inbox/E_Learning.png') }}" class="img-fluid" style="border-radius: 30px;"/>
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

                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="">Types of E-Learning Software Solutions</h3>
                            <p class="fw-light">The development services typically cover a wide range of solutions, depending on the client’s needs. These include:
                            </p>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-3 my-3">
                    <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Custom Learning Management Systems (LMS)</h5>
                                <div class="card-body p-0">
                            <p class="card-text mb-0">A custom Learning Management System (LMS) is a tailored e-learning platform that supports course creation, user management, progress tracking, and reporting. Unlike off-the-shelf options, it offers full control over features, branding, and workflows.</p>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Mobile Learning Applications</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">E-learning apps cater to mobile-first learners, offering features like offline access, push notifications, and gamification. Developed for Android and iOS, they enhance engagement and accessibility, supporting learning anytime, anywhere.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2"> Virtual Classrooms and Live Learning Tools</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">Modern e-learning platforms support live teaching through virtual classrooms with video conferencing, chat, screen sharing, whiteboards, and recordings. Built with WebRTC or integrated with tools like Zoom or Teams, they enable real-time, interactive learning.<p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Content Authoring and Management Tools</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">A content creation system lets educators design multimedia-rich courses with videos, audio, quizzes, and interactivity. Supporting standards like SCORM or xAPI, it ensures content is reusable, trackable, and compatible across various e-learning platforms.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Assessment, Testing, and Certification</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">E-learning platforms offer test and assessment tools for both formative and summative evaluations. They support auto-grading, performance tracking, feedback delivery, and certificate generation, enhancing learning outcomes and recognizing achievement.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Analytics and Reporting</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">Detailed analytics in e-learning platforms track course completion, engagement, time on tasks, and performance trends. Custom dashboards help administrators, instructors, and learners monitor progress and measure learning effectiveness.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Gamification and Interactive Learning</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">To boost engagement, e-learning platforms use gamification features like points, badges, leaderboards, and challenges. Interactive elements—such as drag-and-drop tasks, simulations, and decision trees—make learning more dynamic and motivating.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">AI and Personalization</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">AI enhances e-learning by recommending personalized learning paths, using chatbots for support and reminders, and applying machine learning to help instructors identify and assist struggling students early.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Third-Party Integration</h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">E-learning platforms often integrate with payment gateways, CRMs, ERPs, and collaboration tools to enable seamless operations, especially in enterprise or institutional settings, supporting monetization, data management, and streamlined user experiences.</p>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-3 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                <h5 class="card-title my-2">Security and Compliance </h5>
                                <div class="card-body p-0">
                                    <p class="card-text mb-0">E-learning platforms prioritize security and accessibility with role-based access, encryption, secure authentication, and compliance with GDPR, HIPAA, or FERPA. They also follow WCAG 2.1 standards to ensure usability for learners with disabilities.</p>
                                </div>
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

              <!------------------------------------ e-learning with ai start ----------------------------------------->
       <section>

        <div class="my-5">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-12 col-xl-5">
                    <div>
                        <h3> E-Learning by AI</h3>
                        {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                        <p class="mt-4"> At Inbox, we harness the power of Artificial Intelligence to transform e-learning into personalized, engaging experiences. Our AI-driven solutions adapt content, provide real-time feedback, and offer tailored learning paths for every learner. With features like predictive analytics, automated grading, and 24/7 AI support, we ensure smarter, more efficient learning journeys for individuals and organizations alike. </p>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-7">
                    <h4> <strong> AI in e-learning can be categorized into several types based on its functionality: </strong> </h4>
                    <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                   Personalized Learning:
                                </h5>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">AI analyzes learner data (performance, preferences, etc.) to recommend tailored learning paths, ensuring content meets individual needs and learning styles.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Intelligent Tutoring Systems:
                                </h5>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">These AI systems provide real-time, one-on-one support, offering feedback, explanations, and guidance similar to a human tutor.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                   AI-Powered Chatbots:
                                </h5>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Chatbots assist learners by answering questions, guiding through lessons, providing reminders, and offering instant feedback, improving learner engagement.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                   Adaptive Learning:
                                  </h5>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">AI adjusts the difficulty of tasks and content dynamically, providing personalized learning experiences by adapting to learners' strengths and weaknesses.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                   Automated Grading and Assessment:
                                  </h5>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">AI can automatically grade assignments, quizzes, and essays, providing quick feedback and reducing instructors' workload.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                   Predictive Analytics:
                                  </h5>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">AI tracks learner progress, identifying patterns and predicting performance trends, helping instructors detect at-risk students early and offer targeted interventions.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                   Natural Language Processing (NLP):
                                  </h5>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">NLP helps in enhancing language learning apps, speech recognition, and chatbots, improving learner interaction through language understanding and response generation.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                   Gamification and AI-Driven Engagement:
                                  </h5>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">AI designs dynamic challenges, interactive simulations, and games, promoting engagement through adaptive difficulty levels and rewards systems.</div>
                                </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
       </section>

        <!------------------------------------ e-learning with ai end ------------------------------------------->

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
