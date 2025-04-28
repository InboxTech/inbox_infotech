@extends('afrontend/layout')
@section('page_title','About Us | Inbox Infotech Pvt. Ltd.')
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
      <section class="my-5">
        <div class="container">
	
          <!------------------------------------ company overview start --------------------------->
          <div class="row mt-6">
            <div class="col"  data-aos="fade-up"  data-aos-duration="1000">
              <h3 class="text-center text-color fs-2 fs-md-3">Company Overview</h3>
			  <p class="text-center">Discover Inbox</p>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>

			@foreach($compover as $compovers)
			<div class="row align-items-center" data-aos="fade-up"  data-aos-duration="1000">
              <div class="col-lg-6 my-2">
			  
			  <h5 class="fw-medium ms-3 mb-0 text-color">{{$compovers->title}}</h5>
			  <p style="padding-left:18px; font-size: 1.2rem;"><br><br>{{$compovers->short_details}}</p>
			  
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
                <div class="text-center mb-6"  data-aos="fade-up"  data-aos-duration="1000">
                  <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Mission Vision Values </h6>
                  <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>	
                <div>
                 <div class="row" data-aos="fade-up"  data-aos-duration="1000">
                   <div class="col-lg-4 my-2">
                     <div style="height: 100%;" class="card shadow p-3">
                        <div style="width: 25%;">
                          <img src="{{asset('assets/img/icons/svg_icons/Mission.svg')}}" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                          <h4 class=" text-color"> Our Mission </h4> 
                           <p style="font-size: 1rem;"> At Inbox Infotech, we envision a
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
                   </div>
                   <div class="col-lg-4 my-2">
                    <div style="height: 100%;" class="card shadow p-3">
                      <div style="width: 25%;">
                        <img src="{{asset('assets/img/icons/svg_icons/vision.svg')}}" class="img-fluid">
                      </div>
                      <div class="card-body p-3">
                        <h4 class=" text-color"> Our Vision </h4> 
                         <p style="font-size: 1rem;"> At the core of our vision is a future where technology makes life better and brings
                          people closer together. We are dedicated to developing solutions that simplify daily
                          tasks, ignite creativity, and enable businesses to flourish. Each innovation we create
                          is fueled by our commitment to building a brighter, more inclusive future for everyone.
                             </p>

                      </div>
                   </div>
                   </div>
                   <div class="col-lg-4 my-2">
                    <div style="height: 100%;" class="card shadow p-3">
                      <div style="width: 25%;">
                        <img src="{{asset('assets/img/icons/svg_icons/Values.svg')}}" class="img-fluid">
                      </div>
                      <div class="card-body p-3">
                        <h4 class=" text-color"> Our Values </h4> 
                         <p style="font-size: 1rem;"> We are a cohesive team that values dedication and excellence in every project
                          we take on. Our commitment to delivering exceptional software development
                          solutions is guided by our core values, which define our positive impact in the
                          offshore software development landscape.
                             </p>

                      </div>
                   </div>
                   </div>
                 </div>
                </div>
              </div>
            </section>

<!------------------------------------------mission vision values  end ----------------------->

