@extends('afrontend/layout')
@section('page_title', 'PharmaERP')
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
                            <img src="{{ asset('storage/media/products/banner/PharmaERP_banner.png') }}" alt="pharma erp" class="lcp-image" fetchpriority="high"  width="1920" height="1080" loading="lazy">
                        </div>
                        <!--/.bg-holder-->
                        <div class="container">
                            <div class="row min-vh-100 py-8 align-items-center justify-content-center"
                                data-inertia='{"weight":1.5}'>
                                <div class="col-sm-8 col-lg-8 px-5 px-sm-3"
                                    style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                                    <div class="overflow-hidden">
                                        <p class="fs-4 fs-md-5 lh-1 text-color banner-title fade-in-up">
                                            PharmaIQ(ERP) </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                          Comprehensive ERP software built for pharma companies to manage operations, compliance, and innovation.</p>
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
             <!-------------------------  about pharma iq start -------------------------->
             <section>
                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h2> About Us </h2>
                        </div>
                        <div class="col-lg-6">
                            <p> PharmaIQ is an advanced, AI-powered Enterprise Resource
                                Planning (ERP) system purpose-built for the
                                pharmaceutical industry. Designed to streamline the
                                complex operations of pharmaceutical R&D,
                                manufacturing, quality control, regulatory compliance, and
                                supply chain management, PharmaIQ integrates cuttingedge artificial intelligence to deliver intelligent automation,
                                predictive insights, and compliance-driven workflows.</p>
                        </div>
                    </div>
                </div>
             </section>
             <!-------------------------  about pharma iq end -------------------------->


        <!--------------- retail software dev services start --------------------->

        {{-- <section class="software-dev-service">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-color">Types of PharmaTech services we offer</h2>
                <p class="fw-light">Our retail software development services are designed to help businesses enhance their operations, boost customer satisfaction, and improve efficiency through cutting-edge technology solutions.
                </p>
            </div>
           <div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">


                <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Custom Software Development</h5>
                            </div>
                            <p> We develop custom software solutions designed to optimize pharmaceutical operations, streamline research and development processes, and enhance production management, ensuring efficiency, scalability, and regulatory compliance across all functions. </p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Clinical Trial Management Systems (CTMS)</h5>
                            </div>
                            <p> We provide Clinical Trial Management Systems (CTMS) that help pharmaceutical companies efficiently plan, track, and analyze clinical trials, improving data accuracy, regulatory compliance, and overall trial efficiency.</p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Regulatory Compliance Solutions </h5>
                            </div>
                          <p> Our Regulatory Compliance Solutions help pharmaceutical companies meet FDA, EMA, and global standards by automating documentation, tracking changes, and ensuring consistent adherence to industry regulations and quality requirements.</p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Data Analytics & AI</h5>
                            </div>
                           <p>  Our Data Analytics & AI solutions leverage big data and machine learning to accelerate drug discovery, uncover valuable patient insights, and enable predictive modeling for informed decision-making and personalized treatment development.</p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Pharmacovigilance Systems</h5>
                            </div>
                            <p> Our Pharmacovigilance Systems provide robust software to monitor, track, and analyze drug safety data, ensuring timely reporting of adverse events and compliance with regulatory requirements for patient safety.</p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Supply Chain & Inventory Management </h5>
                            </div>
                           <p>Our Supply Chain & Inventory Management systems optimize pharmaceutical logistics, streamline inventory control, and ensure efficient cold chain tracking, enhancing product availability, reducing waste, and maintaining compliance with regulatory standards. </p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">IoT & Automation Integration</h5>
                            </div>
                            <p>Our IoT & Automation Integration services provide smart devices and automation tools for pharmaceutical manufacturing, lab environments, and real-time monitoring, improving efficiency, accuracy, and operational control while reducing human error.</p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Cloud & Cybersecurity Solutions </h5>
                            </div>
                            <p> Our Cloud & Cybersecurity Solutions offer secure cloud platforms and advanced data protection services, ensuring the confidentiality, integrity, and compliance of sensitive healthcare and pharmaceutical data across all digital operations.</p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                <h5 class="text-color my-2">Mobile Health (mHealth) Apps</h5>
                            </div>
                          <p> Our Mobile Health (mHealth) Apps enable patients to track medications, access telehealth services, and monitor their health in real-time, empowering individuals to manage their well-being and stay connected with healthcare providers.</p>
                        </div>
                        </div>


                </div>
           </div>
        </section> --}}

        <!--------------- retail software dev services end --------------------->


        <!------------------------------  core modules start ----------------------------->

        <section>
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2> Core Modules </h2>
            </div>
            <div class="my-5">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Production Planning</h5>
                            <ul>
                                <li>Material Requirement Planning</li>
                                <li> Master Production Scheduling</li>
                                <li> Production Process Definition</li>
                                <li> Demand Management </li>
                                <li> Batch Manufacturing Practice </li>
                                <li> Raw Material Formulation </li>
                                <li> Packing Material Formulation</li>
                                <li> Material Planning </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Inventory Management</h5>
                            <ul>
                                <li>Inventory Planning</li>
                                <li> Warehouse Management</li>
                                <li> Bin Management </li>
                                <li>Material Inward / Outward</li>
                                <li> Physical Stock Verification </li>
                                <li> Physical Stock Verification</li>
                                <li> Stock Costing and Valuation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Material Management</h5>
                            <ul>
                                <li>Raw Material Indent</li>
                                <li> Packing Material Indent</li>
                                <li>Raw Material Issue</li>
                                <li>Packing Material Issue </li>
                                <li>Return Raw Material</li>
                                <li> Return Packing Material</li>
                                <li>Quality Assurance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Sales & Procurement</h5>
                            <ul>
                                <li>Supplier/ Vendor Management</li>
                                <li>Product Delivery & tracking</li>
                                <li>Quote to Receipt Management</li>
                                <li>Integration with Planning</li>
                                <li>Customer Management</li>
                                <li>Sales Management </li>
                                <li>Reduce Forecasting Errors</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Purchase Management</h5>
                            <ul>
                                <li>Supplier Evaluation </li>
                                <li>Request for Quote</li>
                                <li>Quote Comparison</li>
                                <li>Order Calling</li>
                                <li>Purchase Budget and Approval</li>
                                <li>Integrated with Planning Function </li>
                                <li> Supplier Order Management</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Quality Control</h5>
                            <ul>
                                <li>Raw Material Testing</li>
                                <li>Bulk/ Finish Goods Testing</li>
                                <li>Release Order</li>
                                <li>Transfer Slip </li>
                                <li> Tag Printing  </li>
                                <li> Rejection Order </li>
                                <li> Testing Req. Slip </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Finance & Accounting</h5>
                            <ul>
                                <li>General Ledger, Accounts Payable, Receivables </li>
                                <li>Trial Balance, Cash Flow</li>
                                <li> Debit Note/ Credit Note/ Cost</li>
                                <li>Automatic TAX Calculation</li>
                                <li> PDC & Outstanding </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5>Quality & Compliance Management</h5>
                            <ul>
                                <li> FDA Compliant </li>
                                <li>Quality Analysis and Control</li>
                                <li>Pre-process, Inprocess, Post-Process </li>
                                <li>Inventory & Stock QC </li>
                                <li>Lot movement as per GMP</li>
                                <li>Labels, MBR, BMR, SOPs and COA generation</li>
                                <li>Stability Testing, NC,CAPA and Adverse Event Reporting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card shadow h-100 p-3">
                            <h5> Reporting </h5>
                            <ul>
                                <li>Production Register</li>
                                <li>Consolidate Register</li>
                                <li>Yield Register</li>
                                <li>Packing Not Issue</li>
                                <li>Sample RegisterBulk/finish/Raw</li>
                                <li>Control Sample Register</li>
                                <li>Transfer register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------  core modules end ----------------------------->

    <!---------------------------------  key benefits start ----------------------------->
         <section class="">
                <div class="">
                    <div class="">
                        <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="text-color"> Key Benefits </h2>
                        </div>
                    </div>
                    <div class="my-5">
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-4 my-3">
                            <div class="card mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Regulatory Compliance Made Easy</h5>
                                </div>
                                <ul>
                                    <li> All core hospital dFDA 21 CFR Part 11</li>
                                    <li>GMP, GLP, GCP </li>
                                    <li>WHO, EMA, CDSCO compliant with unified, secure hospital system.</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Complete Batch & Lot Traceability</h5>
                                </div>
                                <ul>
                                    <li>Recalls</li>
                                    <li>Regulatory audits </li>
                                    <li>Quality investigations</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Integrated Quality Control & Assurance</h5>
                                </div>
                                <ul>
                                    <li>Automated inward, in-process, and final quality checks</li>
                                    <li> CAPA and deviation tracking </li>
                                    <li>SOP and CoA management Build a quality-first culture across your organization.</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Powerful Manufacturing Management </h5>
                                </div>
                                <ul>
                                    <li>BMR/BPR automation</li>
                                    <li>Formulation control (BOMs)</li>
                                    <li>Yield analysis</li>
                                    <li>Equipment calibration tracking</li>
                                    <li>Batch validation and costing</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Real-Time Inventory & Warehouse Control </h5>
                                </div>
                                <ul>
                                    <li>Live inventory updates</li>
                                    <li>Multi-location & cold-chain warehouse support</li>
                                    <li>Expiry & re-test alerts</li>
                                    <li> Barcode/RFID integration</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Smarter Procurement & Vendor Management</h5>
                                </div>
                                <ul>
                                    <li>Approved vendor list (AVL) enforcement</li>
                                    <li>Supplier audit logs</li>
                                    <li>Purchase planning based on actual demand</li>
                                    <li> Quality-based supplier rating </li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Built for Pharma, Not Generic</h5>
                                </div>
                               <ul>
                                <li>BMR/BPR automation</li>
                                <li>Formulation control (BOMs) </li>
                                <li>Yield analysis</li>
                                <li>Equipment calibration tracking</li>
                                <li> Batch validation and costing</li>
                               </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Executive Dashboards & Custom Reports</h5>
                                </div>
                               <ul>
                                <li>KPI dashboards (OTIF, yield %, rejection rate)</li>
                                <li>Regulatory and financial reports</li>
                                <li>Customizable analytics by role or department</li>
                               </ul>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                            <div class="card h-100 mb-4">
                                <div class="d-flex mb-2">
                                    <h5 class="text-color my-2">Role-Based Security & Audit Logs </h5>
                                </div>
                                <ul>
                                    <li>User-level access control</li>
                                    <li>Encrypted logins </li>
                                    <li>System-wide audit trails for 21 CFR Part 11 compliance</li>
                                </ul>
                            </div>
                            </div>

                        </div>
                    </div>
                 </div>
            </section>

    <!---------------------------------  key benefits end ----------------------------->

