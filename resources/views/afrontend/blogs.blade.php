@extends('afrontend/layout')
@section('page_title','Blogs | Web Development Company in India | Website Development Services in Vadodara')
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")
@section('container')
<style>
  body {
    background: #f1f1f1;
  }

  /* The laptop with borders */
  .laptop {
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transform: scale(.6) translate(-50%);
    /* Scaled down for a better Try-it experience (change to 1 for full scale) */
    transform: scale(.6) translate(-50%);
    /* Scaled down for a better Try-it experience (change to 1 for full scale) */
    left: 50%;
    position: absolute;
    width: 1366px;
    height: 800px;
    border-radius: 6px;
    border-style: solid;
    border-color: black;
    border-width: 24px 24px 80px;
    background-color: black;

  }

  /* The keyboard of the laptop */
  .laptop:after {
    content: '';
    display: block;
    position: absolute;
    width: 1600px;
    height: 60px;
    margin: 80px 0 0 -110px;
    background: black;
    border-radius: 6px;
  }

  /* The top of the keyboard */
  .laptop:before {
    content: '';
    display: block;
    position: absolute;
    width: 250px;
    height: 30px;
    bottom: -110px;
    left: 50%;
    -webkit-transform: translate(-50%);
    transform: translate(-50%);
    background: #f1f1f1;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    z-index: 1;
  }

  /* The screen (or content) of the device */
  .laptop .content {
    width: 1366px;
    height: 800px;
    overflow: hidden;
    border: none;
  }
</style>

<section>
  <div class="bg-holder overlay"
    style="background-image:url({{url('assets/img/blog.jpg')}});background-position:center bottom;"></div>
  <!--/.bg-holder-->
  <div class="container">
    <div class="row pt-6" data-inertia='{"weight":1.5}'>
      <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="overflow-hidden">
          <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Blogs</h1>
          <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
            <ol class="breadcrumb fs-1 ps-0 fw-bold">
              <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
      <div class="text-center mb-6">
        <h3 class="fs-2 fs-md-3 text-color">Our Blogs</h3>
        <hr class="short"
          data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
          data-zanim-trigger="scroll" />
      </div>
      <div class="container-fluid mt-5 mb-5">
    <div class="row">
    @foreach($blog as $prod)
      <div class="col-md-4" style="padding:bottom:10px;">	  
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="{{ asset('storage/media/')}}/{{$prod->imaage}}" alt="Card image cap" style="height:300px;">
          <div class="card-body">
            <h5 class="card-title text-color">{{$prod->title}}</h5>
            <p class="card-text"> <?php echo $msgTrimmed = mb_substr($prod->short_desc,0,130);?></p>
            <a href="{{url('blog')}}/{{$prod->slug}}" class="btn bg-primary text-white">Read More</a>
          </div>
        </div>
      </div>
	@endforeach
      </div>
    </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->

  
  </div>


</main>

@endsection