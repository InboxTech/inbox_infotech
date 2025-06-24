@extends('afrontend/layout')
@section('page_title', 'InsurTech')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/InsurTech.jpg') }});">
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
                                            InsurTech</p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                        InsurTech applies advanced IT solutions like AI, cloud, and data analytics to streamline insurance processes, improve efficiency, and enhance customer experience.</p>
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



            <!---------------------------  our services start ------------------------->
              <section class="" >

                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="">Driving Innovation in Insurance with Advanced Service Lines</h3>
                            <p class="fw-light">Advanced service lines are reshaping the insurance industry by driving innovation, efficiency, and customer-centricity. This approach empowers insurers to modernize operations, enhance decision-making, and stay competitive in a rapidly evolving digital and regulatory landscape.
                            </p>
                </div>
                <div class="my-5">
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-4 my-3">
                        <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                    <h5 class="card-title my-2">Adaptive Insurance Solution Creation </h5>
                                    <div class="card-body p-0">
                                <p class="card-text mb-0">Adaptive Insurance Solution Creation focuses on developing flexible, customer-centric insurance products tailored to evolving market demands and individual needs. It leverages data, technology, and agile methodologies to deliver responsive, scalable solutions that drive engagement and competitive advantage.</p>
                                </div>
                            </div>
                            </div>

                            <div class="col-lg-4 my-3">
                            <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                    <h5 class="card-title my-2">Strategic Insurance Consulting</h5>
                                    <div class="card-body p-0">
                                        <p class="card-text mb-0">Insurance Consulting Services provide strategic guidance to insurers across product development, operations, compliance, digital transformation, and customer experience. These services help insurers navigate market shifts, optimize performance, manage risk, and implement innovative, future-ready business models.</p>
                                    </div>
                            </div>
                            </div>

                            <div class="col-lg-4 my-3">
                            <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                    <h5 class="card-title my-2"> Legacy System Modernization</h5>
                                    <div class="card-body p-0">
                                        <p class="card-text mb-0">Legacy System Modernization for Insurance involves upgrading outdated core platforms to modern, cloud-based, and API-enabled systems. It improves agility, reduces maintenance costs, enhances customer experience, and supports digital initiatives like real-time data processing, automation, and regulatory compliance.<p>
                                    </div>
                            </div>
                            </div>

                            <div class="col-lg-4 my-3">
                            <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                    <h5 class="card-title my-2">Data Architecture and ML Integration</h5>
                                    <div class="card-body p-0">
                                        <p class="card-text mb-0">Data Architecture and ML Integration focuses on designing scalable, efficient data frameworks that seamlessly integrate with machine learning models. This approach ensures the smooth flow of high-quality data, enabling accurate predictions, real-time insights, and enhanced decision-making in industries like insurance, finance, and healthcare.</p>
                                    </div>
                            </div>
                            </div>

                            <div class="col-lg-4 my-3">
                            <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                    <h5 class="card-title my-2">Concept Validation and MVP Build</h5>
                                    <div class="card-body p-0">
                                        <p class="card-text mb-0">Concept Validation and MVP Build focuses on testing an idea's viability through a proof of concept (POC), followed by the development of a Minimum Viable Product (MVP). This approach allows businesses to quickly assess market demand, refine features, and gather early user feedback before full-scale development.</p>
                                    </div>
                            </div>
                            </div>

                            <div class="col-lg-4 my-3">
                            <div class="card h-100 p-3" style="border: 1px solid #00406d;">
                                    <h5 class="card-title my-2">AI-Powered Insurance Assistant Creation</h5>
                                    <div class="card-body p-0">
                                        <p class="card-text mb-0">AI-Powered Insurance Assistant Creation involves developing intelligent virtual assistants that utilize artificial intelligence to handle customer inquiries, policy management, claims processing, and personalized recommendations. These assistants enhance customer experience, reduce operational costs, and improve response times in the insurance industry.</p>
                                    </div>
                            </div>
                            </div>



                    </div>
                </div>
            </section>
            <!---------------------------  our services end ------------------------->

            <!------------------------------ insurance workflows start ------------------------->
             <section class="insurance-workflow">
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class=""> Insurance Workflow Automation for Efficiency</h3>
                </div>
                <div class="my-5">
                <div class="" style="border-bottom: 1px solid #00406d;padding: 20px 0;" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row" >
                            <div class="col-lg-3 d-flex justify-content-between" >
                                <h5> Policy Management</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9">
                                <p> Policy management in insurance involves the administration of policy lifecycle activities, including issuance, endorsements, renewals, cancellations, and record updates. Automating this process ensures accuracy, improves customer service, and reduces operational costs. It enables real-time updates, document generation, compliance tracking, and seamless integration with underwriting and claims systems for efficient policy handling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="" style="border-bottom: 1px solid #00406d;padding: 20px 0;" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-between" >
                                <h5> Claims Processing </h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9">
                                <p> Claims processing is the end-to-end procedure insurers follow to receive, evaluate, and settle claims filed by policyholders. Automation streamlines this process by enabling digital claim submission, document verification, fraud detection, and rules-based assessments. This reduces turnaround time, enhances accuracy, and improves customer satisfaction while minimizing manual intervention and operational costs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="" style="border-bottom: 1px solid #00406d;padding: 20px 0;" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-between" >
                                <h5> Policy Underwriting</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9">
                                <p> Policy underwriting is the process insurers use to assess risk and determine the terms and pricing of an insurance policy. Automated underwriting leverages data analytics, AI, and predefined rules to evaluate applications quickly and consistently. This improves decision accuracy, reduces processing time, minimizes human error, and enables scalable, real-time risk assessments for faster policy issuance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="" style="border-bottom: 1px solid #00406d;padding: 20px 0;" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-between" >
                                <h5> Insurance Compliances </h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9">
                                <p> Insurance compliances refer to the regulatory and legal requirements insurers must follow to operate lawfully. This includes adherence to industry regulations, data protection laws, financial reporting standards, and customer disclosure norms. Automation helps ensure timely reporting, real-time monitoring, audit trails, and reduced risk of non-compliance, enhancing transparency, accountability, and operational integrity across insurance processes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="" style="border-bottom: 1px solid #00406d;padding: 20px 0;" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-between" >
                                <h5>Insurance Quoting</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9">
                                <p> Insurance quoting is the process of providing potential policyholders with estimated premiums based on their risk profile and coverage needs. Automated quoting systems use data inputs, predefined rules, and rating algorithms to generate instant, accurate quotes. This streamlines customer acquisition, reduces manual work, enhances pricing consistency, and improves the overall user experience through real-time responses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="" style="padding: 20px 0;" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-lg-3 d-flex justify-content-between" >
                                <h5> Document Management</h5>
                                <div class="vr d-lg-block d-none"></div>
                            </div>
                            <div class="col-lg-9">
                                <p> Document management in insurance involves the systematic handling of all documents related to policies, claims, underwriting, and compliance. Automation enables secure storage, easy retrieval, version control, and seamless sharing of documents. It reduces paper usage, minimizes errors, ensures regulatory compliance, and improves workflow efficiency by integrating with core insurance systems and digital platforms. </p>
                            </div>
                        </div>
                    </div>
                </div>
             </section>

            <!------------------------------ insurance workflows end ------------------------->


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
                                <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to
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

              <!------------------------------------ insurtech with ai start ----------------------------------------->
       <section>

        <div class="my-5">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-12 col-xl-5">
                    <div>
                        <h3> AI with InsurTech</h3>
                        {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                        <p class="mt-4"> Artificial Intelligence (AI) enhances InsurTech by making insurance smarter, faster, and more customer-centric. It automates processes, improves decision-making, and personalizes experiences across the insurance value chain. </p>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-7">
                    <h4> <strong> Key Applications: </strong> </h4>
                    <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Underwriting
                                </h5>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">AI analyzes large datasets to assess risk and price policies more accurately.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                   Claims Processing
                                </h5>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Automates claim filing, fraud detection, and damage estimation using AI and computer vision.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                   Customer Support
                                </h5>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Chatbots and virtual assistants provide 24/7 service and instant answers. </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                  Fraud Prevention
                                  </h5>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">AI detects abnormal patterns and flags potentially fraudulent activities.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                   Personalized Products
                                  </h5>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Recommends insurance based on behavior, location, or usage patterns.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                  Operational Efficiency
                                  </h5>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Reduces manual tasks through AI-driven automation and document processing.</div>
                                </div>
                              </div>

                          </div>
                    </div>

                </div>
            </div>
        </div>
       </section>

        <!------------------------------------ insurtech with ai end ------------------------------------------->

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
