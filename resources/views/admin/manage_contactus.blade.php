@extends('admin.layout')

@section('title', 'Manage Contact us')

@section('pgs', 'Active')

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
Contact us</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> Contact us
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
	<form action="{{url('admin/contactus/manage_contactus_process')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Name</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                        <input type="text" id="disabled-input" value="{{$name}}" name="name"  disabled="" class="form-control">    
                                    </div>
                                    </div>                                    
                                </div>
								<div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Email</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                        <input type="text" id="disabled-input" value="{{$email}}" name="email"  disabled="" class="form-control">    
                                    </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">IP</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                        <input type="text" id="disabled-input" value="{{$ip}}" name="ip"  disabled="" class="form-control">    
                                    </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Message</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                            <textarea id="disabled-input" disabled="" class="form-control">{{$message1}}</textarea>   
                                    </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Date</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                        <input type="text" id="disabled-input" value="{{$created_at}}" name="ip"  disabled="" class="form-control">    
                                    </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Status</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                        <select name="status" id="status" class="form-control">
                                        @if($status == '1')
                                        <option value="1">Seen</option>
                                        @else
                                        <option value="0">Pending</option>
                                        @endif
                                        @if($status == '1')
                                        <option value="0">Pending</option>
                                        @else
                                        <option value="1">Seen</option>
                                        @endif
                                        </select>    
                                    </div>
                                    </div>                                    
                                </div>
                                <div>
								<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="fa fa-dot-circle-o"></i> Submit
		</button>
		<a href="{{url('admin/contactus')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
			<i class="fa fa-ban"></i> Reset
</span></a>
	</div>
                                </div>
                                <input type="hidden" name="id" value="{{$id}}"/>
                            </form>
                        
</div>


</div>
</div>
</div>  
</div>                     

@endsection