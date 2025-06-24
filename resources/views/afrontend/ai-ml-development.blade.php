@extends('afrontend/layout')
@section('page_title', 'AI ML Development')
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
                             <img src="{{ asset('storage/media/services/banner/AI_ML.jpg')  }}" alt="AI ML development" class="lcp-image" fetchpriority="high"  width="1920" height="1080" loading="lazy"/>
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color banner-title fade-in-up">
                                            AI ML Development
                                        </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
                                            We develop tailored AI/ML solutions that automate workflows, extract actionable insights, and enhance decision-making to help businesses innovate and grow efficiently.</p>
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
                                    <img class="w-100 h-100" src="{{ asset('storage/media/clients/' . $clogolist->image) }}"
                                        alt="partnerco" data-zanim-xs="{}" loading="lazy"/>
                                    {{-- </div> --}}
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

            <!--------------------------  ai  services start ---------------->
            <section>
                <div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-5">
                            <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                                <h2> AI Development Services</h2>
                                <p class="fw-light">
                                    Our AI/ML Development Services empower businesses to build intelligent solutions using advanced technologies like machine learning, natural language processing (NLP), and computer vision. We specialize in creating custom models for automation, predictive analytics, personalization, and smarter decision-making. Our AI-driven solutions help businesses enhance efficiency, improve customer experiences, and drive innovation, delivering measurable value across various industries such as healthcare, finance, and retail.
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-7">
                            <div class="row">
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> Custom AI Development </h3>
                                       <p> Build intelligent solutions tailored to your business needs. Our Custom AI Development services offer end-to-end support — from concept to deployment — creating scalable, secure, and fully customized AI systems. Whether it's machine learning, natural language processing, or computer vision, we develop AI tools that solve real-world problems and deliver measurable results. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> Creative AI Solutions  </h3>
                                       <p> Create intelligent, creative, and adaptive solutions with Generative AI. We specialize in building custom models that generate text, images, code, and more—tailored to your business needs. From content automation to AI-powered design tools and virtual assistants, our Generative AI solutions push the boundaries of innovation and user experience.

                                       </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> AI Design </h3>
                                       <p> Transform ideas into intelligent, user-centric solutions with our AI Design services. We blend cutting-edge artificial intelligence with innovative design thinking to create smart interfaces, personalized experiences, and data-driven products. Whether it's AI-driven UX, generative design, or adaptive systems, we help bring your vision to life with creativity and precision. </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> AI Security </h3>
                                       <p> Protect your data, systems, and users with advanced AI-driven security solutions. Our AI Security services leverage machine learning and real-time analytics to detect threats, prevent cyberattacks, and strengthen digital defenses. From anomaly detection to automated response systems, we design intelligent safeguards tailored to your organization’s risk profile. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> AI-Driven IT Operations </h3>
                                       <p>Streamline and modernize your IT operations with AIOps. Our AIOps solutions use AI and machine learning to analyze vast volumes of IT data in real-time, enabling proactive monitoring, faster incident resolution, and automated root cause analysis. Improve system reliability, reduce downtime, and enhance decision-making across your IT infrastructure. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> AI Consultation </h3>
                                       <p> Unlock the power of Artificial Intelligence for your business. Our AI consultation services help you identify opportunities to streamline operations, enhance customer experiences, and drive innovation using AI tools and technologies. From strategy development to implementation planning, our experts provide tailored guidance to help you integrate AI solutions effectively and ethically. </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> Intelligent Conversational Agents </h3>
                                       <p> Deliver seamless, human-like interactions with our advanced AI voice assistants and chatbots. Powered by natural language processing and conversational AI, our solutions understand context, adapt to user behavior, and provide 24/7 support across platforms. From customer service automation to voice-enabled applications, we design intelligent agents that enhance engagement and efficiency. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> AI Product Development </h3>
                                       <p> Turn your AI vision into a market-ready product. We offer end-to-end AI product development—from ideation and prototyping to deployment and scaling. Whether you're building smart apps, predictive analytics tools, or AI-powered platforms, our team combines technical expertise with product strategy to deliver innovative, user-focused solutions that drive real value. </p>
                                    </div>
                                </div>

                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> Hire AI Developers </h3>
                                       <p> Build your AI team with top-tier talent. Our expert AI developers specialize in machine learning, deep learning, NLP, computer vision, and generative AI. Whether you need project-based support or a dedicated team, we provide vetted professionals who can design, develop, and deploy scalable AI solutions tailored to your business goals.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2">  Dynamic Machine Learning (ML) Systems </h3>
                                       <p> Harness the power of adaptive, self-learning systems with our Dynamic Machine Learning solutions. We develop ML models that evolve in real-time, continuously improving performance based on new data. Whether it’s for predictive analytics, personalization, or process optimization, our dynamic ML systems drive smarter decisions and enable businesses to stay ahead in a rapidly changing environment. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-3">
                                    <div class="card h-100">
                                       <h3 class="fs-2"> Intelligent Computer Vision Systems and OCRs </h3>
                                       <p> Unlock the potential of visual data with our cutting-edge Computer Vision and Optical Character Recognition (OCR) solutions. We develop intelligent systems that can recognize, analyze, and interpret images, videos, and documents with high accuracy. From automating document processing with OCR to real-time object detection and image analysis, our solutions enhance efficiency and enable data-driven decision-making across industries. </p>
                                    </div>
                                </div>
                          <div class="col-lg-6 my-3">
                                <div class="card h-100">
                                   <h3 class="fs-2"> AISaaS Development </h3>
                                   <p> Empower your business with scalable, AI-driven solutions through our AISaaS development services. We build customizable AI platforms that offer advanced machine learning, predictive analytics, and automation capabilities as a service. With flexible deployment options, our solutions help you integrate AI into your operations without the need for extensive infrastructure, enabling faster innovation and smarter decision-making. </p>
                                </div>
                            </div>
                        <div class="col-lg-6 my-3">
                            <div class="card h-100">
                               <h3 class="fs-2"> 360-degree Support and Maintenance </h3>
                               <p> Ensure your AI systems and solutions run smoothly with our comprehensive 360-degree support and maintenance services. From real-time monitoring and troubleshooting to regular updates and performance optimization, we provide end-to-end support to keep your systems secure, efficient, and up-to-date. Our proactive approach minimizes downtime, enhances system longevity, and maximizes your technology’s potential. </p>
                            </div>
                        </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <!--------------------------  ai ml services end ---------------->
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
                                <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>
                                    Would you like to speak to one of our advisers over the phone? Just submit your details and we’ll be in touch
                                    shortly. You can also email us if you would prefer.
                                </p>
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
<!------------------------------ machine learning development services start ---------------------------------------->

            <section>
                <div class="text-center my-5">
                    <h2> Machine Learning Development Services </h2>
                </div>

                <div>
                    <div class="row">
                     <div class="col-lg-4 col-md-6 my-3">
                        <div class="card shadow p-3 h-100">
                           <h3 class="fs-2"> Data Science Expertise </h3>
                           <p> Our team is made up of skilled data scientists who excel at modeling, algorithm development, and data analysis. They use their experience to glean insightful information from your data. </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 my-3">
                        <div class="card shadow p-3 h-100">
                           <h3 class="fs-2"> End-to-End ML Development</h3>
                           <p> As a machine learning development company, we have been delivering end-to-end ML development services, including data collection, preprocessing, model training, deployment, and continuous optimization.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 my-3">
                        <div class="card shadow p-3 h-100">
                           <h3 class="fs-2"> Consulting and Strategy </h3>
                           <p> To assist companies in creating a well-defined plan for integrating and optimizing machine learning, we offer machine learning consulting services. We provide advice on how to gather data, choose a model, and integrate it with current systems. </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 my-3">
                        <div class="card shadow p-3 h-100">
                           <h3 class="fs-2"> Deep Learning Expertise </h3>
                           <p> Recurrent neural networks (RNNs) and convolutional neural networks (CNNs) are two examples of deep learning techniques that our team is proficient in. We can take on challenging jobs like speech and picture recognition because of our experience. </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 my-3">
                        <div class="card shadow p-3 h-100">
                           <h3 class="fs-2"> Real-Time Analytics </h3>
                           <p> OFor applications like dynamic pricing or predictive maintenance, our machine learning solutions can provide real-time analytics so you can make decisions as new data comes in. </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 my-3">
                        <div class="card shadow p-3 h-100">
                           <h3 class="fs-2"> Hire ML Developers</h3>
                           <p> Hire a machine learning development team from one of the top machine learning companies to develop top-notch solutions. We consider scalability when designing ML solutions so that they may expand with your business and meet processing needs. </p>
                        </div>
                     </div>
                    </div>
                </div>
            </section>
