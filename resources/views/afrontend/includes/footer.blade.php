<!-- ============================================-->
<footer>
  <section class="bg-primary">
    <div class="container">
      <div class="row" style="padding: 4% 0 2% 0;" >
        <!-- <div class="col-lg-4">
          <div class="bg-primary text-white p-5 p-lg-6 rounded-3">
            @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          <script>
          alert("{{ $error }}");
          </script>
        @endforeach
          </ul>
          </div>
        @endif
  
            <script>
              var msg = '{{Session::get('success')}}';
              var exist = '{{Session::has('success')}}';
              if (exist) {
                alert(msg);
              }
            </script>
            <h6 class="text-white fs-1 fs-lg-2 mb-1" style="font-size: 1.776889rem">Sign up for email alerts</h6>
            <p class="text-white">Stay current with our latest insights</p>
            <form class="mt-4" method="post" action="{{url('/emailsubscriber')}}">
              @csrf
              <div class="row align-items-center">
                <div class="col-md-7 pe-md-0">
                  <div class="input-group"><input class="form-control" type="email" name="email"
                      placeholder="Enter Email Here" required></div>
                </div>
                <div class="col-md-5 mt-3 mt-md-0">
                  <div class="d-grid"><button class="btn btn-warning" type="submit"><span
                        class="text-primary fw-semi-bold">Submit</span></button></div>
                </div>
              </div>
            </form>
          </div>
        </div> -->


        <div class="col-lg-3 ">
          <!-- <div class="row"> -->
          <div style="height: 100%;">
            <h5 class="text-white mb-3">Important Links</h5>
            <ul class="list-unstyled">
              <li class="my-2"><a class="text-white" href="{{url('/about-us')}}" role="button">About Us</a></li>
              <li class="my-2"><a class="text-white" href="{{url('/services')}}" role="button">All Services</a></li>
              <li class="my-2"><a class="text-white" href="{{url('/products')}}" role="button">All Products</a></li>
              <li class=""><a class="text-white" href="{{url('/industries')}}" role="button">All Industries </a>
              </li>
              <li class="my-2"><a class="text-white" href="{{url('/careers')}}" role="button">Careers</a></li>
              <li class="my-2"><a class="text-white" href="{{url('/blog')}}" role="button"> Blog</a></li>
              <li class="my-2"><a class="text-white" href="{{url('/contact-us')}}" role="button">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <h5 class="text-white mb-3"> Services </h5>
          <ul class="list-unstyled">
            @foreach($myservices as $index => $serv_data)
        <li class="my-2">
          <a href="{{url('/services')}}/{{$serv_data->slug}}" class="text-white"> {{$serv_data->title}}</a>
        </li>
      @endforeach
          </ul>
        </div>
        <div class="col-lg-3">
          <h5 class="text-white mb-3"> Headquarters </h5>
          <ul class="list-unstyled">
            <li class="mb-5">
              <a class="text-white"
                href="https://www.google.com/maps?q=615+Supremus+Vihav+Building,+Vadodara,+Gujarat,+India+390021"
                target="_blank">
                <p> India: Inbox Infotech Pvt Ltd, 615- Supremus Vihav Building,
                  Vadodara, Gujarat, India 390021 </p>
              </a>
            </li>
            <li class="mb-5">
              <a class="text-white"
                href="https://www.google.com/maps?q=1150+E+Yorba+Linda+Blvd,+Placentia,+CA+92870,+United+States"
                target="_blank">
                <p> USA: Inbox Infotech Pvt Ltd, 1150 E Yorba Linda Blvd, Placentia,
                  CA 92870, United States </p>
              </a>
            </li>
            <li class="mb-5">
              <a class="text-white" href="https://www.google.com/maps?q=RAKEZ,+Ras+al+Khaimah,+Dubai,+UAE"
                target="_blank">
                <p> Dubai: INBOX INFOTECH FZ-LLC, RAKEZ - Ras al Khaimah, Dubai </p>
              </a>
            </li>
          </ul>
        </div>
        <!-- <div class="col-lg-3">
          <div style="height: 100%;">
            <h6 class="text-white" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Social Links</h6>
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a class="text-decoration-none d-flex align-items-center"
                    href="https://www.linkedin.com/in/inbox-infotech/"> <span class="brand-icon me-3"><span
                        class="fab fa-linkedin-in"></span></span>
                    <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">
                      Linkedin</h6>
                  </a></li>
                <li class="mb-3">
                  <a class="text-decoration-none d-flex align-items-center"
                    href="https://twitter.com/Inbox_Infotech"> <span class="brand-icon me-3"><span
                        class="fab fa-twitter"></span></span>
                    <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">
                      Twitter</h6>
                  </a></li>
                <li class="mb-3">
                  <a class="text-decoration-none d-flex align-items-center"
                    href="https://www.facebook.com/InboxInfotech/"> <span class="brand-icon me-3"><span
                        class="fab fa-facebook-f"></span></span>
                    <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">
                      Facebook</h6>
                  </a></li>
  
              </ul>
          </div>
        </div> -->
        <div class="col-lg-3" style="padding-left: 6%;">
          <h5 class="text-white mb-3"> Contact Us </h5>
          <ul class="list-unstyled">
            <li class="mb-3">
              <a class="text-white" href="tel:+91 9662398895"><i class="fas fa-phone text-white"></i> +91 9662398895
              </a>
            </li>
            <li class="mb-3">
              <a class="text-white" href="mailto:info@Inbox-infotech.com">
                <i class="fas fa-envelope text-white "></i> info@Inbox-infotech.com
              </a>
            </li>
            <li class="mb-3">
              <a class="text-white" href="mailto:hr@Inbox-infotech.com">
                <i class="fas fa-envelope text-white "></i> hr@Inbox-infotech.com
              </a>
            </li>
            <li class="mb-3">
              <div class="d-flex align-items-center">
                <a class="text-decoration-none d-flex align-items-center"
                  href="https://www.linkedin.com/in/inbox-infotech/">
                  <i class="fab fa-linkedin-in text-white mx-2" style="font-size: 25px;"></i>
                </a>
                <a class="text-decoration-none d-flex align-items-center" href="https://twitter.com/Inbox_Infotech">
                  <i class="fab fa-twitter text-white mx-2" style="font-size: 25px;"></i>
                </a>
                <a class="text-decoration-none d-flex align-items-center"
                  href="https://www.facebook.com/InboxInfotech/">
                  <i class="fab fa-facebook-f text-white mx-2" style="font-size: 25px;"></i>
                </a>

              </div>
            </li>
          </ul>
        </div>
        <!-- <div class="row"> -->

        <!-- </div> -->

      </div>
      <!-- </div> -->
      <div class="row align-items-center opacity-85 text-white mb-3">
        <div class="col-lg-6 text-sm-start"><a href="{{url('/')}}"><img src="{{asset('logo.png')}}" alt="logo" /></a>
        </div>
        <div class="col-lg-6 mt-3 mt-sm-0 text-lg-end">
          <p class="lh-lg mb-0" style="font-weight: 500;">&copy; All Rights Reserved <?php echo date('Y');?> Inbox Infotech Pvt Ltd
          </p>
        </div>
      </div>
    </div>
    </div>


    <!-- </div> -->


    <!-- end of .container-->
  </section>
  <!-- <section> close ============================-->

</footer>