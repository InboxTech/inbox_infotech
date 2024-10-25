@extends('customer.layout')

@section('title', 'Update Account Details')

@section('main')
<br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Update Account Details</h3>
<div class="col-lg-12">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
<div class="card">
	<div class="card-header">
		<strong>Update</strong> Account Details
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
		<form action="{{url('customer/account/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">First Name</label>
			<input type="text"  name="firstname" class="form-control" value="{{$firstname}}">
			</div>
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">Last Name</label>
			<input type="text" name="lastname" class="form-control" value="{{$lastname}}">
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">Email ID</label>
			<input type="email"  name="email" class="form-control" value="{{$email}}" disabled>
			</div>
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">Phone Number</label>
			<input type="mobile" name="phone" class="form-control" value="{{$phone}}">
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">Gender</label><br>
			<input type="radio" name="gender" value="male" class="form-control" {{$gender == 'male' ? 'checked' : ''}}> Male
			<input type="radio" name="gender" value="female" class="form-control" {{$gender == 'female' ? 'checked' : ''}}> Female
			</div>
			<div class="col-md-3">
			<label for="text-input" class=" form-control-label">Photo</label>
			<input type="file" name="image" class="form-control">
			</div>
			<div class="col-md-3">
			@if($image != '')
				<a href="{{asset('storage/media/customer/'.$image)}}" target="_blank"><img src="{{asset('storage/media/customer/'.$image)}}" height="70px" width="70px"></a>
			@endif			
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">Address *</label>
			<textarea name="address" class="form-control"> {{$address}}</textarea>
			</div>
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">City *</label>
			<input type="text" name="city" class="form-control" value="{{$city}}">
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">State *</label>
			<input type="text"  name="state" class="form-control" value="{{$state}}">
			</div>
			<div class="col-md-6">
			<label for="text-input" class=" form-control-label">Country *</label>
			<input type="text" name="country" class="form-control" value="{{$country}}">
			</div>
			</div>
			<input type="hidden" name="id" value="{{$id}}">
<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="fa fa-dot-circle-o"></i> Submit
		</button>
		<a href="{{url('/customer/dashboard')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
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
//CKEDITOR.replace('editor');
</script>
@endsection