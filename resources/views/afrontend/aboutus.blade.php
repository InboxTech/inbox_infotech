@extends('afrontend/layout')
@section('page_title','Web Development Company in India | Website Development Services in Vadodara')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")


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

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100">
        <div class="container">
		@foreach($ceomessage as $msgt)
          <div class="row g-0">
            <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
              <div class="bg-holder rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0" style="background-image:url('{{ asset('storage/cmsimages')}}/{{$msgt->main_image}}');"></div>
              <!--/.bg-holder-->
            </div>
			
            <div class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
              <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <h5 data-zanim-xs='{"delay":0}'>{{$msgt->title}}</h5>
                <p class="my-4" data-zanim-xs='{"delay":0.1}'>{!!$msgt->long_details!!}</p>
                <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>{{$msgt->short_details}}</h5>
                <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>{{$msgt->nav_title}}</h6>
              </div>
            </div>
			@endforeach
          </div>
          <div class="row mt-6">
            <div class="col">
              <h3 class="text-center fs-2 fs-md-3">Company Overview</h3>
			  <h5 class="text-center">Discover Inbox</h5>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
			@foreach($compover as $compovers)
			<div class="row">
              <div class="col-6">
			  
			  <h5 class="fw-medium ms-3 mb-0">{{$compovers->title}}</h5>
			  <p style="padding-left:18px"><br><br>{{$compovers->short_details}}</p>
			  
			  </div>
				 <div class="col-6"><img src="{{ asset('storage/cmsimages')}}/{{$compovers->main_image}}" style="min-height:200px; background-position: top"/>
			  </div>
            </div>
            <div class="col-12">
              <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
			  <h5 class="fw-medium ms-3 mb-0">{{$compovers->nav_title}}</h5><br>
                <p class="column-lg-2 dropcap">{{$compovers->nav_description}}</p><br>
				<p style="padding-left:18px">{!!$compovers->long_details!!}</p>
              </div>
            </div>
			@endforeach
          </div>
  <div class="row mt-6">
            <div class="col">
              <h3 class="text-center fs-2 fs-md-3">Awards & Achievements</h3>
			  <h5 class="text-center">We are proud to be the holders of eminent industry awards that reflect our past contribution and excellence throughout the field.</h5>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
			
			<div class="row">
			@foreach($award as $compovers)
			  <div class="col-6">
			<center><img src="{{ asset('storage/media')}}/{{$compovers->image}}" style="min-height:200px; background-position: top"/></center><br>
			  <h5>{{$compovers->title}}</h5>
			  <p style="padding-left:15px;">{!!$compovers->description!!}</p>
			  </div>
			@endforeach
            </div>
          </div>
        
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
	<section class="bg-primary">
        <div class="container">
          <div class="row align-items-center text-white">
            <div class="col-lg-4">
              <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                </div>
                <div class="overflow-hidden">
                  <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to one of our advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
              <h5 class="text-white">I would like to discuss:</h5>
              <form action="{{url('contactus/form/submit')}}" method="post">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-6"><input class="form-control" type="text" name="name" placeholder="Your Name" aria-label="Your Name" /></div>
                  <div class="col-6"><input class="form-control" type="text" name="email" placeholder="Phone Number" aria-label="Phone Number" /></div>
                  <div class="col-6 mt-4"><input class="form-control" type="text"  name="message" placeholder="Subject" aria-label="Subject" /></div>
                  <input type="hidden" value="{{$_SERVER['REMOTE_ADDR']}}" name="ip">
				  <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Submit</button></div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
	  <section class="text-center">
        <div class="container">
          <div class="text-center">
            <h3 class="fs-2 fs-md-3">Things You Get</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/sharing.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creative Support</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We transform brands, grow businesses, and tell brand and product stories in a most creative way.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/mail.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creating Experiences</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We cover a large range of creative platforms and digital projects with one purpose: to create experiences.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/target.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We guide you through the pipelines that generate new products with higher potential and lower risk.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/world-globe.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Business Boosting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We provide energy-efficient and environmentally conservative solutions to our clients to boost their business.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/money.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Strategic Approach</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Based on solid strategic framework and real, relevant research, we create prototypes, not presentations.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('assets/img/icons/data-analytics.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Logistic Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give our clients hard hitting answers and focus hard on best opportunities.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
    </main><!-- ===============================================-->
    

@endsection