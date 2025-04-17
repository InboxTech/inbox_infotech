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
      <section class="bg-100 my-5">
        <div class="container">
	
          <!------------------------------------ company overview start --------------------------->
          <div class="row mt-6">
            <div class="col">
              <h3 class="text-center fs-2 fs-md-3">Company Overview</h3>
			  <h5 class="text-center">Discover Inbox</h5>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>

			@foreach($compover as $compovers)
			<div class="row align-items-center">
              <div class="col-lg-6 my-2">
			  
			  <h5 class="fw-medium ms-3 mb-0">{{$compovers->title}}</h5>
			  <p style="padding-left:18px; font-size: 1.3rem;"><br><br>{{$compovers->short_details}}</p>
			  
			  </div>
				 <div class="col-lg-6 my-2">
          <img src="{{ asset('storage/cmsimages')}}/{{$compovers->main_image}}" class="img-fluid"/>
			  </div>
            </div>
            {{-- <div class="col-12">
              <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
			  <h5 class="fw-medium ms-3 mb-0">{{$compovers->nav_title}}</h5><br>
                <p class="column-lg-2 dropcap">{{$compovers->nav_description}}</p><br>
				<p style="padding-left:18px">{!!$compovers->long_details!!}</p>
              </div>
            </div> --}}
			@endforeach
          </div>
<!------------------------------------------ company overview end ----------------------->

<!------------------------------------------mission vision values start ----------------------->

            <section class="my-5">
              <div>
                <div class="text-center mb-6">
                  <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem"> Mission Vision Values </h6>
                  <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>	
                <div>
                 <div class="row">
                   <div class="col-lg-4 my-2">
                     <div style="height: 100%;" class="border p-3">
                        <div style="width: 25%;">
                          <img src="{{asset('assets/img/icons/mission.png')}}" class="img-fluid">
                        </div>
                        <h4 class="my-3"> Our Mission </h4> 
                         <p style="font-size: 1.2rem;"> At Inbox Infotech, we envision a
                          world where technology goes beyond
                          existence to enrich lives and foster
                          community connections. We are
                          passionate about creating solutions that
                          simplify everyday tasks, spark creativity,
                          and empower businesses to thrive. Each
                          innovation is driven by our deep
                          commitment to building a brighter, more
                          inclusive future.
                             </p>
                     </div>
                   </div>
                   <div class="col-lg-4 my-2">
                    <div style="height: 100%;" class="border p-3">
                      <div style="width: 25%;">
                        <img src="{{asset('assets/img/icons/vision.png')}}" class="img-fluid">
                      </div>
                      <h4 class="my-3"> Our Vision </h4> 
                       <p style="font-size: 1.2rem;"> At the core of our vision is a future where technology makes life better and brings
                        people closer together. We are dedicated to developing solutions that simplify daily
                        tasks, ignite creativity, and enable businesses to flourish. Each innovation we create
                        is fueled by our commitment to building a brighter, more inclusive future for everyone.
                           </p>
                   </div>
                   </div>
                   <div class="col-lg-4 my-2">
                    <div style="height: 100%;" class="border p-3">
                      <div style="width: 25%;">
                        <img src="{{asset('assets/img/icons/value.png')}}" class="img-fluid">
                      </div>
                      <h4 class="my-3"> Our Values </h4> 
                       <p style="font-size: 1.2rem;"> We are a cohesive team that values dedication and excellence in every project
                        we take on. Our commitment to delivering exceptional software development
                        solutions is guided by our core values, which define our positive impact in the
                        offshore software development landscape.
                           </p>
                   </div>
                   </div>
                 </div>
                </div>
              </div>
            </section>

<!------------------------------------------mission vision values  end ----------------------->