<!------------------------------------------ core services start ----------------------->

           <section class="my-5 core-service">
             <div>
              <div class="text-center mb-6" data-aos="fade-up"  data-aos-duration="1000">
                <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Core Services </h6>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
              </div>
               <div>
                <div class="row align-items-center"  data-aos="fade-up"  data-aos-duration="1000">
                  <div class="col-lg-6 my-2">
                    <p class="lh-lg" style="font-size: 1.1rem;"> Empowering businesses with advanced websites and
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
                     <div class="row " data-aos="fade-up"  data-aos-duration="1000">
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/Mobile_App.svg')}}"class="img-fluid">
                        </div>
                        <p class="my-2"> Mobile App <br> Development  </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/Emerging_Technologies.svg')}}"  class="img-fluid">
                          </div>
                          <p class="my-2"> Emerging <br> Technology </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/Web_Development.svg')}}"   class="img-fluid">
                          </div>
                          <p class="my-2"> Web <br>  Development </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/AI_ML_Development.svg')}}"  class="img-fluid">
                          </div>
                          <p class="my-2"> AI/ML <br> Development </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/Cloud_Services.svg')}}" class="img-fluid">
                          </div>
                          <p class="my-2"> Cloud <br> Services </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/UI_UX_CX.svg')}}"  class="img-fluid">
                          </div>
                          <p class="my-2"> UI/UX/CX </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                      <div class="core-service-name p-2 text-center" style="height: 100%;">
                        <div style="width: 40%;margin: 5% auto;" >
                          <img src="{{asset('assets/img/icons/svg_icons/Hire_Remote.svg')}}" class="img-fluid">
                        </div>
                        <p class="my-2"> Recruitment & <br> Staffing </p>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/CRM_ERP.svg')}}" class="img-fluid">
                          </div>
                          <p class="my-2"> CRM & ERP </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 my-2">
                        <div class="core-service-name p-2 text-center" style="height: 100%;">
                          <div style="width: 40%;margin: 5% auto;" >
                            <img src="{{asset('assets/img/icons/svg_icons/Cyber_Security.svg')}}" class="img-fluid">
                          </div>
                          <p class="my-2"> Cyber <br> Security </p>
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
                <div class="text-center mb-6" data-aos="fade-up"  data-aos-duration="1000">
                  <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Agile Approach </h6>
                  <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
                </div>

                <div>
                  <div class="row" data-aos="fade-up"  data-aos-duration="1000">
                    <div class="col-lg-3 col-md-6 my-3">
                      <div style="height: 100%;" class="card shadow p-3">
                        <div style="width: 25%; margin: 3% 0;">
                          <img src="{{asset('assets/img/icons/svg_icons/Agile.svg')}}" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                          <h4 class="text-color">  Agile </h4>
                          <p> We utilize the adaptive Agile methodology
                            at its fullest. It focuses on continuously
                            improving processes. We emphasize on
                            the delivery of software at the end of
                            sprints while we utilize the Agile
                            methodology.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                    <div style="height: 100%;" class="card shadow p-3">
                      <div style="width: 25%; margin: 3% 0;">
                        <img src="{{asset('assets/img/icons/svg_icons/DevOps.svg')}}" class="img-fluid">
                      </div>
                      <div class="card-body p-3">
                        <h4 class="text-color"> DevOps </h4>
                        <p> A design process wherein we break the
                          project into phases such as:
                          Requirements, Design, Implementation,
                          Verification and Maintenance. We use it
                          for projects requiring no/a smaller
                          number of changes.
                          </p>
                      </div>
                    </div>
                  </div>
                    <div class="col-lg-3 col-md-6 my-3">
                      <div style="height: 100%;" class="card shadow p-3">
                        <div style="width: 25%; margin: 3% 0;">
                          <img src="{{asset('assets/img/icons/svg_icons/Scrum.svg')}}" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                          <h4 class="text-color"> Scrum </h4>
                          <p> A subset of agile that fits best for projects
                            with rapidly changing requirements. We
                            use it for its flexibility, and adaptability.
                            We undertake fixed-length sprints while
                            using Scrum for our clients.
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-3">
                      <div style="height: 100%;" class="card shadow p-3">
                        <div style="width: 25%; margin: 3% 0;">
                          <img src="{{asset('assets/img/icons/svg_icons/Lean.svg')}}" class="img-fluid">
                        </div>
                        <div class="card-body p-3">
                          <h4 class="text-color"> Lean </h4>
                          <p> We use it for creating more value with
                            fewer resources. It emphasizes efficiency
                            optimization by eliminating waste,
                            advocating for a strong focus while we
                            learn from the customer themself.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </section>

<!------------------------------------------ Agile approach end ----------------------->


<!--------------------------------------------------  Industries we serve start ---------------------------->

