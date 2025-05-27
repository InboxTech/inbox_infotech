@extends('afrontend/layout')
@section('page_title', 'Travel and Hospitality')
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
                        <div class="bg-holder"
                            style="background-image:url({{ asset('storage/media/Travel_Hospitality.png') }});">
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
                                            Smart Travel Solutions for the Modern World</p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class=" pt-4 mb-5 fs-1 fs-md-2 lh-xs text-color" data-zanim-xs='{"delay":0.1}'>
                                            Plan, book, and manage seamless travel experiences with real-time data and
                                            intelligent automation.</p>
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




            <!---------------------------  Overview start ------------------------->
            <section>
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h3> Overview </h3>
                </div>

                <div class="my-5">
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-6">
                            <p> Our travel technology platform is designed to simplify and elevate the entire travel
                                experience — from discovery and planning to booking and management. Whether you're a solo
                                traveler, a travel agency, a hotel chain, or a corporate travel manager, our solution
                                delivers a seamless, scalable, and intelligent way to handle all aspects of travel.</p>
                            <p> Built for individual travelers, tour operators, online travel agencies (OTAs), hospitality
                                providers, and corporate clients, our platform aggregates real-time data from global travel
                                systems to provide fast, flexible, and affordable booking options across flights, hotels,
                                transportation, and tour packages.</p>
                        </div>
                        <div class="col-lg-6">
                            <p> We address the major challenges in the travel industry — such as fragmented systems, limited
                                inventory visibility, manual processes, and lack of personalization — by offering a unified,
                                AI-driven platform that’s intuitive, efficient, and cost-effective.</p>
                            <p> With real-time integrations, intelligent search, and customizable tools, our platform
                                empowers users and businesses to make smarter travel decisions, increase conversions, and
                                deliver exceptional experiences at every step of the journey. </p>
                        </div>
                    </div>
                </div>

            </section>
            <!---------------------------  Overview end ------------------------->


            <!------------------------ core features start ----------------------->

            <section>
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h3> Core Features </h3>
                </div>
                <div class="my-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row" style="border-bottom: 1px solid #00406d;">
                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                                <div class="h-100 p-3 ">
                                    <h5> Flight/Hotel/Car Booking Engine </h5>
                                    <p> Our all-in-one booking engine offers a seamless and efficient way to search,
                                        compare, and book flights, hotels, and car rentals — all through a unified,
                                        user-friendly interface. Designed to streamline the travel planning process, it
                                        provides real-time data, intelligent search capabilities, and flexible booking
                                        options for both individual travelers and businesses. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Unified Search Experience </h5>
                                        <p> A single platform for booking flights, hotel stays, and car rentals with
                                            synchronized search results. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Real-Time Availability & Pricing </h5>
                                        <p> Integrated with global distribution systems (GDS), hotel channel managers, and
                                            car rental APIs for live inventory and accurate pricing. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Smart Filters & Sorting Options </h5>
                                        <p>Filter by airline, layovers, hotel star ratings, car type, pickup/drop-off
                                            location, amenities, and more. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Multi-Mode Travel Booking </h5>
                                        <p> Book one or more services (flight only, hotel + car, etc.) in a single checkout
                                            flow. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Dynamic Bundling & Discounts </h5>
                                        <p> Offer custom combinations (e.g., flight + hotel, hotel + car) with real-time
                                            dynamic pricing and package discounts. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Secure, Multi-Gateway Payments</h5>
                                        <p> Accept multiple payment methods securely, including cards, UPI, wallets, and
                                            global gateways like Stripe or PayPal. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Multi-Currency & Multi-Language Ready </h5>
                                        <p> Provide localized experiences for international users with support for various
                                            currencies and languages. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Instant Booking & E-Confirmations </h5>
                                        <p> Automated ticketing and reservation confirmations sent via email and SMS upon
                                            successful booking. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Mobile-Optimized & Responsive UI </h5>
                                        <p> Fully responsive booking engine for a smooth experience across desktop and
                                            mobile devices. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row" style="border-bottom: 1px solid #00406d;">
                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                                <div class="h-100 p-3 ">
                                    <h5> Real-Time Aggregation </h5>
                                    <p> Deliver lightning-fast, accurate travel search results with our real-time
                                        aggregation engine, built to match the speed and intelligence of global travel
                                        search leaders. Our platform collects and compares live data from hundreds of
                                        airlines, hotel providers, and car rental services, enabling users to find the best
                                        deals instantly — all in one place. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Live Price & Availability Comparison </h5>
                                        <p> Instantly aggregate data from multiple sources — including GDS systems, low-cost
                                            carriers, hotel APIs, and car rental services — to show real-time pricing and
                                            availability. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Multi-Supplier Integration </h5>
                                        <p> Seamlessly connect with multiple travel suppliers, OTAs, metasearch engines, and
                                            third-party APIs. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Fast, AI-Driven Search Engine</h5>
                                        <p>Built on scalable architecture for low-latency search results with AI-enhanced
                                            filtering and sorting. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Flexible Search Options </h5>
                                        <p> Support for flexible dates, nearby airports, alternate hotels, and car pickup
                                            locations to widen search results. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Fare & Rate Calendar View </h5>
                                        <p> Let users see the cheapest fares or rates across a calendar to make informed
                                            decisions. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Price Alerts & Watchlists </h5>
                                        <p> Notify users when prices drop for specific flights, hotels, or car rentals
                                            they’re watching. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Customizable Display Rules </h5>
                                        <p>Prioritize partners or preferred suppliers, set commission margins, or highlight
                                            best-value options. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Caching for Speed & Redundancy</h5>
                                        <p> Smart caching ensures fast repeat searches while maintaining up-to-date results.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row" style="border-bottom: 1px solid #00406d;">
                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                                <div class="h-100 p-3 ">
                                    <h5> Personalized Search & Filters </h5>
                                    <p> Deliver a more tailored and efficient travel planning experience with personalized
                                        search and intelligent filters. Our platform uses user preferences, search history,
                                        and real-time behavior to customize search results — helping travelers find the most
                                        relevant options quickly. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> User-Centric Search Experience </h5>
                                        <p> Dynamically adapt results based on user profile, past bookings, preferred
                                            airlines/hotels, budget range, and travel patterns. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Smart Filtering System</h5>
                                        <ul>
                                            Powerful, multi-layer filters across all categories:
                                            <li>Flights: Airline, stops, timings, fare type, baggage, refundability</li>
                                            <li>Hotels: Star rating, guest rating, amenities, location, price range</li>
                                            <li>Cars: Car type, vendor, pickup/drop-off time, fuel policy</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> AI-Based Sorting & Recommendations</h5>
                                        <p>Sort and suggest results using machine learning — e.g., "Best Value," "Shortest
                                            Trip," or “Most Popular.” </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Saved Preferences & Auto-Fill</h5>
                                        <p> Automatically populate search fields based on recent or frequent choices (e.g.,
                                            airports, hotel chains, car types).</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Multi-Destination & Complex Itinerary Support </h5>
                                        <p> Easily search for round-trip, one-way, or multi-city trips with customized
                                            filter options for each leg.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Map-Based Filtering (for Hotels & Cars) </h5>
                                        <p> Visual filtering by location, proximity to landmarks, or public transport. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Flexible Date Search</h5>
                                        <p>Let users search by flexible date ranges to find cheaper or better-suited
                                            options. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Mobile-Optimized Filtering UI</h5>
                                        <p> Easy-to-use filtering interface optimized for both mobile and desktop users.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row" style="border-bottom: 1px solid #00406d;">
                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                                <div class="h-100 p-3 ">
                                    <h5> Payment Gateway & Travel Wallet </h5>
                                    <p> Ensure smooth, secure, and flexible transactions with our integrated Payment Gateway
                                        and Digital Wallet system. Designed to support global and local payment methods, our
                                        platform makes the checkout experience fast, reliable, and user-friendly —
                                        increasing trust and boosting conversions. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Multiple Payment Methods </h5>
                                        <ul>
                                            Accept a wide range of payment options including:
                                            <li>Credit & Debit Cards (Visa, MasterCard, Amex, etc.)</li>
                                            <li> UPI, Net Banking, Mobile Wallets (Paytm, PhonePe)</li>
                                            <li>International Gateways (Stripe, PayPal, Razorpay, etc.)</li>
                                            <li> Buy Now, Pay Later (optional integration) </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Secure Transactions</h5>
                                        <p> PCI-DSS compliant system with SSL encryption, 3D Secure (OTP), and fraud
                                            detection protocols for safe payments. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Multi-Currency Support </h5>
                                        <p>Automatically detect and convert currency based on user location for
                                            international bookings. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Integrated Travel Wallet</h5>
                                        <p> Let users store credits, refunds, loyalty points, or promotional balances in a
                                            secure digital wallet for faster future bookings.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Instant Refunds & Cancellations</h5>
                                        <p>Enable quick refunds to the user’s wallet or original payment method, improving
                                            post-booking satisfaction.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Invoice & Tax Breakdown </h5>
                                        <p> Provide automated invoice generation with clear tax and fee breakdowns for both
                                            customers and B2B partners. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Wallet Top-Up Option</h5>
                                        <p>Allow users to preload funds into their travel wallet for faster checkout and
                                            special discounts. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Admin Controls & Reporting </h5>
                                        <p> Real-time monitoring, transaction history, and analytics dashboards for managing
                                            payments and tracking revenue. </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row" style="border-bottom: 1px solid #00406d;">
                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 100px; bottom: 100px; z-index: 0;">
                                <div class="h-100 p-3 ">
                                    <h5> Customer Account Portal </h5>
                                    <p> Empower travelers with a secure and intuitive Customer Account Portal that puts them
                                        in full control of their bookings, preferences, and travel documents. Designed for
                                        convenience and transparency, the portal ensures a smooth post-booking experience —
                                        improving user satisfaction and retention. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Centralized Booking Management</h5>
                                        <p>View, modify, or cancel flights, hotels, cars, and package bookings from one
                                            easy-to-use dashboard.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Downloadable Travel Documents</h5>
                                        <p> Access e-tickets, hotel vouchers, invoices, and itinerary details anytime, from
                                            any device. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Itinerary Overview </h5>
                                        <p>Clear and organized view of upcoming and past trips, with real-time updates on
                                            flight status or booking changes.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Profile & Preferences</h5>
                                        <p> Manage personal information, saved travel preferences (like meal choices or seat
                                            selection), and frequent flyer details.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Saved Payment Methods</h5>
                                        <p>Securely store and manage multiple payment options for faster checkout.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Wallet & Refund History</h5>
                                        <p> Track wallet balance, loyalty points, refunds, and bonus credits with full
                                            transaction history. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Notifications & Alerts</h5>
                                        <p>Receive updates on delays, cancellations, or special offers directly in the
                                            portal and via email/SMS.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Multi-Device Access </h5>
                                        <p> Fully responsive design for desktop, tablet, and mobile — accessible anytime,
                                            anywhere. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Security & Privacy Controls </h5>
                                        <p> Two-factor authentication, data privacy tools, and user controls to ensure
                                            account safety and GDPR compliance. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="border-bottom: 1px solid #00406d;">
                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 100px bottom: 100px; z-index: 0;">
                                <div class="h-100 p-3 ">
                                    <h5> Travel Alerts & Notifications </h5>
                                    <p> Keep your users informed and stress-free throughout their journey with real-time
                                        travel alerts and smart notifications. Whether it’s a gate change, a flight delay, a
                                        hotel check-in reminder, or a price drop, our alert system ensures your customers
                                        never miss an important update. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Real-Time Flight Alerts</h5>
                                        <p>Notify users of schedule changes, delays, cancellations, gate changes, and
                                            boarding times for flights.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Hotel & Car Booking Reminders</h5>
                                        <p> Send reminders for hotel check-in/out times, car pickup/drop-off details, and
                                            service availability. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5> Booking Confirmations & Updates </h5>
                                        <p>Automatic notifications for new bookings, payment confirmations, cancellations,
                                            or refund statuses.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Customizable Notification Preferences</h5>
                                        <p> Users can choose how and when they want to receive alerts — via email, SMS, push
                                            notifications, or in-app messages.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Travel Safety & Advisory Alerts</h5>
                                        <p>Share destination-specific advisories, COVID-19 guidelines, weather disruptions,
                                            or visa requirement updates (optional integration).</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Promotional & Price Drop Notifications</h5>
                                        <p> Notify users when there’s a deal, flash sale, or price drop on their watched
                                            routes or hotels. </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Multi-Channel Delivery</h5>
                                        <p>Seamless integration with email services, SMS gateways, and mobile push for
                                            timely delivery across devices..</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="h-100 p-3">
                                        <h5>Event-Based Triggers </h5>
                                        <p> Set alerts based on key milestones — 24-hour check-in reminders, last-minute
                                            offers, loyalty point expiry, etc. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!------------------------ core features end ----------------------->

            <!--------------------  solutions for diff user type start --------------------->
            <section>
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h3> Solutions for Different User Types</h3>
                </div>
                <div class="my-5">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <h5> Travelers</h5>
                                <p> Seamless, personalized travel planning.</p>
                                <p> Search, compare, and book flights, hotels, and cars in real-time with intelligent
                                    filters, secure payments, and instant confirmations — all in one place.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <h5> Travel Agencies</h5>
                                <p> Boost efficiency and expand offerings.</p>
                                <p> Access a white-label booking engine, manage multiple clients, track commissions, and
                                    integrate with multiple GDS and supplier APIs to offer a wide range of travel products.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <h5> Airlines & Hotels (Suppliers)</h5>
                                <p> Maximize reach and revenue.</p>
                                <p> Distribute inventory across global channels, manage real-time availability, offer
                                    dynamic pricing, and receive direct bookings through partner and B2C platforms.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="h-100 p-3" style="border: 1px solid #00406d;border-radius: 20px;">
                                <h5> Enterprises / Corporate Travel</h5>
                                <p> Simplify business travel management.</p>
                                <p> Enable employees to book compliant travel with predefined policies, approval workflows,
                                    expense tracking, and centralized reporting — all from a unified portal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--------------------  solutions for diff user type end --------------------->


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

            <!----------------------------------  industries we serve start --------------->
            {{-- <section class="iot-process">
            <div class="text-center">
                <h3> Industries we serve  </h3>
            </div>
           <div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 6% auto;">
                            <img src="{{ asset('assets/img/icons/svg_icons/hotel_resort.svg') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Hotel & Resort </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 6% auto;">
                            <img src="{{ asset('assets/img/icons/svg_icons/travel_agency.svg') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Travel Agencies </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 6% auto;">
                            <img src="{{ asset('assets/img/icons/svg_icons/airlines.svg') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Airlines & Transportation </p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 6% auto;">
                            <img src="{{ asset('assets/img/icons/svg_icons/tour_operator.svg') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Tour Operators </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 my-2">
                    <div class="tech-logo p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 6% auto;">
                            <img src="{{ asset('assets/img/icons/svg_icons/event_conference.svg') }}" class="img-fluid">
                        </div>
                        <p class="fw-medium"> Event & Conference Venue </p>
                    </div>
                </div>

            </div>
           </div>
          </section> --}}
            <!----------------------------------  industries we serve end --------------->

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
                                                <h5 class="" data-zanim-xs='{"delay":0.1}'>User-friendly Interface
                                                </h5>
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