<!------------------------------------ our pharma start ------------------------->

   {{-- <section>
    <div class="my-5">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-6 my-3">
                <h3> Our Pharma Product </h3>
                <p> Our pharma product provides an extensive database of medicines, offering accurate and up-to-date information on drug composition, indications, dosage guidelines, side effects, and precautions. It is designed to support healthcare professionals, pharmacists, and consumers in making informed decisions about medication use. With a user-friendly interface and reliable content, the platform ensures quick access to essential drug details, enhancing safety, efficiency, and trust in pharmaceutical care and treatment management across various healthcare settings.</p>
            </div>
            <div class="col-lg-6 my-3">
                <div style="background-color: rgb(0, 217, 255);padding: 20px;">
                    <img src="{{ asset('assets/inbox/numina.png') }}" style="width: 100%;height: 80vh;"/>
                </div>
            </div>
        </div>
    </div>
   </section> --}}

<!------------------------------------ our pharma end ------------------------->


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
                                    alt="biotechnology" class="core-img" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                    alt="vaccine" class="core-img" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                    alt="dietary" class="core-img" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                    alt="veterinary" class="core-img" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                    alt="api" class="core-img" data-zanim-xs='{"delay":0}' loading="lazy"/>
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
                                    alt="nutraceuticals" class="core-img" data-zanim-xs='{"delay":0}' loading="lazy"/>
                            </div>
                            <div class="text-center">
                                <h5 class="" data-zanim-xs='{"delay":0.1}'>Nutraceuticals</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-----------------------------   industries covered end   ---------------------------->
              <!------------------------------------ pharmatech with ai start ----------------------------------------->
       <section>

        <div class="my-5">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-12 col-xl-5">
                    <div>
                        <h3> AI-POWERED FEATURES </h3>
                        {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                        <p> It refers to the integration of artificial intelligence technologies into the pharmaceutical industry to improve drug discovery, development, manufacturing, supply chain, and patient outcomes.
                        </p>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-7">
                    {{-- <h4> <strong> overview of how AI is transforming Pharmatech across various domains: </strong> </h4> --}}
                    <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                   Predictive demand planning
                                </h5>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                 <p>  Predictive demand planning in PharmaTech uses AI and data analytics to forecast product needs, optimize inventory, reduce waste, support compliance, and improve patient access to medications and technologies.</p> </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Anomaly detection in quality data
                                </h5>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p> Anomaly detection in quality data identifies deviations from normal patterns in pharmaceutical manufacturing, helping detect defects, process issues, or data integrity problems early to ensure compliance and safety.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                  Smart reordering and inventory optimization
                                </h5>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                   <p> Smart reordering and inventory optimization use real-time data and AI to automate stock replenishment, reduce excess inventory, prevent stockouts, and improve efficiency across the pharmaceutical supply chain.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    AI Chatbot for internal queries
                                  </h5>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p> An AI chatbot for internal queries streamlines employee support by instantly answering HR, IT, compliance, and operations questions, improving productivity, reducing response time, and ensuring consistent information across teams. </p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                   Intelligent alerts and compliance reminders
                                  </h5>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                   <p>  Intelligent alerts and compliance reminders use AI to notify staff of critical deadlines, regulatory updates, or process deviations, ensuring timely actions, reducing risks, and maintaining regulatory compliance in PharmaTech operations.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                   Real-time KPI dashboards
                                  </h5>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p> Real-time KPI dashboards provide live visibility into key performance indicators across production, quality, and supply chain, enabling faster decision-making, proactive issue resolution, and improved operational efficiency in PharmaTech.</p>
                                  </div>
                                </div>
                              </div>

                          </div>
                    </div>

                </div>
            </div>
        </div>
       </section>

        <!------------------------------------ pharmatech with ai end ------------------------------------------->
         <!------------------------------  things you know start ------------------------->
         <section class="my-5">
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
                                                    alt="scalable-solution" class="w-100 h-100" data-zanim-xs='{"delay":0}'  loading="lazy"/>
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
            </section>
            <!-- <section> things you know close ============================-->


        </div><!-- end of .container-->

        </div>

        </div>

    </main>
@endsection
