@extends('admin.layout')

@section('title', 'Manage Tickets')

@section('psg', 'Active')

@section('main')
<script src="{{asset('js/ckeditor.js')}}"></script>
<style>
.ck-editor__editable_inline {
min-height: 200px;
}
</style>
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
 
<div class="main-content">
<div class="section__content section__content--p30" style="padding-right:5px;padding-left:5px;">
<div class="container-fluid">
<div class="row">
<div class="col-lg-9">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
   
	<div class="card-body">
		<form action="" method="post" novalidate="novalidate">
			<div class="form-group">
				<label for="cc-payment" class="control-label mb-1" style="  font-size: 22px; font-weight:bold; font-family:Roboto, sans-serif;">{{$subject}}</label>
				<div style="float: right !important;" class="btn btn-primary btn-sm active"><span class="badge badge-teal">
				@if($finalstatus == 0)
					Closed
				@elseif($finalstatus == 1)
					Active
				@elseif($finalstatus == 2)
					Reopen	
				@endif
				</span></div><br>
				<label for="cc-name" class="control-label mb-1"><i class="fa fa-clock-o"></i> <b>Last Updated on</b> <?php
$datetime1 = new DateTime($updated_at);
$datetime2 = new DateTime($lastupdated);
$interval = $datetime1->diff($datetime2);
//echo $interval->format('%D:%H:%i:%s');
//$format='Y-m-d H:i:s';
//echo timeDifference($datetime1, $format, $datetime2, $format,false, '%a days %h hours');
//$interval = $datetime1->diff($datetime2);
if($interval->format('%d')>0){
echo $interval->format('%d')." Days ago";
}elseif($interval->format('%h')>0){
echo $interval->format('%h')." Hours ago";
}elseif($interval->format('%m')>0){
echo $interval->format('%i')." Minutes ago";
}elseif($interval->format('%s')>0){
echo $interval->format('%s')." Second ago";
}

?>
</label>
			</div>
			<div class="form-group has-success">
				<p style="  font-size: 14px; font-family:Roboto, sans-serif;">{{$messager}}</p>
			</div>
			<br>
			</br>
			@if($image != '')
	  <a href="{{asset('storage/media/complaint/'.$image)}}" target="_blank"><img src="{{asset('storage/media/complaint/'.$image)}}" style="width:210px; height:210px" /></a>
  @endif
			</form>
	</div>
</div>
</div>
<div class="col-lg-3">
<div class="card table-responsive text-start tr-lastchild"  style="height:425px">
	<div class="card-header">
		<strong>Ticket</strong>
		<small>Information</small>
	</div>
	<div class="card-body card-block">
		<div class="row form-group">
				<span style="padding:5px">Ticket ID :</span><span style="padding:5px; font-weight:bold;"> {{$id}}</span>
		</div>
		<hr>
		<div class="row form-group">
				<span style="padding:5px">Category :</span><span style="padding:5px;font-weight:bold;">{{$sub_categoryname}}</span>
		</div><hr>
		<div class="row form-group">
				<span style="padding:5px">Subcategory :</span><span style="padding:5px;font-weight:bold;">{{$categoryname}}</span>
		</div><hr>
		<div class="row form-group">
				<span style="padding:5px">Priority :</span><span style="padding:5px;font-weight:bold;">
				
