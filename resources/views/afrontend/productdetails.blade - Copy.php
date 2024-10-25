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
 <section style="height: 340px;">
      <div class="bg-holder overlay" style="background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6">
          <div class="col-md-6 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Products</h1>
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                <ol class="breadcrumb fs-1 ps-0 fw-bold">
                  <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-white" href="{{url('/products')}}">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$servicedetails->title}}</li>
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
   
<br>	 

 <section class="bg-100">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">{{$servicedetails->title}}</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
			<p class="lead">{{$servicedetails->short_desc}}  </p> 
		  @if($servicedetails->tax2 != '')
		  <p class="dropcap lead">{{$servicedetails->tax2}}</p> 
		  @endif
		   @if($servicedetails->tax3 != '')
		  <p class="dropcap lead">{{$servicedetails->tax3}}</p> 
	      @endif
		  @if($servicedetails->tax4 != '')
		  <p class="dropcap lead">{{$servicedetails->tax4}}</p> 
		  @endif
		   @if($servicedetails->tax5 != '')
		  <p class="dropcap lead">{{$servicedetails->tax5}}</p> 
		 @endif
		  <div class="row">
              <div class="col-6">
			  <p>{!!$servicedetails->long_desc!!}</p>
			  
			  </div>
				 <div class="col-6">
		<section class="py-0">
        <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
          <div class="swiper-wrapper">
			@foreach($slider as $list)
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('storage/media/'.$list->attr_image)}});"></div>
              <!--/.bg-holder-->
              <div class="container" style="width: 450px;height: 340px;">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'></h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'></p>
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
	  </div>
			<div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-warning mt-3" href="{{url('/contactus')}}">Contact Us</a></div>	 
            </div>
			</div>
		  </div>
		  
        </div><!-- end of .container-->
</section><!-- <section> close ============================-->
      
</main>
@endforeach
@endsection