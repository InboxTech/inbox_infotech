@extends('afrontend/layout')
@foreach($product as $servicedetails)
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
              <div class="bg-holder" style="background-image:url({{asset('storage/media/blogs/'.$list->attr_image)}});">
			  </div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-12 col-lg-12 px-6 px-sm-6">
				  <div style="background-color: #ffffff88; padding:30px; border-radius: 10px;">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>{{$servicedetails->title}}</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>{{$servicedetails->tax2}}
					  </p>
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

 <section>
        <div class="container" style="background-color:#fff;border-radius: 10px;">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3 text-color">{{$servicedetails->title}}</h3>
		  </div>
		  <p class="dropcap lead">{!!$servicedetails->long_desc!!}</p>
		  <div style="display:none">
		  @if($servicedetails->tax2 != '')
		  <p class="lead">{{$servicedetails->tax2}}</p>
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