@if($priority == '1')
Low
@elseif($priority == '2')
Medium
@elseif($priority == '3')
High
@elseif($priority == '4')
Urgent
@endif	
</select></span>
		</div><hr>
		
		
		
		<div class="row form-group">
				<span style="padding:5px">Create Date :</span><span style="padding:5px;font-weight:bold;">{{$created_at}}</span>
		</div><hr>
		@if($reopendate != '')
		<div class="row form-group">
				<span style="padding:5px">Re Open Date :</span><span style="padding:5px;font-weight:bold;">{{$reopendate}}</span>
		</div><hr>
		@endif
		<div class="row form-group">
				<span style="padding:5px">Current Status : </span><span style="padding:5px;font-weight:bold;">
				@if($status == 0)
					Closed
				@elseif($status == 1)
					New
				@elseif($status == 2)
					Assigned
				@elseif($status == 3)
					In Progress
				@elseif($status == 4)
					Pending / Hold		
				@endif	
				<a href="#" style="color:#08324a" data-target="#myModal" role="button" class="btn" data-toggle="modal"><i class="fa fa-edit"></i></a></span>
		</div><hr>
		<div class="row form-group">
				<span style="padding:5px">Final Status : </span><span style="padding:5px;font-weight:bold;">
				@if($finalstatus == 0)
					Closed
				@elseif($finalstatus == 1)
					Active
				@elseif($finalstatus == 2)
					Reopen	
				@endif
				<a href="#" style="color:#08324a" data-target="#myModal5" role="button" class="btn" data-toggle="modal"><i class="fa fa-edit"></i></a></span>
		</div><hr>
		@if($finalstatus == 0 && $finalclosedate != '')
		<div class="row form-group">
				<span style="padding:5px">Ticket Closed Date:</span><span style="padding:5px;font-weight:bold;">{{$finalclosedate}}</span>
		</div><hr>
		@endif
		<div class="row form-group">
				<span style="padding:5px">Assigned : </span><span style="padding:5px;font-weight:bold;">
				
@foreach($users as $userslist)
@if($toassignuser_id == $userslist->id)
{{$userslist->name}}
@endif	
@endforeach
</select>
				</span>
		</div>
		
		<a href="#" style="color:#08324a" data-target="#myModal1" role="button" class="btn" data-toggle="modal">
		<button data-id="22" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
		<i class="fa fa-users"></i> Assign
		</button>
		</a><br>
		<a href="#" style="color:#08324a" data-target="#myModal2"  data-toggle="modal">
		<button data-id="22" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
		 Assigned History
		 </button>
		</a>
		</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-9">
<div class="card">
   
	<div class="card-body">
		<form action="{{url('/admin/supporttickets/manageticket/ticketreply/submit')}}" method="post" enctype="multipart/form-data" id="f3">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="cc-payment" class="control-label mb-1" style="  font-size: 22px; font-weight:bold; font-family:Roboto, sans-serif;">Reply Ticket</label>
			</div>
		   <textarea id="editor" class="t1" name="comment"></textarea>
		   <br>
		   <div class="row form-group">
			<div class="col-6">
			
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
<input type="hidden" name="id" value="{{$id}}">
		   <div class="card-footer">
						<div class="form-group float-end">
							<input type="submit" style="float: right !important;" class="btn btn-primary btn-bg active" value="Reply">
						</div>
					</div>
			</form>
		
	</div>
