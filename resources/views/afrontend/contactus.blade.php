@extends('afrontend/layout')
@section('page_title', 'Contact Us For All your IT Solutions | Inbox Infotech Pvt. Ltd.')
@section('container')
    <section class="hero-banner">
        <div class="bg-holder overlay"
            style="background-image:url(assets/img/background-2.jpg);background-position:center center;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
                <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Contact</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->

    @if ($message = Session::get('success'))
        <div class="text-success" style="padding-top:50px;">
            <center>
                <strong>{{ $message }}</strong>
            </center>
        </div>
    @endif
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

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="contact">
            <div class="container">
                <!-- <div class="row my-5"> -->
                <div class="">
                    <div class="row my-5">
                        <div class="col-lg-4 mb-3">
                            <div class="card h-100 shadow">
                                <div class="card-body">
                                    <h5 class="mb-3 text-color">India</h5>
                                    <p class="mb-0 text-1100">Inbox Infotech Pvt Ltd,
                                        615- Supremus Vihav
                                        Building, Vadodara,
                                        Gujarat, India 390021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card h-100 shadow">
                                <div class="card-body">
                                    <h5 class="mb-3 text-color"> USA </h5>
                                    <p class="mb-0 text-1100"> Inbox Infotech Pvt Ltd,
                                        1150 E Yorba Linda Blvd,
                                        Placentia, CA 92870 United
                                        States
                                    </p>
                                    <!-- <div class="col-auto"><span class="fas fa-phone-alt" data-fa-transform="shrink-3"></span><a
            href="tel:+1-408-641-3739"> +1-408-641-3739</a></div> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card h-100 shadow">
                                <div class="card-body">
                                    <h5 class="mb-3 text-color"> Dubai </h5>
                                    <p class="mb-0 text-1100"> INBOX INFOTECH FZ-LLC, RAKEZ - Ras al Khaimah, Dubai
                                    </p>
                                    <!-- <div class="col-auto"><span class="fas fa-phone-alt" data-fa-transform="shrink-3"></span><a
            href="tel:+1-408-641-3739"> +1-408-641-3739</a></div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!-- </div> -->
                        <!-- <div class="row align-items-stretch justify-content-center mb-4"> -->

                        <div class="col-lg-4 mb-3">
                            <div class="card h-100 shadow">
                                <div class="card-body">
                                    <h5 class="mb-3 text-color">New Delhi</h5>
                                    <p class="mb-0 text-1100">1301 Naurang House<br />Cannaught Place-110001 <br />New
                                        Delhi,<br />India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card h-100 shadow">
                                <div class="card-body">
                                    <h5 class="mb-3 text-color">Bangalore</h5>
                                    <p class="mb-0 text-1100">EVOMA CO – working and<br />hotel,Old madras road,<br />KR
                                        Puram,Bangalore
                                        <br />560049 India
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="card h-100 shadow">
                                <div class="card-body ">
                                    <h5 class="text-color">Contact Details</h5>
                                    <div class="col-auto"><span class="fas fa-phone-alt"
                                            data-fa-transform="shrink-3"></span><a class="contact-link"
                                            href="tel:+91 9662398895"> +91 9662398895 </a></div>
                                    <div class="col-auto"><span class="fas fa-phone-alt"
                                            data-fa-transform="shrink-3"></span><a class="contact-link"
                                            href="tel:+1-408-641-3739"> +1-408-641-3739</a></div>
                                    <div class="col-auto"><span class="far fa-envelope"
                                            data-fa-transform="shrink-3"></span><a class="contact-link"
                                            href="mailto:info@Inbox-infotech.com"> info@Inbox-infotech.com
                                        </a></div>
                                    <div class="col-auto"><span class="far fa-envelope"
                                            data-fa-transform="shrink-3"></span><a class="contact-link"
                                            href="mailto:hr@Inbox-infotech.com"> hr@Inbox-infotech.com</a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row my-5">
                    <div class="col-lg-6 mb-5">
                        <div class="card shadow">
                            <div class="bg-white rounded-3 p-4 call-back-form">
                                <h5 class="mb-3 text-color">Write to us</h5>
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
                                        <div class="col-4 mt-3 mx-auto"><button class="btn btn-primary w-100"
                                                type="submit">Submit</button></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class=" mb-4">

                            <!-- <div class="mapouter"> -->
                            <!-- <div class="gmap_canvas"> -->
                            <div class="">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m19!1m12!1m3!1d41764.230499585334!2d73.12733069692024!3d22.298007754236604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m4!3e6!4m0!4m1!2sInbox%20Infotech%20Pvt%20Ltd%2C615-%20Supremus%20Vihav%20Building%2C%20Vadodara%2C%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Gujarat%2C%20India%20390021!5e0!3m2!1sen!2sin!4v1745554362893!5m2!1sen!2sin"
                                    width="100%" height="500" style="border:0;" allowfullscreen=""
                                    class="card shadow" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- <a href="https://mcpenation.com/">Minecraft Website</a> -->
                        </div>
                        <!-- <style>
                .mapouter {
                position: relative;
                text-align: right;
                width: 100%;
                height: 400px;
                }

                .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 100%;
                height: 400px;
                }

                .gmap_iframe {
                height: 400px !important;
                }
              </style> -->
                    </div>

                </div>
            </div>

            </div>
            <!-- <div class="col-lg-4 my-3">
          <div class="card h-100 shadow">
          <div class="card-body px-5">
          <h5 class="text-color">Socials</h5>
          <a class="mt-2" href="https://www.linkedin.com/in/inbox-infotech/"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a>
          <a class="mt-2" href="https://twitter.com/Inbox_Infotech"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a>
          <a class="mt-2" href="https://www.facebook.com/InboxInfotech/"><span class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a>
          </div>
          </div>
          </div> -->
            <!-- </div> -->


            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

    </main><!-- ===============================================-->

@endsection
