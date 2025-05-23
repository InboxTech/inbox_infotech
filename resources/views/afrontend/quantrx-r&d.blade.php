@extends('afrontend/layout')
@section('page_title', 'PharmaR&D')
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
                        <div class="bg-holder" style="background-image:url({{ asset('storage/media/pharmar&d_banner.jpg') }});">
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
                                            QuantRX(R&D) </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                          A powerful solution that streamlines pharmaceutical research and development with centralized data, regulatory compliance, and real-time project tracking.</p>
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
             <!-------------------------  molecule to market start -------------------------->
             <section>
                <div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-6">
                            <h3> MOLECULE TO MARKET — AI THAT ACCELERATES DRUG DISCOVERY</h3>
                        </div>
                        <div class="col-lg-6">
                            <p> QuantRx is an AI-powered platform that transforms the pharmaceutical R&D lifecycle — from drug discovery to post-market surveillance. It
                                advanced analytics, machine learning, and realworld data to accelerate development, reduce costs,and improve success rates.</p>
                        </div>
                    </div>
                </div>
             </section>
             <!-------------------------  molecule to market end -------------------------->







            <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="row my-3" style="border-bottom: 1px solid #00406d;padding: 20px;">
                    <div class="col-lg-3 col-12">
                        <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h5 class="text-color">Drug Discovery</h5>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="h-100 p-3">
                                    <h5> Omics Data Analysis </h5>
                                    <p>Integrates genomics, proteomics, and transcriptomics data</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="h-100 p-3">
                                    <h5> Knowledge Graphs </h5>
                                    <p>Maps complex biological relationships for novel target discovery.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="h-100 p-3">
                                    <h5> Disease Association Modeling </h5>
                                    <p>Predicts gene-disease links using public databases</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="h-100 p-3">
                                    <h5> Virtual Screening </h5>
                                    <p>AI filters millions of compounds to identify promising candidates.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="h-100 p-3">
                                    <h5> Docking Score Prediction </h5>
                                    <p>Deep learning models forecast binding affinities to targets. </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="h-100 p-3">
                                    <h5> QSAR Modeling </h5>
                                    <p>Quantitative structure-activity relationship models to refine leads.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row my-3" style="border-bottom: 1px solid #00406d;padding: 20px;">
                        <div class="col-lg-3 col-12">
                            <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h5 class="text-color">Preclinical Development</h5>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> ADME Prediction </h5>
                                        <p>Forecast absorption, distribution, metabolism, and excretion properties using predictive models. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Bioavailability Analysis</h5>
                                        <p>Simulate how candidate drugs behave in the human body without lab testing.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Toxicity Classifiers </h5>
                                        <p>Identify hepatotoxicity, cardiotoxicity, and other safety risks using trained models. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Early Risk Flagging </h5>
                                        <p>Detect potential adverse effects before animal studies, reducing costly failures.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Compound Testing </h5>
                                        <p>Simulate drug interactions in digital models of biological systems. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Data Aggregation </h5>
                                        <p>Centralizes lab, assay, and predictive data for real-time insights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" style="border-bottom: 1px solid #00406d;padding: 20px;">
                        <div class="col-lg-3 col-12">
                            <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h5 class="text-color">Clinical Development</h5>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Trial Frameworks </h5>
                                        <p>Enable dynamic protocol adjustments based on real-time data. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Historical Trial Analytics</h5>
                                        <p>Used AI to learn from past trial data andrefine inclusion/exclusion criteria. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> EHR Mining </h5>
                                        <p>Extract eligibility criteria from unstructured clinical records </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Stratification Tools</h5>
                                        <p>Identify subpopulations with higher response potential for targeted recruitment. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Risk-Based Monitoring (RBM) </h5>
                                        <p>Automatically prioritize sites and patients for closer oversight. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Patient Response Analytics </h5>
                                        <p>Used machine learning to monitor biomarkers, treatment efficacy, and safety signals during trials.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" style="border-bottom: 1px solid #00406d;padding: 20px;">
                        <div class="col-lg-3 col-12">
                            <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h5 class="text-color">Formulation & Manufacturing</h5>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Physicochemical Stability </h5>
                                        <p>Forecast compound behavior over time under various conditions using machine learning. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Dosage Form </h5>
                                        <p>Recommend the best form (tablet,capsule, injectable) based on solubility,bioavailability, and patient profile.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Twin Simulations </h5>
                                        <p>Create virtual replicas of manufacturing processes to test changes without disrupting operations.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Process Control</h5>
                                        <p>Continuously optimize mixing, granulation, and drying steps for quality and efficiency. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Predictive Maintenance</h5>
                                        <p>Forecast equipment failures before they happen, minimizing downtime.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" style="border-bottom: 1px solid #00406d;padding: 20px;">
                        <div class="col-lg-3 col-12">
                            <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h5 class="text-color">Post-Approval & Pharmacovigilance</h5>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Signal Detection </h5>
                                        <p>Automatically identify potential adverse drug reactions (ADRs) from large-scale real-world data. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Multi-Source Integration </h5>
                                        <p>Aggregate data from EHRs, claims, registries, and social media platforms</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Predictive Risk Models </h5>
                                        <p>Anticipate safety concerns before they escalate using historical and real-time data. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Stratified Safety Analytics </h5>
                                        <p>Assess drug safety across diverse populations, geographies, and comorbidities. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" style="border-bottom: 1px solid #00406d;padding: 20px;">
                        <div class="col-lg-3 col-12">
                            <div class="sticky-top" style="top: 100px; z-index: 0;">
                            <h5 class="text-color">Data Infrastructure & Governance</h5>

                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Unified Data Repository </h5>
                                        <p>Integrates data across drug discovery,clinical trials, manufacturing, and postmarket surveillance. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Multi-Type Data Handling</h5>
                                        <p>Supports structured (e.g., lab data,EHRs) and unstructured (e.g., clinicalnotes, sensor data) formats.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Real-Time Ingestion Pipelines </h5>
                                        <p>Continuous data flow from lab systems, EDCs, LIMS, and external sources. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100 p-3">
                                        <h5> Industry Standards Support</h5>
                                        <p>Natively supports CDISC, HL7, FHIR, and OMOP formats. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

             <!-----------------------------   industries covered start   ---------------------------->

            <section class="" style="padding-top:50px; padding-bottom:50px;">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Industries we covered </h6>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/biotechnology.svg') }}"
                                    alt="icon" class="core-img" data-zanim-xs='{"delay":0}' />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'> Biotechnology </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/vaccine.svg') }}"
                                    alt="icon" class="core-img" data-zanim-xs='{"delay":0}' />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'> Vaccines </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/dietary.svg') }}"
                                    alt="icon" class="core-img" data-zanim-xs='{"delay":0}' />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'> Dietary </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/veterinary.svg') }}"
                                    alt="icon" class="core-img" data-zanim-xs='{"delay":0}' />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Veterinary</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/api.svg') }}"
                                    alt="icon" class="core-img" data-zanim-xs='{"delay":0}' />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>API</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="core-features-card">
                            <div class="core-features-round">
                                <img src="{{ asset('assets/img/icons/svg_icons/nutraceuticals.svg') }}"
                                    alt="icon" class="core-img" data-zanim-xs='{"delay":0}' />
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Nutraceuticals</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-----------------------------   industries covered end   ---------------------------->


              <!------------------------------------ pharma R&D with ai start ----------------------------------------->
       <section>

        <div class="my-5">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-12 col-xl-5">
                    <div>
                        <h3> AI Evolution in QuantRX </h3>
                        {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                        {{-- <p> It refers to the integration of artificial intelligence technologies into the pharmaceutical industry to improve drug discovery, development, manufacturing, supply chain, and patient outcomes.
                        </p> --}}

                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-7">
                    {{-- <h4> <strong> overview of how AI is transforming Pharmatech across various domains: </strong> </h4> --}}
                    <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Predictive Modeling
                                </h5>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                 <p>  For target-disease association, clinical trial outcomes, ADME/Tox prediction, and patient responses.</p> </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                   Classification Algorithms </h5>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p> Used in toxicity prediction (e.g., hepatotoxicity), regulatory risk detection, and adverse event categorization. </p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                  Clustering & Segmentation
                                </h5>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                   <p> Stratify patients, compound clusters, and manufacturing process behaviors.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Molecule Generation
                                  </h5>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p> Design novel compounds using SMILES-based GANs and variational autoencoders (VAEs). </p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                   Protocol Design
                                  </h5>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                   <p>  Auto-generate initial clinical trial protocols from historical benchmarks.</p>
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
       </section>

        <!------------------------------------  pharma R&D  with ai end ------------------------------------------->





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
