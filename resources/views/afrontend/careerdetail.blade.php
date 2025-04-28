@extends('afrontend/layout')
@foreach($carrers as $servicedetails)
@section('page_title',$servicedetails->position)
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")
@section('container')
 <section style="height: 340px;">
       <div class="bg-holder overlay" style="background-image:url({{url('/assets/img/background-2.jpg')}});background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6">
          <div class="col-md-6 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Career</h1>
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                <ol class="breadcrumb fs-1 ps-0 fw-bold">
                  <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-white" href="{{url('/careers')}}">Career</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$servicedetails->position}}</li>
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
	  <section class="bg-100">
        <div class="container">
		<div class="col-lg-12">
	<div class="card">
	<div class="card-header">
		<strong>Position Name : </strong> {{$servicedetails->position}} | <strong style="text-align:left;
">Last Date to Apply :</strong> {{$servicedetails->endmdate}}
	</div>
		<div class="card-body card-block">
		<div class="row form-group">
				<div class="col col-md-4">
					<label for="text-input" class=" form-control-label">Experience Required : {{$servicedetails->experience}}</label>
				</div>
				<div class="col col-md-4">
					<label for="text-input" class=" form-control-label">Join In : {{$servicedetails->joinin}}</label>
				</div>
				<div class="col col-md-4">
					<label for="text-input" class=" form-control-label">Salary : {{$servicedetails->salary}}</label>
				</div>
			</div>
			<br>
			<div class="row form-group">
				<small class="form-text text-muted"><b>Required Skill</b></small>
				<div class="col-12">
					<p>
					{{ $servicedetails->skill}}
					</p>
				</div>
			</div>
			<div class="row form-group">
				<small class="form-text text-muted"><b>Job Details</b></small>
				<div class="col-12">
				<br>
					<p>
					{!! $servicedetails->jobdescription !!}
					</p>
				</div>
			</div>
			<?php $new = str_replace(' ', '_', $servicedetails->position); ?>
			<div class="card-footer">
			<a class="btn btn-warning mt-3" href="{{url('/careers/apply')}}/{{$new}}/{{$servicedetails->id}}">Apply</a>   <a class="btn btn-warning mt-3" href="{{url('/careers')}}">Back</a>
			</div>
		</div>
		</div>
		</div>
	  <section>
</main>
@endforeach
@endsection