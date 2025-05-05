@extends('admin.layout')

@section('title', 'Manage Jobposting')

@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">ADD Jobposting</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> Jobposting
	</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('fail'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
	<div class="card-body card-block">
		<form action="{{url('/admin/career/jobposting/managejob/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Position Name</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="position" name="position" placeholder="Position Name" class="form-control" value="{{$position}}" required>
					<small class="form-text text-muted">Enter the position Name</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Join in</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="joinin" name="joinin" placeholder="Like immedate Joiner" class="form-control" value="{{$joinin}}" required>
					<small class="form-text text-muted">Enter join in time</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Salary for this position</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="salary" name="salary" placeholder="Enter Salary" class="form-control" value="{{$salary}}" required>
					<small class="help-block form-text">Please enter salary details for the above mentioned position</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Number of Openings</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
					<input type="number" id="no_openings" name="no_openings" placeholder="Enter Number of Openings" class="form-control" value="{{$no_openings}}" required>
					<small class="help-block form-text">Please enter Number of Openings in Number</small>
				</div>
			</div>
			{{-- <div class="row form-group">
				<div class="col col-md-3">
					<label for="file-input" class=" form-control-label">Image</label>
				</div>
				<div class="col-12 col-md-6">
					<input type="file" id="image" name="image" class="form-control-file">
				</div>
				<div class="col-12 col-md-3">
				@if($image!='')
                <a href="{{asset('storage/media/'.$image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/'.$image)}}"/></a>
                @endif
				</div>
			</div> --}}
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Experience Required</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="salary" name="experience" placeholder="Experience" class="form-control" value="{{$experience}}" required>
					<small class="help-block form-text">Please enter Experience Required details</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="password-input" class=" form-control-label">Job Description</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
			<textarea class="form-control" id="editor" placeholder="Job Description" name="jobdescription">{!! $jobdescription !!}</textarea>
			<small class="help-block form-text">Please enter Job Description details</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="textarea-input" id="skill" name="skill" class=" form-control-label">Required Skills</label><span class="text-danger">*</span>
				</div>
				<div class="col col-md-9">
				<textarea class="form-control"  name="skill" required>{{$skill}}</textarea>
			</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Start  Date</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
				<input type="date" id="startdate" name="startdate"  class="form-control" value="{{$startdate}}" required>
			</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">End Date</label><span class="text-danger">*</span>
				</div>
				<div class="col-12 col-md-9">
				<input type="date" id="endmdate" name="endmdate"  class="form-control" value="{{$endmdate}}" required>
			</div>
			</div>
			
@if($id != '')
<div class="row form-group" style="padding-left:10px;">
<div class="col col-md-3">
<label for="password-input" class=" form-control-label">Status</label>
</div>
<div class="col-md-6">
<select name="status" id="status" class="form-control">
@if($status == '1')
<option value="1">Active</option>
@else
<option value="0">Inactive</option>
@endif
@if($status == '1')
<option value="0">Inactive</option>
@else
<option value="1">Active</option>
@endif
</select>
</div>
</div>
		<div class="row form-group" style="padding-left:10px;">

<div class="col-md-4">
<small class="form-text text-muted">Created by</small>
	<p class="form-control-static">{{$postedby}}</p>
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
@endif
<input type="hidden" name="id" value="{{$id}}">
<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="fa fa-dot-circle-o"></i> Submit
		</button>
		<a href="{{url('/admin/career/jobposting/list')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
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