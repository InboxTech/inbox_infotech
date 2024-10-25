@extends('customer.layout')

@section('title', 'Create Ticket')

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
 <br><br><br><br> 
 
 
 
<div class="main-content" style="padding-top: 60px;">
@if(Session::get('cust_status') != 1)
	 <div class="alert alert-danger">
<?php echo "You don't have a access, Kindly contact to Support Admin !"; ?>
</div>
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

@else
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">
@if($id == '')
ADD
@else
Edit
@endif	
Tickets</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form </strong> Manage Tickets
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
		<form action="{{url('/customer/supporttickets/manageticket/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
			<div class="col-md-3">
			<label for="text-input" class=" form-control-label">Ticket Subject *</label>
			</div>
			<div class="col-md-9">
			<input type="text" name="subject" class="form-control" value="{{$subject}}" required>
			</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Select Category *</label>
				</div>
				<div class="col-12 col-md-9">
				<select name="category_id" class="form-control" id="category" required>
				<option value=""> Select Category</option>
					@foreach($category as $list)
					@if($sub_categor_id == $list->id)
					<option value="{{$list->id}}" selected> {{$list->name}}</option>
					@endif
					<option value="{{$list->id}}"> {{$list->name}}</option>
					@endforeach
				</select>
				</div>
				
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Select Sub Category *</label>
				</div>
				<div class="col-12 col-md-9">
				<select class="browser-default custom-select" name="subcategory" id="subcategory" required>
					
                  </select>
				</div>
				
			</div>
			<div class="row form-group">
			<div class="col-md-3">
			<label for="text-input" class=" form-control-label">Ticket Description*</label>
			</div>
			<div class="col-12 col-md-9">
			<textarea id="editor"  name="message" class="form-control" rows="10" placeholder="Content..." class="form-control" required>{{$messager}}</textarea>
			</div>
			</div>
			<div class="row form-group">
			<div class="col-md-3">
			<label for="text-input" class="form-control-label">Upload Image*</label>
			</div>
			<div class="col-12 col-md-9">
			@if($image != '')
	  <a href="{{asset('storage/media/complaint/'.$image)}}" target="_blank"><img src="{{asset('storage/media/complaint/'.$image)}}" width="100px" height="100px"/></a>
  @endif
			<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Image*</button>
	<div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" name="image" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
  
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
</div>
</div>
<div class="row form-group">
<div class="col-md-3">
<label for="text-input" class=" form-control-label">Alternet Contact Number*</label>
</div>
<div class="col-md-9">
<input type="text" name="alternetcontactno" class="form-control" value="{{$alternetcontactno}}" required>
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
		<a href="{{url('/customer/supporttickets/showalltikcets')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
			<i class="fa fa-ban"></i> Reset
</span></a>
	</div>
</form>
</div>


</div>@endif
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
               url: "{{url('/customer/supporttickets/category')}}",
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