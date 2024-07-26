 <section style="background-color: #3D4C6F">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
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
			if(exist){
			  alert(msg);
			}
			</script>
              <h6 class="text-white fs-1 fs-lg-2 mb-1" style="font-size: 1.776889rem">Sign up for email alerts</h6>
              <p class="text-white">Stay current with our latest insights</p>
              <form class="mt-4" method="post" action="{{url('/emailsubscriber')}}">
			  @csrf
                <div class="row align-items-center">
                  <div class="col-md-7 pe-md-0">
                    <div class="input-group"><input class="form-control" type="email" name="email" placeholder="Enter Email Here" required></div>
                  </div>
                  <div class="col-md-5 mt-3 mt-md-0">
                    <div class="d-grid"><button class="btn btn-warning" type="submit"><span class="text-primary fw-semi-bold">Submit</span></button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-7 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-6 col-lg-6 text-white ms-lg-auto">
			  <h6 class="text-white" style="font-size: 1.333rem;letter-spacing: -0.05rem;"><u>Important Links</u></h6>
                <ul class="list-unstyled">
				  <li class="mb-3"><a class="text-white" href="{{url('/aboutus')}}" role="button">About Us</a></li>
				  <li class="mb-3"><a class="text-white" href="{{url('/services')}}" role="button">All Services</a></li>
				  <li class="mb-3"><a class="text-white" href="{{url('/products')}}" role="button">All Products</a></li>
				  <li class="mb-3"><a class="text-white" href="{{url('/industries')}}" role="button">All Industries </a></li>
				  <li class="mb-3"><a class="text-white" href="{{url('/careers')}}" role="button">Careers</a></li>
			      <li class="mb-3"><a class="text-white" href="{{url('/contactus')}}" role="button">Contact Us</a></li>				  
                </ul>
              </div>			  
              <div class="col-6 col-sm-6 ms-sm-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="https://www.linkedin.com/in/inbox-infotech/"> <span class="brand-icon me-3"><span class="fab fa-linkedin-in"></span></span>
                      <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Linkedin</h6>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="https://twitter.com/Inbox_Infotech"> <span class="brand-icon me-3"><span class="fab fa-twitter"></span></span>
                      <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Twitter</h6>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="https://www.facebook.com/InboxInfotech/"> <span class="brand-icon me-3"><span class="fab fa-facebook-f"></span></span>
                      <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Facebook</h6>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-google-plus-g"></span></span>
                      <h6 class="fs-0 text-white mb-0 d-inline-block" style="font-size: 1.333rem;letter-spacing: -0.05rem;">Google+</h6>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
   