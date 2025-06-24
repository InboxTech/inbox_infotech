@extends('afrontend/layout')
@section('page_title', 'DATA CENTER SOLUTIONS')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/services/banner/Data_Center_Solution.png') }});">
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
                                                DATA CENTER SOLUTIONS
                                            </span>
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
                                            Empowering Your Business with Secure, Scalable, and Reliable Data Center Solutions
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
                                        <img class="img-fluid" src="{{ asset('storage/media/clients/' . $clogolist->image) }}" alt="partnerco" data-zanim-xs="{}" />
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
                        <div class="mb-5" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="fs-2 fs-md-3 text-color mb-4">Our Data Center Solutions</h3>
                            <p class="lead text-muted mb-3">
                                At Inbox Infotech, we specialize in providing end-to-end data center solutions that enable businesses to
                                scale, optimize, and secure their IT infrastructure. Whether you are looking for colocation services,
                                cloud hosting, or disaster recovery, we offer flexible, cost effective, and secure solutions that meet
                                the diverse needs of your business.
                            </p>
                            <p class="lead text-muted mb-3">
                                Our data center services are built on cutting-edge technologies and best practices to deliver high
                                availability, robust security, and unmatched performance. We ensure that your critical data is
                                well-managed, always accessible, and protected from any potential disruptions.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 mb-5 ps-lg-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="">
                            <h5 class="text-color">Cloud Hosting & Hybrid Solutions</h5>
                            <p class="mb-3">
                                Custom cloud environments for businesses seeking flexibility and scalability. Scalable solutions that can grow with your business.
                            </p>
                        </div>
                        <div class="">
                            <h5 class="text-color"> Managed Services</h5>
                            <p class="mb-3">
                                Custom cloud environments for businesses seeking flexibility and scalability. Scalable solutions that can grow with your business.
                            </p>
                        </div>
                        <div class="">
                            <h5 class="text-color"> Security & Compliance </h5>
                            <p class="mb-3">
                                Implementation of multi-layer security protocols, including firewalls, encryption, and access controls. Adherence to key compliance standards (ISO 27001, GDPR, HIPAA, etc.).
                            </p>
                        </div>
                        <div class="">
                            <h5 class="text-color"> Network Infrastructure </h5>
                            <p class="mb-3">
                                 High-performance network solutions with low latency and high availability.Scalable and customizable networking options to support your growing business.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-----------------------------   About _______ end ---------------------------->

            <!----------------------------- Cybersecurity Services start ---------------------------->

            <section class="" style="padding-top:50px; padding-bottom:50px;">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Solutions for Critical AI Barriers </h6>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Where to Strategically Integrate AI</h5>
                                <p class="card-text">
                                    Smart data investment is the cornerstone of tackling your most pressing business challenges. Inbox Infotech provides the strategic guidance to pinpoint optimal AI and ML integration points, effectively mitigating implementation risks through robust data architectures and seamless migration strategies.
                                </p>
                                <p class="card-text">
                                    We partner with you to define clear AI and ML objectives and translate them into tangible, impactful solutions, supporting your growth at every stage of AI and ML maturity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title mb-3">How to Capitalize on AI's Potential</h5>
                                <p class="card-text">
                                    Unlock significant efficiency gains by automating repetitive tasks and accelerating predictive analysis to uncover valuable data correlations. Inbox Infotech's expertise ensures a positive return on your data, AI, and ML investments by seamlessly operationalizing intelligent models across your organization.
                                </p>
                                <p class="card-text">
                                    Leverage our proven track record in enterprise automation and business intelligence to rapidly advance your AI and ML maturity throughout your data ecosystems.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Preparing Your Data for AI Success</h5>
                                <p class="card-text">
                                    Build a foundation of accountability and trust in your AI and ML initiatives by implementing reliable strategies for structuring diverse data sources. Proactively identify data anomalies with AI-powered vulnerability tracking.
                                </p>
                                <p class="card-text">
                                    Through responsible data mining, cleansing, warehousing, and structured governance, we enable your data to scale and meet the precise requirements of sophisticated AI algorithms. Our commitment to statistical analysis and data visualization ensures adherence to the highest data quality standards.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Identifying High-Impact AI Use Cases</h5>
                                <p class="card-text">
                                    Inbox Infotech empowers you to effectively classify your platform architecture and optimize AI model development. We also help define the scope of AI integration and pinpoint areas where AI-driven capabilities can deliver the greatest impact.
                                </p>
                                <p class="card-text">
                                    Our core objective is to help you solve critical business challenges through the strategic application of data and the seamless integration of intelligence into your enterprise solutions. We provide the clarity needed to identify the most promising business use cases for AI and ML by streamlining your data landscape.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!----------------------------- Cybersecurity Services end ---------------------------->

            <!-----------------------------   Cybersecurity AI start   ---------------------------->
            <section class="cybersecurity-ai">
                <div class="row">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                            <h3 class="text-color">Scaling Your AI and ML Initiatives for Long-Term Value</h3>
                            <p class="fw-light">Beyond initial implementation, achieving sustained value from AI and ML requires a strategic approach to scaling. Radixweb partners with you to develop a robust roadmap for expanding your AI capabilities across different business functions.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Building Scalable Infrastructure</h5>
                            </div>
                            <p class="text-black mb-0">Designing and implementing data and technology architectures that can accommodate growing data volumes and increasingly complex AI models.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Establishing Center of Excellence (CoE)</h5>
                            </div>
                            <p class="text-black mb-0">Facilitating the creation of internal teams with the expertise and governance structures necessary to drive AI adoption and innovation throughout the organization.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Continuous Model Monitoring and Improvement</h5>
                            </div>
                            <p class="text-black mb-0">Implementing systems to track the performance of deployed AI models, identify drift, and implement necessary retraining and updates to ensure ongoing accuracy and effectiveness.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Fostering a Data-Driven Culture</h5>
                            </div>
                            <p class="text-black mb-0">Empowering your teams with the skills and understanding to leverage AI insights in their daily decision-making processes.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Ensuring Ethical and Responsible AI Deployment</h5>
                            </div>
                            <p class="text-black mb-0">Establishing frameworks and guidelines to address potential biases, ensure fairness, and maintain transparency in your AI applications.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-xl-5">
                        <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                            <h3 class="text-color">Navigating the Evolving AI and ML Landscape</h3>
                            <p class="fw-light">The field of Artificial Intelligence and Machine Learning is constantly evolving, with new technologies and methodologies emerging rapidly. Radixweb stays at the forefront of these advancements.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-7">
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Evaluate and Adopt Emerging Technologies</h5>
                            </div>
                            <p class="text-black mb-0">Identifying and assessing the potential of new AI and ML tools, frameworks, and platforms to enhance your business outcomes.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Staying Ahead of Industry Best Practices</h5>
                            </div>
                            <p class="text-black mb-0">Ensuring your AI initiatives align with the latest standards and guidelines for development, deployment, and governance.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Addressing Regulatory Compliance</h5>
                            </div>
                            <p class="text-black mb-0">Navigating the evolving landscape of data privacy and AI regulations to ensure your solutions remain compliant.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Facilitating Innovation and Experimentation</h5>
                            </div>
                            <p class="text-black mb-0">Creating environments and processes that encourage the exploration of new AI applications and the development of innovative solutions to emerging business challenges.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Bridging the Gap Between Research and Application</h5>
                            </div>
                            <p class="text-black mb-0">Translating cutting-edge AI research into practical and impactful business solutions.</p>
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