<!------------------------------------------ core services start ----------------------->

           <section class="my-5">
             <div>
              <div class="text-center mb-6">
                <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem"> Core Services </h6>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
              </div>
               <div>
                <div class="row align-items-center">
                  <div class="col-lg-6 my-2">
                    <p class="lh-lg" style="font-size: 1.3rem;"> Empowering businesses with advanced websites and
                      apps that redefine digital experiences and craft your
                      digital future, we offer a full suite of services for digital
                      transformation. From mobile app and web development
                      to CRM & ERP solutions and cloud services, we keep
                      your business ahead. Our UI/UX/CX design ensures
                      seamless user experiences, while rigorous QA and
                      testing guarantee top-quality performance. Additionally,
                      our digital marketing strategies drive growth and
                      expertise in API & integrations ensures seamless
                      connectivity.
                      </p>
                  </div>
                  <div class="col-lg-6 my-2">
                     <div class="row align-items-center">
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/mobile_app_development.png')}}"class="img-fluid">
                        </div>
                        <p class="my-2"> Mobile App Development  </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/emerging_technology.png')}}"  class="img-fluid">
                          </div>
                          <p class="my-2"> Emerging Technology </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/web_development.png')}}"   class="img-fluid">
                          </div>
                          <p class="my-2"> Web Development </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/ai_ml_development.png')}}"  class="img-fluid">
                          </div>
                          <p class="my-2"> AI/ML Development </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/cloud_service.png')}}" class="img-fluid">
                          </div>
                          <p class="my-2"> Cloud Services </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/ui_ux_cx.png')}}"  class="img-fluid">
                          </div>
                          <p class="my-2"> UI/UX/CX </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                      <div class="border p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 5% auto;" >
                          <img src="{{asset('assets/img/icons/hire_remote_team.png')}}" class="img-fluid">
                        </div>
                        <p class="my-2"> Hire Remote Team </p>
                      </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/crm-erp.png')}}" class="img-fluid">
                          </div>
                          <p class="my-2"> CRM & ERP </p>
                        </div>
                      </div>
                      <div class="col-4 my-2">
                        <div class="border p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/cyber_security.png')}}" class="img-fluid">
                          </div>
                          <p class="my-2"> Cyber Security </p>
                        </div>
                      </div>

                     </div>
                  </div>
                </div>
               </div>
             </div>
           </section>

<!------------------------------------------ core services   end ----------------------->


<!------------------------------------------ Agile approach start ----------------------->

           <section class="my-5">
              <div>
                <div class="text-center mb-6">
                  <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem"> Agile Approach </h6>
                  <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>

                <div>
                  <div class="row">
                    <div class="col-lg-3 col-md-6 my-3">
                      <div style="height: 100%;" class="border p-3">
                        <div style="width: 25%; margin: 4% 0;">
                          <img src="{{asset('assets/img/icons/agile.png')}}" class="img-fluid">
                        </div>
                        <h4> Agile </h4>
                        <p style="font-size: 1.2rem;"> We utilize the adaptive Agile methodology
                          at its fullest. It focuses on continuously
                          improving processes. We emphasize on
                          the delivery of software at the end of
                          sprints while we utilize the Agile
                          methodology.</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                    <div style="height: 100%;" class="border p-3">
                      <div style="width: 25%; margin: 4% 0;">
                        <img src="{{asset('assets/img/icons/devops.png')}}" class="img-fluid">
                      </div>
                      <h4> DevOps </h4>
                      <p style="font-size: 1.2rem;"> A design process wherein we break the
                        project into phases such as:
                        Requirements, Design, Implementation,
                        Verification and Maintenance. We use it
                        for projects requiring no/a smaller
                        number of changes.
                        </p>
                    </div>
                  </div>
                    <div class="col-lg-3 col-md-6 my-3">
                      <div style="height: 100%;" class="border p-3">
                        <div style="width: 25%; margin: 4% 0;">
                          <img src="{{asset('assets/img/icons/scrum.png')}}" class="img-fluid">
                        </div>
                        <h4> Scrum </h4>
                        <p style="font-size: 1.2rem;"> A subset of agile that fits best for projects
                          with rapidly changing requirements. We
                          use it for its flexibility, and adaptability.
                          We undertake fixed-length sprints while
                          using Scrum for our clients.
                          </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                      <div style="height: 100%;" class="border p-3">
                        <div style="width: 25%; margin: 4% 0;">
                          <img src="{{asset('assets/img/icons/lean.png')}}" class="img-fluid">
                        </div>
                        <h4> Lean </h4>
                        <p style="font-size: 1.2rem;"> We use it for creating more value with
                          fewer resources. It emphasizes efficiency
                          optimization by eliminating waste,
                          advocating for a strong focus while we
                          learn from the customer themself.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </section>

