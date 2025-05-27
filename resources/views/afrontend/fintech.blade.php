@extends('afrontend/layout')
@section('page_title', 'FinTech')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/377640278.webp') }});">
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
                                            Simplify Your Finances with Smart Automation </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                           Effortlessly manage your finances, grow savings, and make smart investments—all in one secure, easy-to-use platform. </p>
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

            <!-------------------------- key value proposition start ---------------->
                <section>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    </div>
                    <div class="my-5">
                        <div class="row " data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-6">

                                <h3> A secure, all-in-one digital wallet designed to give you control of your financial life.</h3>
                                <p class="my-3"> At Inbox, we specialize in building custom fintech products that help businesses and startups reimagine how they manage, move, and grow money. From digital wallets and mobile banking to payment gateways and lending platforms, we create tailored financial technology that meets your unique goals.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h5> Key Value Propositions </h5>
                                <div class="my-3">
                                    <div class="h-100 p-3">
                                        <h5>Fast and secure transactions </h5>
                                        <p>Enjoy lightning-fast, encrypted transactions with bank-level security, ensuring your money moves safely and instantly whenever you need it.</p>
                                    </div>
                                    <div class="h-100 p-3">
                                        <h5> Real-time expense tracking </h5>
                                        <p>Monitor your spending instantly with real-time expense tracking, helping you stay on budget and make smarter financial decisions every day.</p>
                                    </div>
                                    <div class="h-100 p-3">
                                        <h5>AI-driven savings and investment tips</h5>
                                        <p>Get personalized savings strategies and smart investment tips powered by AI to help you grow your wealth with confidence and ease.</p>
                                    </div>
                                    <div class="h-100 p-3">
                                        <h5>Seamless integration with your bank accounts</h5>
                                        <p> Easily connect and sync your bank accounts for a unified financial view, enabling smooth transactions and real-time data updates across platforms. </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
        <!--------------------------  key value proposition end ---------------->

        <!--------------- custom fintech solutions start --------------------->

         <section>
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h3> Key Features </h3>
            </div>
        <div class="my-5">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-xl-4 col-md-6 col-12 my-3">
                        <div class="card shadow h-100 p-3" style="border-bottom: 6px solid #00406d; border-radius: 20px;">
                               <h5> Smart Budgeting </h5>
                               <p> Smart Budgeting helps you take full control of your finances by analyzing your income, expenses, and spending patterns to create personalized, flexible budgets. Set monthly goals, receive real-time alerts when you're nearing limits, and get intelligent recommendations to cut unnecessary costs. With visual charts and intuitive tracking, staying on budget becomes effortless and sustainable.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 my-3">
                        <div class="card shadow h-100 p-3" style="border-bottom: 6px solid #00406d; border-radius: 20px;">
                            <h5>  Automated Savings</h5>
                            <p> Automated Savings makes growing your money effortless. Set your savings goals, and our platform automatically transfers small, manageable amounts based on your income and spending habits. Whether you're saving for an emergency fund, a big purchase, or long-term wealth, our intelligent system ensures consistent progress—without disrupting your lifestyle. Watch your savings grow without lifting a finger. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 my-3">
                        <div class="card shadow h-100 p-3" style="border-bottom: 6px solid #00406d; border-radius: 20px;">
                            <h5> Instant Money Transfers</h5>
                            <p> Instant Money Transfers let you send and receive funds in seconds—anytime, anywhere. Whether you're splitting bills, paying friends, or transferring between accounts, our platform ensures lightning-fast, secure transactions with no hidden fees. Enjoy real-time notifications and peace of mind, knowing your money is moving safely and instantly when you need it most.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 my-3">
                        <div class="card shadow h-100 p-3" style="border-bottom: 6px solid #00406d; border-radius: 20px;">
                            <h5> Cryptocurrency Support</h5>
                            <p> Our platform offers seamless Cryptocurrency Support, allowing you to buy, sell, and manage popular digital assets securely. Track your crypto portfolio in real time, make instant transfers, and access market insights—all within one easy-to-use interface. Whether you're a beginner or an experienced trader, enjoy full control over your crypto investments alongside your traditional finances.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 my-3">
                        <div class="card shadow h-100 p-3" style="border-bottom: 6px solid #00406d; border-radius: 20px;">
                            <h5> Custom Alerts & Notifications</h5>
                            <p> Stay informed with Custom Alerts & Notifications tailored to your financial habits. Receive instant updates on transactions, bill due dates, budget limits, and savings milestones. Our smart alerts help you avoid fees, prevent overspending, and keep your financial goals on track—so you never miss an important update or opportunity to optimize your money management.</p>
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
              <!------------------------------------ fintech with ai start ----------------------------------------->
       <section>

        <div class="my-5">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-12 col-xl-5">
                    <div>
                        <h3> Artificial Intelligence in Fintech</h3>
                        {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                        <p> AI is transforming financial services by providing intelligent solutions that enhance decision-making, automate complex processes, and improve overall operational efficiency. From advanced fraud detection and real-time credit assessments to personalized financial management and AI-driven trading, our innovative tools enable businesses to streamline workflows, reduce risk, and offer personalized customer experiences. Harness the power of AI to stay ahead in the competitive fintech landscape while driving growth and security.

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
                                    AI-Powered Credit Scoring & Loan Underwriting
                                </h5>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">We use advanced AI and machine learning to evaluate creditworthiness by analyzing both traditional financial data and alternative sources like mobile usage and transaction behavior. This enables faster, more accurate risk assessments and fully automated loan underwriting. Our solution helps lenders reduce default rates, streamline operations, and provide inclusive financial services to underserved or thin-file customers.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Fraud Detection & Anti-Money Laundering (AML)
                                </h5>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Our AI-powered fraud detection and AML solutions monitor transactions in real time, identifying suspicious patterns and unusual behavior using machine learning and behavioral analytics. Detect fraud before it happens, reduce false positives, and ensure compliance with global regulations. Stay ahead of threats with intelligent, adaptive security that evolves with changing risks — protecting your platform and your customers.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Conversational AI: Chatbots & Virtual Assistants
                                </h5>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Enhance customer engagement with AI-powered chatbots and virtual assistants that offer 24/7 support, answer queries, guide users, and automate financial tasks. Using natural language processing and machine learning, our solutions deliver fast, personalized experiences across web, mobile, and voice platforms—reducing support costs and improving user satisfaction in banking, insurance, and investment services.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Personalized Financial Management (PFM)
                                  </h5>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Our AI-powered PFM solutions help users manage their finances by analyzing spending habits, tracking goals, and providing personalized recommendations for savings and investments. With smart budgeting tools and real-time insights, users gain control over their financial health, while fintech platforms can drive deeper engagement, promote financial literacy, and unlock new opportunities for personalized services.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Robo-Advisors & Algorithmic Trading
                                  </h5>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Our AI-driven robo-advisors and algorithmic trading solutions offer automated, data-driven investment strategies tailored to individual risk profiles and financial goals. By leveraging machine learning and real-time market analysis, we enable users to optimize their portfolios, execute trades, and maximize returns — all with lower costs, enhanced efficiency, and 24/7 market monitoring.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    AI-Driven KYC & Document Verification
                                  </h5>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Streamline customer onboarding with our AI-powered KYC and document verification solutions. Using advanced OCR and machine learning, we automate the extraction and validation of data from IDs, utility bills, and other documents. This reduces manual effort, accelerates the verification process, and ensures compliance with regulatory standards — all while enhancing security and minimizing fraud risks.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    Predictive Analytics & Customer Insights
                                  </h5>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body"> Our AI-powered predictive analytics solution helps businesses anticipate customer behavior, such as churn, spending patterns, and product interest. By leveraging historical data and machine learning algorithms, we provide actionable insights that drive smarter marketing, personalized offerings, and proactive customer retention strategies, enabling businesses to stay ahead of trends and improve overall customer satisfaction.</div>
                                </div>
                              </div>

                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    Voice AI & Voice-Enabled Banking
                                  </h5>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body"> Revolutionize the customer experience with AI-powered voice assistants. Our voice-enabled banking solutions allow users to check balances, make transfers, and access account information using natural language. By integrating voice recognition and secure authentication, we offer a hands-free, intuitive interface that enhances accessibility, speeds up transactions, and provides a seamless, personalized banking experience across devices.</div>
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
