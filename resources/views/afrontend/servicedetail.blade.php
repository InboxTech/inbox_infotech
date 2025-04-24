@extends('afrontend/layout')
@foreach($service as $servicedetails)
@section('page_title',$servicedetails->title)
<?php $s1 = $servicedetails->noindex_tag; ?>
<?php $s2 = $servicedetails->meta_desc; ?>
<?php $s3 = $servicedetails->meta_tags; ?>
<?php $s4 = $servicedetails->con_tag;?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")
@section('container')
  <section class="py-0">
        <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
          <div class="swiper-wrapper">
			@foreach($slider as $list)
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('storage/media/'.$list->attr_image)}});">
			  </div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-12 col-lg-12 px-6 px-sm-6">
				  <div style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1 text-color" data-zanim-xs='{"delay":0}'>{{$list->name}}</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>{{$servicedetails->tax2}}
					  </p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="{{url('/about-us')}}">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="{{url('/contact-us')}}">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
				  </div>
                </div>
              </div>
            </div>
			@endforeach
          </div>
          <div class="swiper-nav">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
          </div>
        </div>
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
	 

 <section class="">
        <div class="container" style="background-color:#fff;border-radius: 10px;">
          <div class=" mb-6">
			<!-- <p class="px-lg-4 mt-3">Our service offerings are aligned to the changing world of our customers. Our portfolio of services range from designing strategy to delivering impact.</p> -->
      <h3 class="fs-2 fs-md-3 text-color text-center">{{$servicedetails->title}}</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          
            <div class="bg-white px-3 mt-6 px-0 py-5  rounded-3">
		  
		  <div class="row">
              <div class="col-lg-8">

			  <p style="text-align:left">{!! $servicedetails->short_desc !!}</p>
			  
			  </div>
				 <div class="col-lg-4"><img src="{{ asset('storage/media/')}}/{{$servicedetails->imaage}}" class="img-fluid" alt="{{$servicedetails->image_alt}}"/>
			  </div>
            </div>
			</div>
		  </div>
		  <p class="dropcap lead">{!!$servicedetails->long_desc!!}</p> 
		  <div style="display:none">
		  @if($servicedetails->tax2 != '')
		  <p class="lead text-color">{{$servicedetails->tax2}}</p> 
		  @endif
		   @if($servicedetails->slug != '')
		  <p class="dropcap lead">{{$servicedetails->slug}}</p> 
	      @endif
		  @if($servicedetails->tax4 != '')
		  <p class="dropcap lead">{{$servicedetails->tax4}}</p> 
		  @endif
		   @if($servicedetails->tax5 != '')
		  <p class="dropcap lead">{{$servicedetails->tax5}}</p> 
		 @endif
		 </div>
		 <br>
	 <br>
        </div><!-- end of .container-->
		
</section><!-- <section> close ============================-->
    
</main>
@endforeach
@endsection