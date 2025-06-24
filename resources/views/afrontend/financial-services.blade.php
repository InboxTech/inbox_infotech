@extends('afrontend/layout')
@section('page_title', 'Financial Services')
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
                             <img src="{{asset('storage/media/Financial_Services.jpg')}}" alt="Financial Service" class="lcp-image" fetchpriority="high"  width="1920" height="1080" loading="lazy"/>
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color banner-title fade-in-up">
                                            Financial Services </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color">
                                            Understanding the technology needs of Banks, Credit Unions, and Wealth
                                            Management Firms. </p>
                                    </div>
                                    <div class="overflow-hidden">
                                         <div class="button-group fade-in-up">
                                            <a class="btn btn-primary me-3 mt-3" href="{{ url('/about-us') }}"> Read more <span class="fas fa-chevron-right ms-2"></span> </a>
                                            <a class="btn btn-warning mt-3" href="{{ url('/contact-us') }}"> Contact us <span class="fas fa-chevron-right ms-2"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach ($slider as $list) @endforeach --}}
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
                                    <img class=" w-100 h-100" src="{{ asset('storage/media/' . $clogolist->image) }}"
                                        alt="partnerco" data-zanim-xs="{}" loading="lazy"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----------------------------   client swiper end ---------------------------->

        <div class="container">

            <!-------------------------- fintech solution start ---------------->
            <section>
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                </div>
                <div class="my-3">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="text-center mb-4">
                            <h2> Empower Your Financial Future with FinTech Software </h2>
                        </div>
                        <div class="">
                            <p>
                                Our experienced FinTech team specializes in building robust and scalable software solutions
                                for the financial industry. We develop everything from corporate lending systems and secure
                                payment gateways to intelligent financial management platforms. Whether you're launching a
                                simple digital payment app or scaling a complex financial solution, we offer the technical
                                expertise to bring your vision to life.
                            </p>
                            <p>
                                We focus on creating user-friendly and secure financial applications, integrating the latest
                                technologies like Cloud, IoT, and AI to ensure cutting-edge functionality. Our comprehensive
                                FinTech development services support you throughout the entire lifecycle of your product,
                                from initial concept and early development to growth and expansion.
                            </p>
                            <p>
                                Count on us to be your partner in building exceptional financial applications. Our deep
                                understanding of the FinTech landscape allows us to deliver solutions that are not only
                                technically sound but also strategically aligned with your business goals. Let's collaborate
                                to create the future of finance.
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <!--------------------------  fintech solution end ---------------->

            <!--------------- custom fintech solutions start --------------------->

            <section>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sticky-top" style="top: 100px; z-index: 1;">
                            <h2> Unlock Your Financial Potential with Our Advanced FinTech Solutions </h2>
                            <p>
                                Empower your Banking, Financial Services, and Insurance (BFSI) company to revolutionize its
                                capabilities through our bespoke FinTech software development services. We craft tailored,
                                white-label software solutions, harnessing the power of a cutting-edge technology stack. Our
                                focus is on driving significant business growth and delivering exceptional, digitally-driven
                                customer experiences.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12 my-3">
                                <div class="card p-3" style="border: 1px solid #00406d; border-radius: 20px;">
                                    <h3 class="fs-2"> Intelligent Digital Banking </h3>
                                    <p>
                                        We excel at creating secure and intuitive applications that streamline core banking
                                        operations and significantly enhance the customer journey.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 my-3">
                                <div class="card h-100 p-3" style="border: 1px solid #00406d; border-radius: 20px;">
                                    <h3 class="fs-2"> Innovative Insurtech Solutions </h3>
                                    <p>
                                        We develop disruptive Insurtech solutions designed to automate key processes, ensure
                                        rigorous compliance, and dramatically improve customer satisfaction within the
                                        insurance sector.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 my-3">
                                <div class="card h-100 p-3" style="border: 1px solid #00406d; border-radius: 20px;">
                                    <h3 class="fs-2"> Secure Digital Wallets </h3>
                                    <p>
                                        We can help you build robust digital wallets that provide users with fast and
                                        convenient payment options, fortified with advanced security features.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 my-3">
                                <div class="card h-100 p-3" style="border: 1px solid #00406d; border-radius: 20px;">
                                    <h3 class="fs-2"> Reliable Peer-to-Peer Lending Platforms</h3>
                                    <p>
                                        Our expertise extends to designing and engineering dependable FinTech lending
                                        platforms that automate underwriting processes, effectively manage risks, and
                                        accelerate loan processing workflows.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--------------- custom fintech solutions end --------------------->





        </div>

        <!-- ============================================-->
        <!-- <section> rquest a callback begin ============================-->
        <section class="bg-primary p-5 my-5">
            <div class="container-fluid">
                <div class="row align-items-center text-white">
                    <div class="col-lg-4">
                        <div class="border border-2 border-white p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}"
                            data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                            </div>
                            <div class="overflow-hidden">
                                <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>
                                    Would you like to speak to one of our advisers over the phone? Just submit your details
                                    and we’ll be in touch shortly. You can also email us if you would prefer.
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
                                        <input class="form-control" type="text" name="name" placeholder="Your Name"
                                            aria-label="Your Name" />
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
                                    <div class="col-12">
                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            aria-label="Email" />
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" id="" rows="4"
                                            placeholder="Subject"aria-label="Enter your Descriptions here..."></textarea>
                                    </div>
                                    <div class="col-4 mt-4 mx-auto">
                                        <button class="btn btn-primary w-100" type="submit">Submit</button>
                                    </div>
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
            <!------------------------------------ fintech with ai start ----------------------------------------->
            <section>

                <div class="my-5">

                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-12 col-md-12 col-xl-5">
                            <div>
                                <h2> Artificial Intelligence in Fintech</h2>
                                {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                                <p> AI is transforming financial services by providing intelligent solutions that enhance
                                    decision-making, automate complex processes, and improve overall operational efficiency.
                                    From advanced fraud detection and real-time credit assessments to personalized financial
                                    management and AI-driven trading, our innovative tools enable businesses to streamline
                                    workflows, reduce risk, and offer personalized customer experiences. Harness the power
                                    of AI to stay ahead in the competitive fintech landscape while driving growth and
                                    security.

                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-7">
                            <h3> <strong> Key services include: </strong> </h3>
                            <div class="">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                AI-Powered Credit Scoring & Loan Underwriting
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">We use advanced AI and machine learning to evaluate
                                                creditworthiness by analyzing both traditional financial data and
                                                alternative sources like mobile usage and transaction behavior. This enables
                                                faster, more accurate risk assessments and fully automated loan
                                                underwriting. Our solution helps lenders reduce default rates, streamline
                                                operations, and provide inclusive financial services to underserved or
                                                thin-file customers.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Fraud Detection & Anti-Money Laundering (AML)
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Our AI-powered fraud detection and AML solutions
                                                monitor transactions in real time, identifying suspicious patterns and
                                                unusual behavior using machine learning and behavioral analytics. Detect
                                                fraud before it happens, reduce false positives, and ensure compliance with
                                                global regulations. Stay ahead of threats with intelligent, adaptive
                                                security that evolves with changing risks — protecting your platform and
                                                your customers.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Conversational AI: Chatbots & Virtual Assistants
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> Enhance customer engagement with AI-powered
                                                chatbots and virtual assistants that offer 24/7 support, answer queries,
                                                guide users, and automate financial tasks. Using natural language processing
                                                and machine learning, our solutions deliver fast, personalized experiences
                                                across web, mobile, and voice platforms—reducing support costs and improving
                                                user satisfaction in banking, insurance, and investment services.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="false" aria-controls="flush-collapseFour">
                                                Personalized Financial Management (PFM)
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Our AI-powered PFM solutions help users manage
                                                their finances by analyzing spending habits, tracking goals, and providing
                                                personalized recommendations for savings and investments. With smart
                                                budgeting tools and real-time insights, users gain control over their
                                                financial health, while fintech platforms can drive deeper engagement,
                                                promote financial literacy, and unlock new opportunities for personalized
                                                services.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                aria-expanded="false" aria-controls="flush-collapseFive">
                                                Robo-Advisors & Algorithmic Trading
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Our AI-driven robo-advisors and algorithmic trading
                                                solutions offer automated, data-driven investment strategies tailored to
                                                individual risk profiles and financial goals. By leveraging machine learning
                                                and real-time market analysis, we enable users to optimize their portfolios,
                                                execute trades, and maximize returns — all with lower costs, enhanced
                                                efficiency, and 24/7 market monitoring.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                                aria-expanded="false" aria-controls="flush-collapseSix">
                                                AI-Driven KYC & Document Verification
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Streamline customer onboarding with our AI-powered
                                                KYC and document verification solutions. Using advanced OCR and machine
                                                learning, we automate the extraction and validation of data from IDs,
                                                utility bills, and other documents. This reduces manual effort, accelerates
                                                the verification process, and ensures compliance with regulatory standards —
                                                all while enhancing security and minimizing fraud risks.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                                aria-expanded="false" aria-controls="flush-collapseSeven">
                                                Predictive Analytics & Customer Insights
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> Our AI-powered predictive analytics solution helps
                                                businesses anticipate customer behavior, such as churn, spending patterns,
                                                and product interest. By leveraging historical data and machine learning
                                                algorithms, we provide actionable insights that drive smarter marketing,
                                                personalized offerings, and proactive customer retention strategies,
                                                enabling businesses to stay ahead of trends and improve overall customer
                                                satisfaction.</div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <h5 class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                                aria-expanded="false" aria-controls="flush-collapseEight">
                                                Voice AI & Voice-Enabled Banking
                                            </h5>
                                        </h4>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> Revolutionize the customer experience with
                                                AI-powered voice assistants. Our voice-enabled banking solutions allow users
                                                to check balances, make transfers, and access account information using
                                                natural language. By integrating voice recognition and secure
                                                authentication, we offer a hands-free, intuitive interface that enhances
                                                accessibility, speeds up transactions, and provides a seamless, personalized
                                                banking experience across devices.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!------------------------------------ fintech with ai end ------------------------------------------->
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
                                                    alt="Product_Consulting" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
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
                                                    alt="user-friendly" class="w-100 h-100" data-zanim-xs='{"delay":0}' loading="lazy" />
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


        </div><!-- end of .container-->



    </main>
@endsection