<!------------------------------------------ Agile approach end ----------------------->


<!------------------------------------------ msg from ceo start   end ----------------------->

@foreach($ceomessage as $msgt)
<div class="row g-0 my-5">
  <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
    <div class="bg-holder rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0" style="background-image:url('{{ asset('storage/cmsimages')}}/{{$msgt->main_image}}');"></div>
    <!--/.bg-holder-->
  </div>

  <div class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
    <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <h5 data-zanim-xs='{"delay":0}'>{{$msgt->title}}</h5>
      <p class="my-4 lh-lg" style="font-size: 1.3rem;" data-zanim-xs='{"delay":0.1}'>{!!$msgt->long_details!!}</p>
      <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>{{$msgt->short_details}}</h5>
      <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>{{$msgt->nav_title}}</h6>
    </div>
  </div>
@endforeach
</div>
<!------------------------------------------ msg from ceo end ----------------------->

<!--------------------------------------------------  Industries we serve start ---------------------------->

    <section class="my-5 industry-serve">
      <div>
        <div class="text-center mb-6">
          <h6 class="fs-2 fs-md-3" style="font-size: 2.368593037rem"> Industries We Serve  </h6>
          <p class="lh-lg" style="font-size: 1.2rem;"> As a Software Development Company, we understand every industry has its own set of challenges. We don't offer a one-size-fits-all solution.
            Instead, we focus on the unique risks, opportunities, and best practices of your domain. This allows us to craft agile and
            resilient IT solutions that are specifically tailored to your business needs. Let's build something strong together.
             </p>
          <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div>
          <div class="swiper myIndServeSwiper p-5">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                 <img src="{{asset('assets/img/icons/ecommerce.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Ecommerce </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 90%;">
                  <img src="{{asset('assets/img/icons/telecom_it.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Telecom & IT </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/manufacturing.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Manufacturing </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/business_automation.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Business Automation </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/healthcare.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Healthcare </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/property_management.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Property Management </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/startups.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> StartUps </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 70%;">
                  <img src="{{asset('assets/img/icons/market_places.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Market Places </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/mortgage.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Mortgage </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/sports_fitness.png')}}"  style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Sports & Fitness </p>
              </div>
              <div class="swiper-slide">
                <div style="height: 100%; width: 100%;">
                  <img src="{{asset('assets/img/icons/fintech.png')}}"  style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <p class="text-center"> Fintech </p>
              </div>
            </div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
            {{-- <div class="swiper-pagination"></div> --}}
          </div>
        </div>
      </div>
    </section>

<!--------------------------------------------------  Industries we serve end ---------------------------->

<!---------------------------------------------  Awards start ---------------------------->
  <div class="row mt-6">
            <div class="col">
              <h3 class="text-center fs-2 fs-md-3">Awards & Achievements</h3>
			  <h5 class="text-center">We are proud to be the holders of eminent industry awards that reflect our past contribution and excellence throughout the field.</h5>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
			
			<div class="row">
			@foreach($award as $compovers)
			  <div class="col-lg-6">
			<center><img src="{{ asset('storage/media')}}/{{$compovers->image}}" style="min-height:200px; background-position: top"/></center><br>
			  <h5>{{$compovers->title}}</h5>
			  <p style="padding-left:15px;">{!!$compovers->description!!}</p>
			  </div>
			@endforeach
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      



	<section class="bg-primary p-5 my-5">
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
	  <section class="text-center my-5">
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