@extends('customer.layout')
 
@section('title', 'Dashboard')
 
@section('main')
    
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Welcome
									@if ($message = Session::get('username'))
									{{$message}}
									@endif	
									</h2>
									<a href="{{url('customer/createticket')}}">
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Create Ticket</button>
									</a>	
                                </div>
                            </div>
                        </div>
						<br>
                       <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Our Services & Products</h3><br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                               <h5><u>Services</u></h5><br>
												<ul class="list-unstyled">
												  @foreach($myservices as $ms)
												  <li class="mb-3"><a class="btn-primary btn-icon-left btn btn-icon" href="{{url('/services')}}/{{$ms->slug}}" style="width:350px; height: 54px;    padding-top:16px; background-color:#2A3855">{{$ms->title}}</a></li>
												  @endforeach
												</ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5><u>Products</u></h5><br>
												<ul class="list-unstyled">
												  @foreach($myproducts as $mp)
												  <li class="mb-3"><a class="btn-primary btn-icon-left btn btn-icon" href="{{url('/products')}}/{{$mp->slug}}"  style="width:350px; height: 54px;    padding-top:16px; background-color:#2A3855">{{$mp->title}}</a></li>
												  @endforeach
												</ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
@endsection