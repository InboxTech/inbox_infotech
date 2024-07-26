@extends('admin.layout')

@section('title', 'Manage CMS')

@section('CMS', 'Active')

@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">ADD CMS</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> CMS
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
		<form action="{{url('/admin/cms/managecms/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Page Name</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="page_name" name="page_name" placeholder="Like Home Page" class="form-control" value="{{$page_name}}">
					<small class="form-text text-muted">Enter the Page Name</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Page Title</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="title" name="title" placeholder="Enter Title" class="form-control" value="{{$title}}">
					<small class="help-block form-text">Please enter your page title</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="password-input" class=" form-control-label">Short Details</label>
				</div>
				<div class="col-12 col-md-9">
			<textarea class="form-control" id="short_details" placeholder="Enter the Description" name="short_details">{{$short_details}}</textarea>
		<small class="help-block form-text">Please enter a short details</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="textarea-input" id="long_details" name="long_details" class=" form-control-label">Full Description</label>
				</div>
				<div class="">
				<textarea class="form-control" id="editor" name="long_details">{{$long_details}}</textarea>
			</div>
			</div>
			
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="file-input" class=" form-control-label">Mian Image</label>
				</div>
				<div class="col-12 col-md-6">
					<input type="file" id="main_image" name="main_image" class="form-control-file">
				</div>
				<div class="col-12 col-md-3">
					@if($main_image != '')
					<a href="{{ asset('storage/cmsimages')}}/{{$main_image}}" target="_blank"><img src="{{ asset('storage/cmsimages')}}/{{$main_image}}" width= '100' height='100' class="img img-responsive" /></a>
					@endif
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="file-multiple-input" class=" form-control-label">Gallery Images</label>
				</div>
				<div class="col-12 col-md-6">
					<input type="file" id="galleryimages" name="galleryimages" multiple="" class="form-control-file">
				</div>
				<div class="col-12 col-md-3">
					@if($galleryimages != '')
					<a href="{{ asset('storage/cmsimages')}}/{{$galleryimages}}" target="_blank"><img src="{{ asset('storage/cmsimages')}}/{{$galleryimages}}" width= '100' height='100' class="img img-responsive" /></a>
					@endif
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Nav Title</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="nav_title" name="nav_title" placeholder="Enter Nav Title" class="form-control" value="{{$nav_title}}">
					<small class="help-block form-text">Please enter your Nav title</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="password-input" class=" form-control-label">Nav. Details</label>
				</div>
<div class="col-12 col-md-9">
			<textarea class="form-control" id="nav_description" placeholder="Enter the Description" name="nav_description">{{$nav_description}}</textarea>
		<small class="help-block form-text">Please enter a Nav. details</small>
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

<div class="col-md-3">
<small class="form-text text-muted">Created by</small>
	<p class="form-control-static">{{$createdby}}</p>
</div>
<div class="col-md-3">
<small class="form-text text-muted">Updated by</small>
	<p class="form-control-static">{{$updatedby}}</p>
</div>
<div class="col-md-3">
<small class="form-text text-muted">Created at</small>
	<p class="form-control-static">{{$created_at}}</p>
</div>
<div class="col-md-3">
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
		<a href="{{url('/admin/cms/cmslist')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
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