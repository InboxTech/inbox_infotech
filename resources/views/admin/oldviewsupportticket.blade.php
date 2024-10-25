@extends('admin.layout')

@section('title', 'Manage Tickets')

@section('psg', 'Active')

@section('main')

<style>
	
.file-upload {
  background-color: #ffffff;
  width: 677px;
  margin: 0 auto;
  padding-right: 20px;
  padding-bottom:30px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #08324A;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #08324A;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #C82333;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #08324A;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #08324A;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
	</style>
  
<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">View Tickets</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Tickets </strong> Details
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
		<form action="{{url('/admin/supporttickets/manageticket/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
			<div class="col">
			<label for="text-input" class=" form-control-label">Ticket Subject</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Project</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Customer</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Priority</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Alternet Contact Number</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$alternetcontactno}}">
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Email Id</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Status</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Category </label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Sub Category</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="">
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">TAT</label>
			<input type="text" id="disabled-input" disabled="" class="form-control" value="{{$approxclosetime}}">
			</div>
			</div>
			<div class="row form-group">
			<div class="col">
			<label for="text-input" class=" form-control-label">Description</label>
			<textarea id="editor"  name="message" class="form-control" rows="10" placeholder="Content..." class="form-control" disabled="">{{$messager}}</textarea>
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-4">			
			@if($image != '')
			<a href="{{asset('storage/media/complaint/'.$image)}}" target="_blank"><img src="{{asset('storage/media/complaint/'.$image)}}" width="100px" height="100px"/></a>
			@endif
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Created Time</label>
			<p class="form-control-static">{{$created_at}}</p>
			</div>
			<div class="col-md-4">
			<label for="text-input" class=" form-control-label">Update Time</label>
			<p class="form-control-static">{{$updated_at}}</p>
			</div>
</div>
<div class="row form-group">
<div class="col-md-3">
<label for="text-input" class=" form-control-label">Assign Ticket To*</label>
</div>
<div class="col-md-9">
<select name="assignticket" id="assignticket" class="form-control" required>
<option value="">Select User</option>
@foreach($users as $userslist)
@if($toassignuser_id == $userslist->id)
<option value="{{$userslist->id}}" selected>{{$userslist->name}}</option>
@endif	
<option value="{{$userslist->id}}">{{$userslist->name}}</option>
@endforeach
</select>
</div>
</div>			
@if($id != '')
<div class="row form-group">
			<div class="col-md-3">
			<label for="text-input" class=" form-control-label">Status</label>
			</div>
			<div class="col-md-9">
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
			<i class="fa fa-dot-circle-o"></i> @if($id != '')
												update
												@else
												Create
												@endif
												Ticket
		</button>
		<a href="{{url('/admin/supporttickets/list')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
			<i class="fa fa-ban"></i> Reset
</span></a>
	</div>
</form>
</div>


</div>
</div>
</div>  
</div> 
    <script src="{{asset('js/jquery.min.js')}}"></script>
            

   <script type = "text/javascript" >
   
   $(document).ready(function() {
	   var sel_cat_name = '{{$category_name}}';
	   var sel_cat_id = '{{$category_id}}';
	   $('#subcategory').append('<option value="'+sel_cat_id+'">'+sel_cat_name+'</option>');
       $('#category').on('change', function(e) {
           var cat_id = e.target.value;
		   //alert(cat_id);
		    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				 }
				});
           $.ajax({
               url: "{{url('/admin/supporttickets/category')}}",
               type: "POST",
               data: {
                   cat_id: cat_id
               },
               success: function(data) {
                   $('#subcategory').empty();
                   $.each(data,function(index,areaObj){
				   $('#subcategory').append('<option value="'+areaObj.id+'">'+areaObj.name+'</option>');
				});
               }
           })
       });
   }); 
    $(document).ready(function() {
	   var sel_cust_fname = '{{$firstname}}';
	   var sel_cust_lname = '{{$lastname}}';
	   var sel_cust_id = '{{$category_id}}';
	   $('#customers').append('<option value="'+sel_cust_id+'">'+sel_cust_fname+'_'+sel_cust_lname+'</option>');
       $('#project_id').on('change', function(e) {
           var cat_id = e.target.value;		   
		   //alert(cat_id);
		    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				 }
				});
           $.ajax({
               url: "{{url('/admin/supporttickets/projectcust')}}",
               type: "POST",
               data: {
                   cat_id: cat_id
               },
               success: function(data) {
                   $('#customers').empty();
                   $.each(data,function(index,areaObj,obj){
				   $('#customers').append('<option value="'+areaObj.id+'">'+areaObj.firstname+'_'+areaObj.lastname+'</option>');
				});
               }
           })
       });
   }); 
   
   function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

</script>
@endsection