</div>
</div>
<div class="col-lg-3">
<div class="card">
	<div class="card-header  border-0">
		<div class="card-title"><b>Customer</b> Details</div>
	</div>
	<div class="card-body text-center pt-2 px-0 pb-0 py-0">
		<div class="profile-pic">
			<div class="profile-pic-img mb-2">
				<span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Online" aria-label="Online"></span>
					<center>
					@if($image == '')
					<img src="{{asset('user-profile.png')}}" class="brround avatar-xxl" alt="default" style="width:3rem;height: 3rem;line-height: 3rem;font-size: 1.25rem; border-radius: 50%;">
					@else
					<img src="{{asset('storage/media/customer/'.$customersimage)}}" class="brround avatar-xxl" alt="default" style="width:3rem;height: 3rem;line-height: 3rem;font-size: 1.25rem; border-radius: 50%;">
						
					</center>
					@endif
			</div>
			<a href="#" class="text-dark">
				<h5 class="mb-1 font-weight-semibold2" style="font-weight:bold">{{$firstname}} {{$lastname}}</h5>
				<small class="text-muted ">{{$email}}
				</small>
			</a>
		</div>
		<div class="table-responsive text-start tr-lastchild" style="height:498px">
			<table class="table mb-0 table-information">
				<tbody>
					<tr>
						<td>
							<span class="w-50">Project</span>
						</td>
						<td>:</td>
						<td>
							<span class="font-weight-semibold" style="font-weight:bold">
							@foreach($project as $list)
							@if($project_id == $list->id)
							{{$list->name}}
							@endif
							@endforeach
							</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="w-50">Gender</span>
						</td>
						<td>:</td>
						<td>
							<span class="font-weight-semibold" style="font-weight:bold">{{$gender}}</span>
						</td>
					</tr>
					<tr>
						<td>
							<span class="w-50">Mobile No.</span>
						</td>
						<td>:</td>
						<td>
							<span class="font-weight-semibold" style="font-weight:bold">{{$phone}}</span>
						</td>
					</tr>
					
					<tr>
						<td>
							<span class="w-50">Alt. No.</span>
						</td>
						<td>:</td>
						<td>
							<span class="font-weight-semibold" style="font-weight:bold">{{$alternetcontactno}}</span>
						</td>
					</tr>
					
					<tr>
						<td>
							<span class="w-50">City</span>
						</td>
						<td>:</td>
						<td>
							<span class="font-weight-semibold" style="font-weight:bold">{{$city}}</span>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="w-50">Customer  Notes:</span>
						</td>
						<td>:</td>
						<td>
							<span class="font-weight-semibold" style="font-weight:bold">{{$ccomment}}</span>
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="card">
   
	<div class="card-body" style=" font-family:Roboto, sans-serif;">
		
			<div class="form-group">
				<label for="cc-payment" class="control-label mb-1" style="font-size: 22px; font-weight:bold; font-family:Roboto, sans-serif;">Conversions</label>
				<div class="card-body">
					@foreach($ticketreplys as $ticketreplyslist)
								<div class="row">
									
									<div class="col-lg-2">
										<a href="#">
											
					@if($ticketreplyslist->profile_photo_path == '')
					<img src="{{asset('user-profile.png')}}" class="brround avatar-xxl" alt="default" style="width:3rem;height: 3rem;line-height: 3rem;font-size: 1.25rem; border-radius: 50%;">
					@else
					<img src="{{asset('storage/'.$ticketreplyslist->profile_photo_path)}}" class="brround avatar-xxl" alt="default" style="width:3rem;height: 3rem;line-height: 3rem;font-size: 1.25rem; border-radius: 50%;">
					@endif
											
										</a>
									</div>
									<div class="col-lg-10">
										<h5 class="" style="font-size: 16px; font-weight:bold;">{{$ticketreplyslist->name}} <span class="badge badge-pill badge-primary">

										@if($ticketreplyslist->users_type == '1')
										Admin
										@elseif($ticketreplyslist->users_type == '2')
										Customer
										@elseif($ticketreplyslist->users_type == '3')
										HR
										@elseif($ticketreplyslist->users_type == '4')
										Agent
										@endif
										</span></h5>
										<small class="text-muted"><i class="fa fa-clock-o"></i> {{$ticketreplyslist->reply_date}}</small>
										<div class="fs-13 mb-0 mt-1">
										{!!$ticketreplyslist->comment!!}
										</div>
										<div class="fs-13 mb-0 mt-1">
										@if($ticketreplyslist->image != '')
										<span class="badge badge-pill badge-warning">
										<a href="{{asset('storage/media/complaint/reply/'.$ticketreplyslist->image)}}" target="_blank">View Attachment</a>
										</span>
										@endif
										</div>
									</div>
								</div>
								<br><hr><br>
								@endforeach
							<!--<div class="row">
									<div class="col-lg-2">
										<a href="#">
											
								<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default" style="width: 3rem;height: 3rem;line-height: 3rem;font-size: 1.25rem; border-radius: 50%;">
											
										</a>
									</div>
									<div class="col-lg-10">
										<h5 class="" style="font-size: 16px; font-weight:bold;">Vishal Parmar <span class="badge badge-pill badge-primary">Agent</span></h5>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 10 years ago</small>
										<div class="fs-13 mb-0 mt-1">
											Voluptatem non odio optio repudiandae consectetur vel ad praesentium. Perspiciatis recusandae corrupti facilis qui. Ipsum nam necessitatibus quisquam eos quam numquam laudantium. Vel corrupti ut ea incidunt dolores in. Provident incidunt pariatur vel laboriosam fuga animi ea. Voluptatibus et aut facere vel nihil impedit adipisci qui.
										</div>
										
									</div>
								</div>
							-->
							</div>
			</div>
		   
	</div>
