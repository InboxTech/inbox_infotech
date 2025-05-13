@extends('afrontend/layout')
@section('page_title', 'Retail & E-commerce')
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
                                            Retail & E-commerce </p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                          Inbox is an IT solutions company offering e-commerce platforms with secure, scalable features, specializing in website development, payment integration, and custom software to support global, 24/7 online business operations. </p>
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



        <!--------------- retail software dev services start --------------------->

        <section class="software-dev-service">
            <div class="text-center">
                <h3 class="text-color">Avail Retail Software Development Services That Drive Value and Innovation</h3>
                <p class="fw-light">Our retail software development services are designed to help businesses enhance their operations, boost customer satisfaction, and improve efficiency through cutting-edge technology solutions.
                </p>
            </div>
           <div>
            <div class="row">


                <div class="col-lg-4 col-md-6 col-12 my-3">
                <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Custom E-commerce Solutions:</h5>
                            </div>
                            <ul>
                                <li> Design and development of scalable, user-friendly e-commerce platforms.</li>
                                <li> Seamless integration with payment gateways, shipping providers, and inventory management systems. </li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Point of Sale (POS) Systems:</h5>
                            </div>
                            <ul>
                                <li> Development of secure, real-time POS systems that integrate with sales and inventory.</li>
                                <li>Mobile POS capabilities for enhanced customer service.</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Inventory Management Software:</h5>
                            </div>
                            <ul>
                                <li> Real-time stock tracking and automated reordering.</li>
                                <li> Integration with POS systems for better inventory control and accuracy.</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Customer Relationship Management (CRM) Systems:</h5>
                            </div>
                            <ul>
                                <li>Tailored CRM solutions for managing customer data, improving marketing strategies, and building customer loyalty. </li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Order Management Systems (OMS):</h5>
                            </div>
                            <ul>
                                <li> Multi-channel order processing with real-time tracking and seamless integration across sales platforms.</li>
                                <li>Automated order fulfillment and return management.</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Mobile App Development for Retail:</h5>
                            </div>
                            <ul>
                                <li>Custom mobile apps to offer consumers a seamless shopping experience.</li>
                                <li>Features such as mobile payments, product browsing, and personalized offers.</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Payment Gateway Integration:</h5>
                            </div>
                            <ul>
                                <li> Secure and efficient payment gateway integration for smooth transactions.</li>
                                <li>Support for various payment methods, including digital wallets
                                     and credit card p-3 h-100ents.</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Supply Chain Management Software:</h5>
                            </div>
                            <ul>
                                <li>Tools to optimize logistics, vendor management, and delivery scheduling.</li>
                                <li>Real-time tracking and data analytics for supply chain optimization.</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-3">
                        <div class="card p-3 h-100">
                            <div class="d-flex mb-2">
                                {{-- <img src="{{asset('assets/inbox/SAP_Consultancy.png')}}" style="height: 35px; width:35px;" class="img-fluid"> --}}
                                <h5 class="text-color my-2">Retail Analytics & Reporting Tools:</h5>
                            </div>
                           <ul>
                            <li> Comprehensive analytics to track sales, customer behavior, and inventory performance.</li>
                            <li>Customizable reports to aid in decision-making and strategic planning.</li>
                           </ul>
                        </div>
                        </div>


                </div>
           </div>
        </section>

        <!--------------- retail software dev services end --------------------->


<!------------------------------------ our e-commerce development start ------------------------->

   <section>
    <div class="my-5">
        <div class="row">
            <div class="col-lg-6 my-3">
                <h3> Our E-commerce Development </h3>
                <p> Our ecommerce development is a user-friendly online platform that simplifies the purchase of school books and stationery. Users can easily browse and book items by school, grade, author name, store name, or publication, ensuring quick access to the exact materials they need. With verified content, ready-to-order class kits, secure payments, and reliable delivery, eClassmate makes school shopping fast, accurate, and stress-free.</p>
            </div>
            <div class="col-lg-6 my-3">
                <div style="background-color: hsl(0, 48%, 74%);padding: 20px;">
                    <img src="{{ asset('assets/inbox/eclassmate.png') }}" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>
   </section>

<!------------------------------------ our e-commerce development end ------------------------->


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
              <!------------------------------------ ecommerce with ai start ----------------------------------------->
       <section>

        <div class="my-5">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-12 col-xl-5">
                    <div>
                        <h3> Retail & eCommerce Powered by AI</h3>
                        {{-- <p> Transforming Financial Services with Intelligence & Automation</p> --}}
                        <p> Artificial Intelligence is reshaping the retail and eCommerce industry by delivering smarter, faster, and more personalized experiences. From intelligent product recommendations to automated inventory management, AI-driven tools are helping businesses streamline operations and enhance customer satisfaction.

                        </p>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-7">
                    <h4> <strong> Key AI Applications in Retail & eCommerce: </strong> </h4>
                    <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                   Personalized Recommendations
                                </h5>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">AI algorithms analyze browsing behavior, purchase history, and user preferences to suggest the most relevant products, increasing conversion rates and customer satisfaction.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Smart Search and Filtering
                                </h5>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Advanced AI search functions allow users to find products by keywords, author names, store names, publications, and more—making the shopping experience faster and more intuitive.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                   Chatbots and Virtual Assistants
                                </h5>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> AI-powered chatbots provide instant customer support, answer FAQs, guide users through product selection, and even assist in checkout—improving service availability and user engagement.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Dynamic Pricing and Promotions
                                  </h5>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">AI tools track market trends, competitor pricing, and user demand to automatically adjust pricing and suggest personalized discounts or deals in real-time.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                   Inventory Forecasting
                                  </h5>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Machine learning models predict product demand, helping retailers manage stock levels, reduce overstock or shortages, and improve supply chain efficiency.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                   Visual Search & Image Recognition
                                  </h5>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Customers can search using images, enabling a smoother discovery process for similar or exact match products—ideal for fashion, books, and stationery.</div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <h5 class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                   Fraud Detection and Secure Payments
                                  </h5>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body"> AI detects unusual buying patterns and helps prevent fraudulent transactions, ensuring secure eCommerce environments.</div>
                                </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
       </section>

        <!------------------------------------ ecommerce with ai end ------------------------------------------->
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
