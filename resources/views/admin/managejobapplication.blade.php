@extends('admin.layout')

@section('title', 'Manage Job Application')

@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Manage Job Application</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> Job Application
	</div>

@if ($message = Session::get('fail'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
	<div class="card-body card-block">
		<form action="{{url('/admin/career/jobapplication/managejobapp/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label"><b>Job</b></label>
					<label for="text-input" class=" form-control-label">Application for *</label>
				</div>
			</div>
			<div class="row form-group">

<div class="col-md-12">
<select name="status" id="status" class="form-control">
<option>{{$position}}</option>
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
<label for="text-input" class=" form-control-label">First Name</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$first_name}}">
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Last Name</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$last_name}}">
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Citizenship</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$citizenship}}">
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Date of birth</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$date_of_birth}}">
</div>
</div>
<div class="row form-group">
<div class="col-md-12">
<label for="text-input" class=" form-control-label">Address</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$address}}">
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">ZIP Code</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$zip_code}}">
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">City </label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$city}}">
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">State</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$state}}">
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Ready to reallocates </label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="<?php if($ready_to_reallocates == '1') echo 'Yes' ?>">
</div>
</div>
<div class="row form-group">
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Email Id</label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$email_id}}">
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Phone Number </label>
<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$phone_no}}">
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
<label for="text-input" class=" form-control-label">Photo</label>
<div class="col-12 col-md-3">
	<a href="{{ asset('storage/media/')}}/{{$photo}}" target="_blank"><img src="{{ asset('storage/media/')}}/{{$photo}}" width= '100' height='100' class="img img-responsive" /></a>
</div>
</div>
<div class="col-md-6">
<label for="text-input" class=" form-control-label">Curriculum vitae</label>
<div class="col-12 col-md-3">
	<a href="{{ asset('storage/media/')}}/{{$resume}}" target="_blank"><img src="{{ asset('pdf.jfif')}}" width= '100' height='100' class="img img-responsive" /></a>
</div>
</div>
</div>
<br>
<div class="row form-group">
<div class="col col-md-3">
	<label for="text-input" class=" form-control-label"><b>Qualification</b></label>
</div>
</div>
<div class="table-responsive table--no-card m-b-30">
<div class="row form-group">
<table class="table table-borderless table-data3">
	<thead style="background-color:#08324A">
		<tr>
			<th>SR.No</th>
			<th>Name Of Examination</th>
			<th>Name Of Institution</th>
			<th>Name Of University</th>
			<th>Passing Year</th>
			<th>CGPA</th>
		</tr>
	</thead>
	<tbody>
	<?php $a = 1;?>
		@foreach($qualification as $list)
		<tr>
			<td>{{$a++}}</td>
			<td>{{$list->name_of_the_examination}}</td>
			<td>{{$list->name_of_the_boardoruniversity}}</td>
			<td>{{$list->name_of_the_institution}}</td>
			<td>{{$list->year_of_passing}}</td>
			<td class="process">{{$list->cgpa}}</td>
		</tr>
		@endforeach
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
<div class="table-responsive table--no-card m-b-30">
<div class="row form-group">
<table class="table table-borderless table-data3">
	<thead style="background-color:#08324A">
		<tr>
			<th>SR.No</th>
			<th>Company Name</th>
			<th>Position</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Job Profile</th>
			<th>Reason For Job Change</th>
		</tr>
	</thead>
	<tbody>
	<?php $a = 1;?>
		@foreach($applicant_exps as $list)
		<tr>
			<td>{{$a++}}</td>
			<td>{{$list->company_name}}</td>
			<td>{{$list->position}}</td>
			<td>{{$list->start_date}}</td>
			<td>{{$list->end_date}}</td>
			<td>{{$list->details}}</td>
			<td>{{$list->reason_for_job_change}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
<div class="row form-group">
	<div class="col col-md-3">
		<label for="text-input" class=" form-control-label"><b>Status</b></label>
	</div>
</div>
<div class="row form-group" style="padding-left:10px;">
<div class="col-md-12">
<select name="status" id="status" class="form-control">
@if($status == '1')
<option value="1">Pending</option>
@elseif($status == '2')
<option value="2">Screened</option>
@elseif($status == '3')
<option value="3">Rejected</option>
@elseif($status == '4')
<option value="4">Shortlisted</option>
@elseif($status == '5')
<option value="5">Hold</option>
@elseif($status == '6')
<option value="6">Need to discuss</option>
@endif
<option value="1">Pending</option>
<option value="2">Screened</option>
<option value="3">Rejected</option>
<option value="4">Shortlisted</option>
<option value="5">Hold</option>
<option value="6">Need to discuss</option>
</select>
</div>
</div>
<div class="row form-group">
	<div class="col col-md-3">
		<label for="text-input" class=" form-control-label"><b>Comment</b></label>
	</div>
</div>
<div class="row form-group">
	<div class="col col-md-12">
	<textarea class="form-control"  name="comment">{{$comment}}</textarea>
</div>
</div>
<input type="hidden" name="id" value="{{$id}}">
<div class="row form-group" style="padding-left:10px;">
<div class="col-md-4">
<small class="form-text text-muted">Updated by</small>
	<p class="form-control-static">{{$updatedby}}</p>
</div>
<div class="col-md-4">
<small class="form-text text-muted">Created at</small>
	<p class="form-control-static">{{$created_at}}</p>
</div>
<div class="col-md-4">
<small class="form-text text-muted">Update at</small>
	<p class="form-control-static">{{$updated_at}}</p>
</div>
</div>
<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="fa fa-dot-circle-o"></i> Submit
		</button>
		<a href="{{url('/admin/career/jobapplication/list')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
			<i class="fa fa-ban"></i> Reset
</span></a>
	</div>
</form>
</div>


</div>
</div>
</div>  
</div>                     
<script>
ClassicEditor
.create( document.querySelector( '#editor' ) )
.then( editor => {
console.log( editor );
} )
.catch( error => {
console.error( error );
} );
</script>
@endsection