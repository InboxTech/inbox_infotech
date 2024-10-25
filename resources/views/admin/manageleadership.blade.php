@extends('admin.layout')

@section('title', 'Manage Team Members')

@section('psg', 'Active')

@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">
@if($id == '')
ADD
@else
Edit
@endif	
Team Members</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> Team Members
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
		<form action="{{url('/admin/leadership/manageleadership/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Name *</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="name" name="name" class="form-control" value="{{$name}}">
					<small class="form-text text-muted">Enter the Name</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Title *</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="title" name="title" class="form-control" value="{{$title}}">
					<small class="form-text text-muted">Enter the Designation</small>
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="textarea-input" id="long_details" name="long_details" class=" form-control-label">Full Description *</label>
				</div>
				<div class="">
				<textarea class="form-control" id="editor" name="details">{{$details}}</textarea>
			</div>
			</div>
			
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="file-input" class=" form-control-label">Photo</label>
				</div>
				<div class="col-12 col-md-6">
					<input type="file" id="photo" name="photo" class="form-control-file">
				</div>
				<div class="col-12 col-md-3">
				@if($photo!='')
                <a href="{{asset('storage/media/'.$photo)}}" target="_blank"><img width="100px" src="{{asset('storage/media/'.$photo)}}"/></a>
                @endif
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
		<a href="{{url('/admin/product/list')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
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
 var loop_count=1; 
   function add_more(){
       loop_count++;
       var html='<input id="paid" type="hidden" name="paid[]" ><div class="card" id="product_attr_'+loop_count+'"><div class="card-body"><div class="form-group"><div class="row">';

		html+='<div class="col-md-4"><label for="attr_image" class="control-label mb-1"> Image</label><input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false" ></div>';
		 html+='<div class="col-md-4"><label for="sku" class="control-label mb-1"> Image Name</label><input id="name" name="name[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
	   
       html+='<div class="col-md-4"><label for="attr_image" class="control-label mb-1"> &nbsp;&nbsp;&nbsp;</label><button type="button" class="btn btn-danger btn-lg" style="background-color:#C82333" onclick=remove_more("'+loop_count+'")><i class="fa fa-minus"></i>&nbsp; Remove</button></div>'; 
       html+='</div></div></div></div>';

       jQuery('#product_attr_box').append(html)
   }
   function remove_more(loop_count){
        jQuery('#product_attr_'+loop_count).remove();
   }
   
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