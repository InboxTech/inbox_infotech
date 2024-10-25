@extends('admin.layout')

@section('title', 'Manage User')

@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Manage User</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> User
	</div>

	<div class="card-body card-block">
		<form action="{{url('/admin/user/manageuser/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			
			

<div class="row form-group" style="padding-left:10px;">

<div class="col-md-6">
<small class="form-text text-muted">User Status</small>
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
<div class="col-md-6">
<small class="form-text text-muted">User Type</small>
<select name="users_type" id="users_type" class="form-control">
@if($users_type == '1')
<option value="1">Admin</option>
@elseif($users_type == '2')
<option value="2">Subscriber</option>
@elseif($users_type == '3')
<option value="3">HR</option>
@elseif($users_type == '4')
<option value="4">IT Support</option>
@else
<option value="0">Other</option>
@endif
<option value="1">Admin</option>
<option value="0">Other</option>
<option value="2">Subscriber</option>
<option value="3">HR</option>
<option value="4">IT Support</option>
</select>
</div>
</div>
		<div class="row form-group" style="padding-left:10px;">

<div class="col-md-3">
<small class="form-text text-muted">Name</small>
	<p class="form-control-static">{{$name}}</p>
</div>
<div class="col-md-3">
<small class="form-text text-muted">Email</small>
	<p class="form-control-static">{{$email}}</p>
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
<input type="hidden" name="id" value="{{$id}}">

<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="fa fa-dot-circle-o"></i> Submit
		</button>
		<a href="{{url('/admin/users/userlist')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
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