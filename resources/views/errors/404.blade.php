@extends('afrontend/layout')

@section('container')
    <section style="height: 340px;" class="d-none">
        <div class="bg-holder overlay" style="background-position:center bottom;"></div>
        <div class="container">
            <div class="row pt-6">
                <div class="col-md-6 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'></h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">404 Page Not Found</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section>
 
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
	  <br>
	 

 <section class="bg-100">
        <div class="container">
          <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h1 class="m-0">404</h1>
              <h6>Page not found - inboxtechs.com</h6>
              <p>We did <span class="text-info">not found</span>, your <span class="text-info">requested</span> data.</p>
            </div>
          </div>
        </div>
      </div>
        </div><!-- end of .container-->
</section><!-- <section> close ============================-->
     <br>
</main>
@endsection