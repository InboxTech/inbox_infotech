@extends('afrontend/layout')
@section('page_title', 'IOT')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/services/banner/IOT.png') }});">
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
                                            IOT
                                            Development </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                            We provide end-to-end IoT solutions, integrating devices, cloud, and apps to enable smarter, industry-specific decisions.</p>
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

            <!--------------------------  iot app development to unlock  start ---------------->
                <section>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h3 > IoT Application Development Services To Unlock Data-Driven Growth</h3>
                    </div>
                    <div class="my-5">
                        <div class="row " data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-6">
                                <p> Accelerate your digital transformation journey with our end-to-end IoT Application Development Services designed to unlock data-driven growth and operational excellence. At [Your Company Name], we help businesses harness the power of connected devices, real-time data, and intelligent automation to gain deeper insights, optimize processes, and drive innovation across the enterprise.</p>
                                <p> Our IoT solutions go beyond device connectivity—we create scalable, secure, and cloud-integrated IoT applications that turn raw data into actionable intelligence. Whether you need a custom IoT platform, smart device integration, or analytics-driven decision-making tools, we provide comprehensive services from architecture and development to deployment and support. </p>
                                <p> With deep domain expertise across industries such as manufacturing, logistics, healthcare, agriculture, smart cities, and energy, we build tailored solutions that solve real business challenges. </p>
                            </div>
                            <div class="col-lg-6">
                                <p> Our team leverages cutting-edge technologies including edge computing, AI/ML, and cloud-native infrastructure to enable predictive maintenance, remote monitoring, and intelligent automation. </p>
                                <p> <strong> What we Offer: </strong>  </p>
                                <ul class="">
                                    <li> Custom IoT application design & development </li>
                                    <li> Real-time data collection, processing & analytics </li>
                                    <li> Integration with cloud platforms (AWS, Azure, Google Cloud) </li>
                                    <li> Sensor & device connectivity and management </li>
                                    <li> Secure, scalable architecture with end-to-end encryption </li>
                                    <li> Dashboard & visualization tools for actionable insights </li>
                                    <li> Ongoing support, maintenance & scalability planning </li>
                                </ul>
                                <p> By partnering with Inbox, you gain a technology partner committed to building future-ready IoT ecosystems that unlock new revenue streams, reduce operational costs, and deliver measurable business outcomes.</p>
                            </div>
                        </div>
                    </div>
                </section>
        <!--------------------------  iot app development to unlock  end ---------------->

        <!--------------------------------------- iot services start --------------------------->

        <section class="iot-services">
           <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
               <h3 > Our IoT Development Services </h3>
               <p> At Inbox, we specialize in delivering innovative Internet of Things (IoT) solutions that drive digital transformation. Our team of experts builds connected ecosystems that enable smarter decision-making, enhanced automation, and real-time insights. From designing custom IoT devices to developing scalable cloud platforms, we provide end-to-end solutions tailored to your business needs. Whether you're looking to optimize operations, enhance customer experiences, or improve data-driven strategies, we have the expertise to bring your IoT vision to life. </p>
           </div>

           <div class="my-5">
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-xl-3 nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link border-bottom py-3 active" id="v-pills-iotconsult-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iotconsult" type="button" role="tab" aria-controls="v-pills-iotconsult" aria-selected="true"> IoT Consulting Services </a>

                    <a class="nav-link border-bottom py-3" id="v-pills-iotappdev-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iotappdev" type="button" role="tab" aria-controls="v-pills-iotappdev" aria-selected="false">IoT Application Development</a>

                    <a class="nav-link border-bottom py-3" id="v-pills-iotwearappdev-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iotwearappdev" type="button" role="tab" aria-controls="v-pills-iotwearappdev" aria-selected="false"> IoT Wearable App Development </a>

                    <a class="nav-link border-bottom py-3" id="v-pills-iotcloud-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iotcloud" type="button" role="tab" aria-controls="v-pills-iotcloud" aria-selected="false"> IoT Cloud Development </a>

                    <a class="nav-link border-bottom py-3" id="v-pills-iotanavisu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iotanavisu" type="button" role="tab" aria-controls="v-pills-iotanavisu" aria-selected="false"> IoT Analytics & Visualization </a>

                    <a class="nav-link border-bottom py-3" id="v-pills-iotinteimpl-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iotinteimpl" type="button" role="tab" aria-controls="v-pills-iotinteimpl" aria-selected="false"> IoT Integration & implementation </a>

                    <a class="nav-link border-bottom py-3" id="v-pills-aiot-tab" data-bs-toggle="pill" data-bs-target="#v-pills-aiot" type="button" role="tab" aria-controls="v-pills-aiot" aria-selected="false"> Artificial Intelligence of Things </a>
                </div>
                <div class="col-xl-9 my-3 tab-content ps-lg-4" id="v-pills-tabContent">
                    <div class="tab-pane p-4 card fade show active" id="v-pills-iotconsult" role="tabpanel" aria-labelledby="v-pills-iotconsult-tab" tabindex="0">
                        <p> Unlock the full potential of the Internet of Things with our expert IoT Consulting Services. At Inbox, we help businesses navigate the complexities of IoT by providing strategic guidance, technical expertise, and actionable roadmaps. Whether you're just starting your IoT journey or looking to optimize an existing solution, our consultants work closely with your team to align IoT technologies with your business goals. </p>
                        <p>What We Offer: </p>
                        <ul>
                            <li> <strong> IoT Strategy Development: </strong> We analyze your business processes to create a tailored IoT strategy that maximizes ROI and efficiency. </li>
                            <li> <strong> Technology Assessment: </strong>  Our experts evaluate current systems and recommend the best-suited IoT platforms, protocols, and architecture.</li>
                            <li> <strong> Use Case Identification: </strong>  We identify high-impact IoT use cases relevant to your industry, helping you prioritize investments. </li>
                            <li> <strong>  Solution Design & Prototyping: </strong> From proof-of-concept to MVPs, we help you design scalable and secure IoT solutions. </li>
                            <li> <strong> Risk & Compliance Advisory: </strong>  We assess potential risks, ensure data security, and advise on regulatory compliance. </li>
                            <li><strong> Vendor & Tool Selection: </strong>  Get help choosing the right hardware, software, cloud platforms, and connectivity solutions. </li>
                        </ul>
                    </div>
                    <div class="tab-pane p-4 card fade" id="v-pills-iotappdev" role="tabpanel" aria-labelledby="v-pills-iotappdev-tab" tabindex="0">
                        <p> At Inbox, we develop powerful, scalable, and secure IoT applications that seamlessly connect devices, systems, and users. Our end-to-end IoT application development services help businesses harness real-time data, automate operations, and improve decision-making across various industries.</p>
                        <p> Our Services Include:</p>
                        <ul>
                            <li> <strong> Custom IoT App Development: </strong>  Web, mobile, and cloud-based apps tailored to your specific use case.</li>
                            <li> <strong> Device Integration: </strong>  Seamless communication between IoT devices, sensors, and control systems. </li>
                            <li> <strong> Real-Time Data Processing: </strong>  Stream and analyze data from connected devices with minimal latency.</li>
                            <li> <strong> Cloud & Edge Computing: </strong>  Scalable solutions using AWS, Azure, Google Cloud, or on-premise infrastructure.</li>
                            <li> <strong> Security & Compliance: </strong>  End-to-end encryption, secure APIs, and compliance with industry standards. </li>
                            <li><strong> User Interface & Experience Design: </strong>  Intuitive dashboards, control panels, and visualizations for better insight and control. </li>
                        </ul>
                    </div>
                    <div class="tab-pane p-4 card fade" id="v-pills-iotwearappdev" role="tabpanel" aria-labelledby="v-pills-iotwearappdev-tab" tabindex="0">
                       <p> At Inbox, we specialize in IoT wearable app development that brings seamless connectivity, real-time insights, and enhanced user experiences to smart wearable devices. From fitness trackers and healthcare monitors to industrial wearables and smartwatches, we create custom applications that integrate smoothly with sensors, mobile platforms, and cloud ecosystems. </p>
                       <p> What We Offer: </p>
                       <ul>
                        <li><strong> Custom Wearable App Development: </strong>  Native and cross-platform apps designed for smartwatches, fitness bands, AR/VR headsets, and more. </li>
                        <li> <strong>Sensor & Device Integration: </strong>  Connect with heart rate monitors, GPS, motion sensors, and biometric trackers. </li>
                        <li><strong>  Real-Time Data Syncing: </strong>  Instant data transmission to smartphones, cloud platforms, or control systems.</li>
                        <li> <strong> Health & Activity Monitoring: </strong>  Applications for fitness, wellness, medical diagnostics, and patient tracking. </li>
                        <li><strong> User-Centric UI/UX Design: </strong>  Intuitive interfaces designed for small screens and optimal user interaction. </li>
                        <li> <strong> Cloud & Analytics Integration: </strong>  Store and analyze wearable data with scalable cloud backends and AI-driven insights.</li>
                       </ul>
                    </div>
                    <div class="tab-pane p-4 card fade" id="v-pills-iotcloud" role="tabpanel" aria-labelledby="v-pills-iotcloud-tab" tabindex="0">
                        <p> At Inbox, we offer robust and scalable IoT Cloud Development services to help businesses collect, store, manage, and analyze data from connected devices in real time. Our cloud-based IoT solutions enable seamless communication between devices and centralized platforms, ensuring high performance, security, and flexibility.</p>
                        <p> Key Services Include: </p>
                        <ul>
                            <li><strong>  Cloud Infrastructure Design: </strong> Build secure and scalable IoT platforms using AWS IoT, Azure IoT Hub, Google Cloud IoT, and more. </li>
                            <li><strong>  Device & Data Management: </strong> Manage millions of IoT devices, control firmware updates, and process vast data streams in real time. </li>
                            <li><strong> API & Microservices Development: </strong>  Create RESTful APIs and modular microservices for reliable integration and interoperability. </li>
                            <li><strong>  Real-Time Analytics & Visualization: </strong> Gain actionable insights with custom dashboards, real-time monitoring, and predictive analytics. </li>
                            <li><strong>  Security & Compliance: </strong> Implement end-to-end encryption, identity management, and compliance with GDPR, HIPAA, and other standards. </li>
                            <li> <strong> Edge-Cloud Integration: </strong>  Develop hybrid solutions that balance local processing (edge) with cloud scalability. </li>
                        </ul>
                    </div>
                    <div class="tab-pane p-4 card fade" id="v-pills-iotanavisu" role="tabpanel" aria-labelledby="v-pills-iotanavisu-tab" tabindex="0">
                      <p>  Turn raw device data into meaningful insights with our advanced IoT Analytics & Visualization services. At Inbox, we help businesses unlock the full value of their IoT ecosystems by transforming real-time and historical data into actionable intelligence through intuitive dashboards and powerful analytics tools. </p>
                      <p> Our Capabilities Include: </p>
                      <ul>
                        <li><strong> Real-Time Data Analytics: </strong>  Monitor device performance, user behavior, and operational metrics as they happen.</li>
                        <li><strong> Predictive & Prescriptive Analytics: </strong>  Use AI/ML models to forecast trends, detect anomalies, and optimize performance. </li>
                        <li><strong> Custom Dashboards: </strong>  Build interactive dashboards tailored to business goals, showing KPIs, alerts, and insights clearly.</li>
                        <li><strong> Data Integration:  </strong> Aggregate data from multiple devices, platforms, and sensors into a unified analytics system. </li>
                        <li><strong>  Visualization Tools: </strong>  Leverage tools like Power BI, Grafana, Kibana, and custom-built UIs for clear data representation.</li>
                        <li><strong> Automated Reporting: </strong>  Generate scheduled or on-demand reports with visual summaries for stakeholders. </li>
                      </ul>
                    </div>
                    <div class="tab-pane p-4 card fade" id="v-pills-iotinteimpl" role="tabpanel" aria-labelledby="v-pills-iotinteimpl-tab" tabindex="0">
                      <p> At Inbox, we provide end-to-end IoT Integration & Implementation services that connect devices, systems, and data streams into a unified and efficient ecosystem. Our team ensures smooth integration of IoT solutions with your existing infrastructure, enabling real-time data exchange, automation, and seamless operations. </p>
                      <p> Our Services Include:</p>
                      <ul>
                        <li><strong> System Integration: </strong>  Connect IoT devices with ERP, CRM, SCADA, and other enterprise systems. </li>
                        <li><strong> Connectivity Setup: </strong>  Implement reliable communication protocols like MQTT, CoAP, HTTP, and LoRaWAN. </li>
                        <li><strong> Edge & Cloud Integration: </strong>  Ensure real-time processing and scalability with secure edge-to-cloud connectivity. </li>
                        <li><strong> Middleware Development: </strong>  Build custom middleware for protocol translation, device management, and data routing. </li>
                        <li><strong>  Hardware-Software Synchronization:  </strong> Seamless alignment of device firmware with mobile/web/cloud applications. </li>
                        <li><strong> Implementation & Deployment: </strong>  Full-scale deployment of IoT networks with testing, configuration, and rollout. </li>
                      </ul>
                    </div>
                    <div class="tab-pane p-4 card fade" id="v-pills-aiot" role="tabpanel" aria-labelledby="v-pills-aiot-tab" tabindex="0">
                        <p> Artificial Intelligence of Things (AIoT) combines the power of Artificial Intelligence (AI) with the Internet of Things (IoT) to create intelligent, autonomous systems that can sense, analyze, and act in real time. At Inbox, we develop AIoT solutions that help businesses automate processes, gain predictive insights, and optimize operations through smart data-driven technologies.</p>
                        <p> What We Offer: </p>
                        <ul>
                            <li><strong> AI-Powered IoT Platforms: </strong>  Integrate machine learning and deep learning models into your IoT systems for intelligent decision-making. </li>
                            <li><strong> Edge AI Solutions: </strong>  Deploy AI models directly on edge devices for low-latency data processing and offline intelligence. </li>
                            <li><strong> Predictive Maintenance: </strong>  Use AIoT to monitor equipment health and predict failures before they happen. </li>
                            <li><strong> Computer Vision & Image Recognition: </strong>  Implement visual intelligence in cameras and sensors for security, automation, and analytics. </li>
                            <li><strong> Smart Automation: </strong>  Enable systems to adapt and respond autonomously based on real-time data patterns. </li>
                            <li><strong> Natural Language Processing (NLP): </strong>  Integrate voice and text interfaces for smart assistants, chatbots, and voice-controlled devices.</li>
                        </ul>
                    </div>
                </div>
            </div>
           </div>
        </section>

        <!--------------------------------------- iot services end --------------------------->

          <!------------------------ iot development process start ------------------------->

          <section class="iot-process">
            <div class="text-center">
                <h3> Our IoT Development Process </h3>
                <p> We follow a structured, end-to-end process to deliver reliable and scalable IoT solutions</p>
            </div>
            <div class="my-5 swiper-process">
                <div class="swiper myIoTSwiper p-5">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 1 </h4>
                            <h5> Consultation & Requirement Analysis </h5>
                            <p> We collaborate with stakeholders to understand business goals, define IoT use cases, and gather technical requirements to ensure the solution aligns with operational needs and strategic objectives.</p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 2 </h4>
                            <h5> Solution Architecture Design</h5>
                            <p> We design a scalable, secure, and efficient IoT architecture, selecting the right hardware, connectivity, cloud platform, and software components to ensure seamless integration and future-ready performance. </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 3 </h4>
                           <h5>  Hardware & Sensor Integration </h5>
                           <p> We select and integrate the appropriate IoT devices, sensors, and communication modules, ensuring accurate data capture, reliable connectivity, and compatibility with the overall system architecture. </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 4 </h4>
                            <h5> Software & App Development</h5>
                            <p> We develop custom software, mobile, and web applications to manage IoT devices, visualize data, and enable user interaction, ensuring a seamless and intuitive user experience across platforms. </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 5 </h4>
                            <h5> Cloud & Data Integration</h5>
                            <p> We integrate IoT systems with secure cloud platforms to enable real-time data storage, processing, and analytics, ensuring scalability, accessibility, and seamless communication between devices and applications. </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 6 </h4>
                             <h5> Testing & QA</h5>
                             <p> We conduct thorough testing of devices, software, and connectivity to ensure performance, reliability, and security, identifying and resolving issues before deployment for a seamless user experience. </p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 7 </h4>
                            <h5> Deployment & Implementation</h5>
                            <p> We carry out the full-scale rollout of the IoT solution, configuring devices, integrating systems, and ensuring smooth operation in real-world environments with minimal disruption to business processes.</p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card p-3 h-100 shadow">
                            <h4> 8 </h4>
                            <h5> Monitoring & Maintenance </h5>
                            <p> We provide continuous monitoring, performance optimization, and timely updates to ensure your IoT system runs reliably, stays secure, and adapts to evolving business and technology needs. </p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
          </section>

          <!------------------------ iot development process end ------------------------->

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


    <!-- ============================================-->
    <!-- <section> Our Tech arsenal  begin ============================-->
    <!-- ============================================-->
    {{-- <div class="container"> --}}

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
                  <img src="{{asset('assets/inbox/tech_arsenal/net.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> .Net </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/php.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> PHP </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Laravel.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Laravel </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/node.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Node.js</p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/python.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Python </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/java.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Java </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/rubyOnRail.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Ruby On Rails </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/django.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Django </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/express.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Express.js </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/flask.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Flask </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/springboot.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Spring boot </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/unity3D.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/angular.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Angular.js </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/react.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> React.js </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/bootstrap.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Bootstrap </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/jqery.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> jQuery </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/vue.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Vue.js </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/ember.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Ember.js </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/bbackbone.js.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Backbone.js </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/flutter.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Flutter </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/unity3D.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Unity 3D </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/shopify.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Shopify </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/wordpress.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> WordPress </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/magento.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/GIT-HUB.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Github Copilot </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/TABNINE-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Tabnine </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/CHATGPT.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> ChatGPT </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/tensorflow-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Tansorflow </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/openaicodex.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> OpenAI Codex </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/otter.ai_.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Otter.ai </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/codewhisperer.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> CodeWhisperer</p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/hugging-face.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Hugging Face </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/blackbox ai.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Blackbox AI </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/cursor ai.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/mysql.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> MySQL </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/mongodb.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> MongoDB </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/postgresql.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> PostgreySQL </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/snowflake.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Snowflake </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/redshift.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Redshift </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/azure-sql-synapse.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Azure SQL Synapse </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/splunk.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Splunk </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/talend.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Talend </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/fivetran.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Fivetran </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/oracle.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Oracle </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/mariaDB.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> MariaDB </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/sql_server.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/linux.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Linux </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/ubantoo.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Ubantoo </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/windows.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Windows </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/AWS.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> AWS </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/google-cloud.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Google Cloud </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/azure-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Azure </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/apache-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Apache </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/nginx.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Nginx </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/cloudflare.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Cloudflare </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/fastly.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Fastly </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/digital ocean.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Digital Ocean </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/euris.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/Kubernetes.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Kubernetes </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/ECS.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> ECS </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/EC2.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> EC2 </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Lambda.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Lambda </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/CloudFormation.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> CloudFormation </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Terraform.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Terraform </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Jenkins.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Jenkins </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Bitbucket.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Bitbucket </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/github.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> GitHub </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Go.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Go </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/SaltStack.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> SaltStack </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/Docker.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Docker </p>
                </div>
                </div>
              </div>
              </div>
              <div class="tab-pane fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab" tabindex="0">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/new-relic.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> New Relic </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/appdynamic-logo-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> AppDynamics </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/dynatrace-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Dynatrace </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/datadog.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/segement.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Segment </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/google-apigee.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Google Apigee </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/mulesoft.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Mulesoft </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/tealium.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Tealium </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/zapier.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Zapier </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/sonarqube.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> SonarQube </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/twilio.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Twilio </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/sendgrid.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Sendgrid </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/stripe.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Stripe </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/paypal.png')}}" class="img-fluid">
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
                  <img src="{{asset('assets/inbox/tech_arsenal/BUSINESS-INTELIGENCE-POWERBI.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Power BI </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/sap-business-objects.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> SAP </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/tableau-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Tableau </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/looker-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Looker </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/qlik-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Qlik </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/heap-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Heap </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/google-analytics.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Google Analytics </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/amplitude-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Amplitude </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/mixpanel-1.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Mixpanel </p>
                </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                <div class="tech-logo p-2 text-center" style="height: 100%;">
                  <div style="width: 40%;margin: 3% auto;">
                  <img src="{{asset('assets/inbox/tech_arsenal/countly.png')}}" class="img-fluid">
                  </div>
                  <p class="fw-medium"> Countly </p>
                </div>
                </div>
              </div>
              </div>

            </div>
            {{--</div> --}}

          </div>
          </div>
        </div>
        <!-- end of .container-->
    </section>

        <!-- <section> Our Tech arsenal close ============================-->
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

        </div>

        </div>

    </main>
@endsection