</div>
</div>
<div class="col-lg-3">
<div class="card">
	<div class="card-header">
		<strong>Ticket</strong>
		<small>Note</small>
		<a href="#" style="float: right !important;;color:#08324a" data-target="#myModal3" role="button" class="btn" data-toggle="modal">
			<i class="fa fa-plus-square" style="color:#08324A; font-size: 2em;"></i></a>
	</div>
	<div class="card-body card-block">
		<div class="row form-group">
				<p>{{$ticket_notes}}</p>
		</div>
		<div class="row form-group">
			<label for="text-input" class="form-control-label" style="float: right !important;">@if($ticket_notes != '')By : 
			@endif
			{{$notes_added_by}}</label>
		</div>
		</div>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="{{url('/admin/supporttickets/manageticket/status/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Change Status</h3>
  </div>
  <div class="modal-body">
    <select name="status" id="status" class="form-control">
			@if($status == '1')
			<option value="1" Selected>New</option>
			@elseif($status == '2')
			<option value="2" Selected>Assigned</option>
			@elseif($status == '3')
			<option value="3" Selected>In Progress</option>
			@elseif($status == '4')
			<option value="4" Selected>Pending / Hold</option>
			@elseif($status == '0')
			<option value="0" Selected>Resolved</option>
			@endif
			<option value="3">In Progress</option>
			<option value="4">Pending / Hold</option>
			<option value="0">Resolved </option>
			</select>
  </div>
  <input type="hidden" name="id" value="{{$id}}">
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
  </form>
  </div>
  </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="{{url('/admin/supporttickets/manageticket/assign/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Assign Ticket To</h3>
  </div>
  <div class="modal-body">
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
  <input type="hidden" name="id" value="{{$id}}">
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
  </form>
  </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
  <div class="modal-content">
  
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Assign Ticket History</h3>
  </div>
  <div class="modal-body">
    <div class="table-responsive table--no-card m-b-30">
<table class="table table-borderless table-striped table-earning">
<thead style="background-color:#08324A;">
	<tr>
	<th>SR. NO.</th>
	<th>Name</th>
	<th>Assiged By</th>
	<th>Assiged Date</th>
	</tr>
	</thead>
	<tbody>
	<?php $a = 1;?>
	@foreach($ticketassignedhistory as $tlist)
	<tr>
	<td>{{$a++}}</td>
	<td>{{$tlist->toassignusersname}}</td>
	<td>{{$tlist->fromasssignusername}}</td>
	<td>{{$tlist->created_at}}</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
  
  </div>
  </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="{{url('/admin/supporttickets/manageticket/ticketnotes/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Update Ticket Notes</h3>
  </div>
  <div class="modal-body">
    <textarea name="ticket_notes" class="form-control">{{$ticket_notes}}</textarea>
  </div>
  <input type="hidden" name="id" value="{{$id}}">
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
  </form>
  </div>
  </div>
</div>
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="{{url('/admin/supporttickets/manageticket/finalstatus/submit')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Final Status Change</h3>
  </div>
  <div class="modal-body">
    <select name="finalstatus" id="finalstatus" class="form-control">
			@if($finalstatus == '1')
			<option value="1" Selected>Active</option>
			@elseif($finalstatus == '0')
			<option value="0" Selected>Close</option>
			@elseif($finalstatus == '2')
			<option value="2" Selected>Reopen</option>
			@endif
			<option value="0">Close</option>
			<option value="1">Active</option>
			<option value="2">Reopen</option>
			</select>
  </div>
  <input type="hidden" name="id" value="{{$id}}">
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
  </form>
  </div>
  </div>
</div>
<script>
ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
console.error( error );
} );
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