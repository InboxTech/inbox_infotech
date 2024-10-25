@extends('afrontend/layout')
@section('page_title',$position)
<?php $s1 = 'index,follow' ?>
<?php $s2 = 'The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more.' ?>
<?php $s3 = 'web development company,web design company,web application development,best web development company,web development company india,web development company vadodara' ?>
<?php $s4 = 'https://inboxtechs.com' ?>
@section('seo_noindex_tag',"$s1")
@section('seo_description',"$s2")
@section('seo_keyword',"$s3")
@section('seo_canonical',"$s4")
@section('container')
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
 <section style="height: 340px;">
      <div class="bg-holder overlay" style="background-image:url({{url('/assets/img/background-2.jpg')}});background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6">
          <div class="col-md-6 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Carrer</h1>
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                <ol class="breadcrumb fs-1 ps-0 fw-bold">
                  <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-white" href="{{url('/careers')}}">Carrer</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$position}}</li>
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
		<strong>Basic Form</strong> Job Application
	</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" style="color:#7fff00;">
<strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('fail'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
	<div class="card-body card-block">
		<form action="{{url('/jobapplication/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label"><b>Job</b></label>
					<label for="text-input" class=" form-control-label">Application for *</label>
				</div>
			</div>
			<div class="row form-group">

<div class="col-md-12">
<select name="jobid"  class="form-control">
<option value="{{$id}}">{{$position}}</option>
</select>
</div>
</div>
<br>
<div class="row form-group">
<div class="col col-md-3">
	<label for="text-input" class=" form-control-label"><b>Personal Data</b></label>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">First Name *</label>
<input type="text" class="form-control" name="first_name" required>
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Last Name *</label>
<input type="text"  class="form-control" name="last_name" required>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Citizenship *</label>
<input type="text"  class="form-control" name="citizenship" required>
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Date of birth *</label>
<input type="date"  class="form-control" name="date_of_birth" required>
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<label for="text-input" class=" form-control-label">Address *</label>
<input type="text"  class="form-control" name="address" required>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">ZIP Code *</label>
<input type="text"  class="form-control" name="zip_code" required>
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">City *</label>
<input type="text"  class="form-control" name="city" required>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">State *</label>
<input type="text"  class="form-control" name="state" required>
</div>
<div class="col-md-6">
<label for="text-input" class="form-control-label">Ready to reallocates *</label>
Yes <input type="radio" name="ready_to_reallocates" value="1" class="form-control-label" required>
No <input type="radio" name="ready_to_reallocates" Value="0" class="form-control-label" required>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Email Id *</label>
<input type="email"  class="form-control" name="email_id" required>
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Phone Number *</label>
<input type="phone"  class="form-control" name="phone_no" required>
</div>
</div>
<br>
<div class="row form-group">
<div class="col col-md-3">
	<label for="text-input" class=" form-control-label"><b>Application documents</b></label>
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Photo *</label>
<div class="col-12 col-md-3">
	<input type="file" name="photo" class=" form-control-label" required>
</div>
</div><br>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Curriculum vitae *</label>
<div class="col-12 col-md-3">
	<input type="file" name="resume" class=" form-control-label" required>
</div>
</div>
</div><br>
<div class="row form-group">
<div class="col col-md-3">
	<label for="text-input" class=" form-control-label"><b>Qualification</b></label>
</div>
</div><br>
<div class="table--no-card m-b-30">
<div class="row form-group">
<table class="table table-borderless table-data3">
	<thead style="background-color:#08324A;color:#fff">
		<tr>
			
			<th>Title</th>
			<th>Name Of Examination</th>
			<th>Name Of Institution</th>
			<th>Name Of University</th>
			<th>Passing Year</th>
			<th>CGPA</th>
		</tr>
	</thead>
	<tbody>
	<?php $a = 1;?>	   
		<tr>
			<td>10th</td>
			<td><input type="text"  name = "name_of_the_examination[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_boardoruniversity[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_institution[]" class="form-control"></td>
			<td><input type="text"  name = "year_of_passing[]" class="form-control"></td>
			<td><input type="text"  name = "cgpa[]" class="form-control"></td>
		</tr>
		<tr>
			<td>12th</td>
			<td><input type="text"  name = "name_of_the_examination[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_boardoruniversity[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_institution[]" class="form-control"></td>
			<td><input type="text"  name = "year_of_passing[]" class="form-control"></td>
			<td><input type="text"  name = "cgpa[]" class="form-control"></td>
		</tr>
			<tr>
			<td>Bachelor Degree</td>
			<td><input type="text"  name = "name_of_the_examination[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_boardoruniversity[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_institution[]" class="form-control"></td>
			<td><input type="text"  name = "year_of_passing[]" class="form-control"></td>
			<td><input type="text"  name = "cgpa[]" class="form-control"></td>
		</tr>
			<tr>
			<td>Master Degree</td>
			<td><input type="text"  name = "name_of_the_examination[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_boardoruniversity[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_institution[]" class="form-control"></td>
			<td><input type="text"  name = "year_of_passing[]" class="form-control"></td>
			<td><input type="text"  name = "cgpa[]" class="form-control"></td>
		</tr>
			<tr>
			<td>Any Other</td>
			<td><input type="text"  name = "name_of_the_examination[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_boardoruniversity[]" class="form-control"></td>
			<td><input type="text"  name = "name_of_the_institution[]" class="form-control"></td>
			<td><input type="text"  name = "year_of_passing[]" class="form-control"></td>
			<td><input type="text"  name = "cgpa[]" class="form-control"></td>
		</tr>			
	</tbody>
</table>
</div>
</div>
<br>
         
<div class="row form-group">
<div class="col col-md-3">
	<label for="text-input" class=" form-control-label"><b>Experience</b></label>
</div>
</div>
<br>
<div class="table--no-card m-b-30">
<div class="row form-group">
<table class="table table-borderless table-data3">
	<thead style="background-color:#08324A;color:#fff" >
		<tr>
			<th>SR.No</th>
			<th>Company Name</th>
			<th>Position</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Job Profile</th>
			<th>Reason For Job Change</th>
			<th></th>
		</tr>
	</thead>
			 @php 
             $loop_count_num=1;
			 $a = 1;
             @endphp
               
	<tbody  id="product_attr_box">
		<tr id="product_attr_{{$loop_count_num++}}">
		<td>{{$a++}}</td>
		<td><input type="text"  name = "company_name[]" class="form-control"></td>
		<td><input type="text"  name = "position[]" class="form-control"></td>
		<td><input type="date"  name = "start_date[]" class="form-control"></td>
		<td><input type="date"  name = "end_date[]" class="form-control"></td>		
		<td><input type="text"  name = "details[]" class="form-control"></td>
		<td><input type="text"  name = "reason_for_job_change[]" class="form-control"></td>		
		<td><button type="button" class="btn btn-success btn-sm" onclick="add_more()">Add</button></td>
		</tr>
	</tbody>
</table>
</div>
</div>
       
<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="far fa-share-square"></i> Submit
		</button>
		<a href="{{url('/admin/career/jobapplication/list')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
			<i class="fa fa-ban"></i> Reset
</span></a>
	</div>
</form>
</div>


</div>

		</div>
	  <section>
</main>

<script>
   var loop_count=1; 
   function add_more(){
       loop_count++;
       var html='<tr id="product_attr_'+loop_count+'"><td>'+loop_count+'</td><td><input type="text"  name = "company_name[]" class="form-control"></td><td><input type="text"  name = "position[]" class="form-control"></td><td><input type="text"  name = "details[]" class="form-control"></td><td><input type="date"  name = "start_date[]" class="form-control"></td><td><input type="date"  name = "end_date[]" class="form-control"></td><td><input type="text"  name = "reason_for_job_change[]" class="form-control"></td><td><button type="button" class="btn btn-success btn-sm" onclick="add_more()">Add</button></td></tr>'; 

       jQuery('#product_attr_box').append(html)
   }
   function remove_more(loop_count){
        jQuery('#product_attr_'+loop_count).remove();
   }
</script>
@endsection