<!------------------------------ machine learning development services end ---------------------------------------->


 <!------------------------ AI technologies start ----------------------------->

        <section>
            <div class="text-center">
                <h2> AI Technologies </h2>
                <p></p>
            </div>
            <div class="my-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div>
                            <h3 class="fs-2"> Neural Networks </h3>
                            <p> CNN </p>
                            <p>RNN </p>
                            <p> Representation Learning </p>
                            <p> Manifold Learning </p>
                            <p>Variational Autoencoders </p>
                            <p>Bayesian Network </p>
                            <p>Autoregressive Networks </p>
                            <p>Autoencoders (VAE, DAE SAE, etc.) </p>
                            <p>Generative adversarial networks (GANs) </p>
                            <p>Deep Q-Network (DQN) </p>
                            <p>Feedforward Neural Network </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                             <h3 class="fs-2"> Module / Toolkits</h3>
                             <p>Microsoft Cognitive Toolkit</p>
                             <p>Core ML</p>
                             <p>Kurento’s computer vision module</p>
                        </div>
                        <div class="mt-5">
                            <h5>Libraries</h5>
                            <p> Sonnet</p>
                            <p>Tensorlfow probability </p>
                            <p>Tensor2Tensor </p>
                            <p>tf-slim </p>
                            <p>OpenNN </p>
                            <p>Neuroph </p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div>
                            <h3 class="fs-2"> Algorithms </h3>
                            <p>Supervised/ Unsupervised Learning </p>
                            <p>Clustering</p>
                            <p>Metric Learning </p>
                            <p>Fewshot Learning </p>
                        </div>
                        <div class="mt-5">
                            <h3 class="fs-2"> Concepts</h3>
                            <p> Supervised/unsupervised learning</p>
                            <p>Clustering (density-based, Hierarchical, partitioning) </p>
                            <p>Metric learning </p>
                            <p>Few-shot learning </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <h3 class="fs-2"> Frameworks </h3>
                            <p> Tensorflow</p>
                            <p> PyTorch</p>
                            <p> MXNet</p>
                            <p> Nvidia</p>
                            <p> Caffe</p>
                            <p> Caffe2 </p>
                            <p> Chainer</p>
                            <p> Theano </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <!------------------------ AI technologies end ----------------------------->


        <!------------------------------  things you know start ------------------------->
        <section class="my-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="fs-2 fs-md-3">Things You Get</h2>
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
                                                    alt="customized-solution" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
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
                                                    alt="scalable-solution" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
