@extends('admin.layout')

@section('title', 'Manage Slider')

@section('ss', 'Active')

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
Product</h3>
<div class="col-lg-12">
<div class="card">
	<div class="card-header">
		<strong>Basic Form</strong> Slider
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
	<form action="{{route('product_banner.manage_product_banner_process')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Main Text</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
										<input id="btn_txt" value="{{$btn_txt}}" name="btn_txt" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        </div>
                                    </div>                                    
                                </div>
								<div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="category_name" class="control-label mb-1">Sub Text</label>
                                            
                                        </div>                                       
                                        <div class="col-md-9">
                                            <input id="btn_link" value="{{$btn_link}}" name="btn_link" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Image</label>
                                    <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                    @error('image')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                    @if($image!='')
                                            <a href="{{asset('storage/media/product/'.$image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/product/'.$image)}}"/></a>
                                    @endif
                                </div>
                                
                                <div>
								<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm" style="background-color:#0069D9">
			<i class="fa fa-dot-circle-o"></i> Submit
		</button>
		<a href="{{url('admin/product_banner')}}"><span  class="btn btn-danger btn-sm" style="background-color:#C82333">
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