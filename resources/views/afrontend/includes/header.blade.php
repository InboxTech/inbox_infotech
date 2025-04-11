<div class="bg-primary py-3 d-none d-sm-block text-white fw-bold">
      <div class="container d-none">
        <div class="row align-items-center gx-4">
          <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2" data-fa-transform="grow-3"></span>402- A B C, C Square Building Sarabhai Campus,Vadodara, Gujarat</div>
          <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span class="far fa-envelope text-warning me-2" data-fa-transform="grow-3"></span>support@inboxtechs.com</div>
          <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:0265-2371137">0265-2371137</a></div>
          <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:+1-408-641-3739">+1-408-641-3739</a></div>
        </div>
      </div>
    </div>
    <div class="sticky-top navbar-elixir">
      <div class="container">
        <nav class="navbar navbar-expand-lg" style="padding-top: 0px; padding-bottom: 0px;"> 
		<div class="collapse navbar-collapse" id="primaryNavbarCollapse">
		<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('inbox-logo.png')}}" alt="logo" height="50px"/></a><button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
		</div>
          <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
            <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
              <li class="nav-item dropdown"><a class="nav-link" href="{{url('/')}}" role="button">Home</a></li>
			  <li class="nav-item dropdown"><a class="nav-link" href="{{url('/about-us')}}" role="button">About Us</a></li>
			  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                <ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="{{url('/services')}}" role="button">All Services</a></li>
				  @foreach($myservices as $ms)
                  <li><a class="dropdown-item" href="{{url('/services')}}/{{$ms->slug}}">{{$ms->title}}</a></li>
				  @endforeach
                </ul>
              </li>
			  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="{{url('/products')}}" role="button">All Products</a></li>
				  <li><a class="dropdown-item" href="{{url('/products/voksen')}}" role="button">Voksen (AI Bot)</a></li>
				  @foreach($myproducts as $mp)
                  <li><a class="dropdown-item" href="{{url('/products')}}/{{$mp->slug}}">{{$mp->title}}</a></li>
				  @endforeach
                </ul>
              </li>
			  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Industries</a>
                <ul class="dropdown-menu">
				  <li><a class="dropdown-item" href="{{url('/industries')}}" role="button">All Industries </a></li>
				  @foreach($industries as $mp)
                  <li><a class="dropdown-item" href="{{url('/industries')}}/{{$mp->slug}}">{{$mp->title}}</a></li>
				  @endforeach
                </ul>
              </li>
			  <li class="nav-item dropdown"><a class="nav-link" href="{{url('/careers')}}" role="button">Careers</a></li>
			  <li class="nav-item dropdown"><a class="nav-link" href="{{url('/blog')}}" role="button">Blog</a></li>
			  <li class="nav-item dropdown"><a class="nav-link" href="{{url('/contact-us')}}" role="button">Contact Us</a></li>
			  
            </ul>
			   
    </div>
        </nav>
      </div>
    </div>
    