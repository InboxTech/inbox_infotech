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
          <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
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
      <div class="row my-5">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 mb-3">
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
            <div class="col-lg-6 mb-3">
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
            <!-- <div class="col-lg-4 my-3">
              <div class="card h-100 shadow">
              <div class="card-body px-5">
                <h5 class="mb-3">New Delhi</h5>
                <p class="mb-0 text-1100">1301 Naurang House<br />Cannaught Place-110001 <br />New Delhi,<br />India</p>
              </div>
              </div>
            </div>
            <div class="col-lg-4 my-3">
              <div class="card h-100 shadow">
              <div class="card-body px-5">
                <h5 class="mb-3">Bangalore</h5>
                <p class="mb-0 text-1100">EVOMA CO – working and<br />hotel,Old madras road,<br />KR Puram,Bangalore
                <br />560049 India</p>
              </div>
              </div>
            </div> -->
            <!-- </div> -->
            <!-- <div class="row align-items-stretch justify-content-center mb-4"> -->
            <div class="col-lg-6 mb-3">
              <div class="card h-100 shadow">
              <div class="card-body">
                <h5 class="mb-3 text-color">Vadodara</h5>
                <p class="mb-0 text-1100">Inbox Infotech Pvt Ltd,
                615- Supremus Vihav
                Building, Vadodara,
                Gujarat, India 390021</p>
              </div>
              </div>
            </div>
            <div class="col-lg-6 mb-3">
              <div class="card h-100 shadow">
              <div class="card-body ">
                <h5 class="text-color">Contact Details</h5>
                <div class="col-auto"><span class="fas fa-phone-alt" data-fa-transform="shrink-3"></span><a class="contact-link" href="tel:0265-2371137"> +91 9662398895 </a></div>
                <div class="col-auto"><span class="fas fa-phone-alt" data-fa-transform="shrink-3"></span><a class="contact-link" href="tel:+1-408-641-3739"> +1-408-641-3739</a></div>
                <div class="col-auto"><span class="far fa-envelope" data-fa-transform="shrink-3"></span><a class="contact-link"href="email:info@Inbox-infotech.com"> info@Inbox-infotech.com
                </a></div>
                <div class="col-auto"><span class="far fa-envelope" data-fa-transform="shrink-3"></span><a class="contact-link" href="email:hr@Inbox-infotech.com"> hr@Inbox-infotech.com</a></div>
              </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-lg-6">
        <div class="card shadow">
      <div class="card-body h-100 ">
        <h5 class="mb-3 text-color">Write to us</h5>
        <form action="{{url('contactus/form/submit')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-4">
            <div class="mb-4"><input class="form-control bg-white" type="text" name="name" placeholder="Your Name"
              required="required" /></div>
          </div>
          <div class="col-4">
            <div class="mb-4"><input class="form-control bg-white" type="email" name="email" placeholder="Email"
              required="required" /></div>
          </div>
          <div class="col-4">
            <div class="mb-4"><input class="form-control bg-white" type="tel" name="phone" placeholder="Phone"
              required="required" /></div>
          </div>
        </div>
       <div>
         <div class="mb-4"><textarea class="form-control bg-white" rows="9" name="message"
           placeholder="Enter your descriptions here..." required="required"></textarea></div>
         <input type="hidden" value="{{$_SERVER['REMOTE_ADDR']}}" name="ip">
         <button class="btn btn-md-lg bg-primary" type="Submit"> <span class="color-white fw-600">Send
           Now</span></button>
       </div>
        </form>
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
      </div>
      <div class="card mb-4">

      <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
          marginheight="0" marginwidth="0"
          src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=inbox infotech&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
          href="https://mcpenation.com/">Minecraft Website</a></div>
        <style>
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
        </style>
      </div>

      </div>
     
    </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

  </main><!-- ===============================================-->

@endsection