<section class="my-5 industry-serve">
  <div>
    <div class="text-center mb-6" data-aos="fade-up"  data-aos-duration="1000">
      <h6 class="fs-2 fs-md-3 text-color" style="font-size: 2.368593037rem"> Industries We Serve  </h6>
      <p class="lh-lg" style="font-size: 1.2rem;"> As a Software Development Company, we understand every industry has its own set of challenges. We don't offer a one-size-fits-all solution.
        Instead, we focus on the unique risks, opportunities, and best practices of your domain. This allows us to craft agile and
        resilient IT solutions that are specifically tailored to your business needs. Let's build something strong together.
         </p>
      <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
    </div>
    <div>
      <div class="">
        <div class="row" data-aos="fade-up"  data-aos-duration="1000">
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto; ">
             <img src="{{asset('assets/inbox/industry_serve/Retail.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Retail </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
              <div style="width: 50%; margin: 5% auto;">
                <img src="{{asset('assets/inbox/industry_serve/Telecom.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
              </div>
              <p class="text-center"> Telecom  </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Manufacturing.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Manufacturing </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Professional_Service.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Legal Service </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Healthcare.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Healthcare </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Lending.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Lending </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style=" width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Logistics_Transpotation.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Logistics  </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
              <div style="width: 50%; margin: 5% auto;">
                <img src="{{asset('assets/inbox/industry_serve/Engineering_Construction.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
              </div>
              <p class="text-center"> Enginnering  </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Bank.png')}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Bank  </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
            <div style="width: 50%; margin: 5% auto;">
              <img src="{{asset('assets/inbox/industry_serve/Oil_Gas.png')}}"  style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p class="text-center"> Oil & Gas  </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
              <div style="width: 50%; margin: 5% auto;">
                <img src="{{asset('assets/inbox/industry_serve/Investment.png')}}"  style="width: 100%; height: 100%; object-fit: cover;">
              </div>
              <p class="text-center"> Investment </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 my-3">
            <div style="height: 100%;" class="card shadow pt-2">
              <div style="width: 50%; margin: 5% auto;">
                <img src="{{asset('assets/inbox/industry_serve/Insurance.png')}}"  style="width: 100%; height: 100%; object-fit: cover;">
              </div>
              <p class="text-center"> Insurance </p>
            </div>
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

<!------------------------------------------ msg from ceo start   end ----------------------->
<section class="my-5">
  @foreach($ceomessage as $msgt)
  <div class="card ">
    <div class="row shadow" data-aos="fade-up"  data-aos-duration="1000">
      <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
        <div class="bg-holder  rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0" style="background-image:url('{{ asset('storage/cmsimages')}}/{{$msgt->main_image}}');"></div>
        <!--/.bg-holder-->
      </div>
    
      <div class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
        <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <h5 class="text-color" data-zanim-xs='{"delay":0}'>{{$msgt->title}}</h5>
          <p class="my-4 lh-lg" style="font-size: 1.3rem;" data-zanim-xs='{"delay":0.1}'>{!!$msgt->long_details!!}</p>
          <h5 class="text-uppercase text-color mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>{{$msgt->short_details}}</h5>
          <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>{{$msgt->nav_title}}</h6>
        </div>
      </div>
  </div>
  @endforeach
  </div>

</section>
<!------------------------------------------ msg from ceo end ----------------------->


<!---------------------------------------------  Awards start ---------------------------->

  <div class="row mt-6">
            <div class="col" data-aos="fade-up"  data-aos-duration="1000"> 
              <h3 class="text-center text-color fs-2 fs-md-3">Awards & Achievements</h3>
			  <p class="text-center">We are proud to be the holders of eminent industry awards that reflect our past contribution and excellence throughout the field.</p>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>

			<div class=" my-5">
        <div class="row" data-aos="fade-up"  data-aos-duration="1000">
        @foreach($award as $compovers)
          <div class="col-lg-4 my-3">
            <div class="card shadow" style="height: 100%;">
              <div class="award-img mx-auto card-header">
                <img src="{{ asset('storage/media')}}/{{$compovers->image}}" style="min-height:200px; background-position: top"/>
              </div>
              <div class="card-body">
                <h5 class="text-color">{{$compovers->title}}</h5>
                <p style="padding-left:15px;">{!!$compovers->description!!}</p>
              </div>
            </div>
          </div>
        @endforeach
              </div>
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
				  <div class="col-6 mt-4"><button class="btn btn-primary w-100" type="submit">Submit</button></div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>

      <!------------------------------  things you know start ------------------------->
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
      </section>
      <!-- <section> things you know close ============================-->
      


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
    </main>
    <!-- ===============================================-->
    

@endsection