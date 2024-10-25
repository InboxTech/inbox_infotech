@extends('admin.layout')

@section('title', 'Job Application List')

@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Job Application List</h3>
<div class="table-data__tool">
    <form method="post" action="{{url('/admin/career/jobapplication/list')}}">
    {{ csrf_field() }}
<div class="table-data__tool-left">
<div class="rs-select2--light rs-select2--md">
    <select class="js-select2" name="property" required>
        <option value="">Select Value</option>
        <option value="All Data">All Data</option>
        <option value="Firstname">First Name</option>
        <option value="Lastname">Last Name</option>
        <option value="Mobile">Mobile No</option>
        <option value="Email">Email Id</option>
        <option value="Position">Position</option>
    </select>
    <div class="dropDownSelect2"></div>
</div>
<input class="au-input au-input--xl" type="text" name="search" placeholder="">
<button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:#0069D9">
			<i class="zmdi zmdi-search"></i> Search
		</button>
</div>
</form>
<div class="table-data__tool-right">
    <a href="{{url('/admin/career/jobapplication/export')}}">
<button class="au-btn au-btn-icon au-btn--small" style="background-color:#6c757d">
    <i class="fa fa-rss"></i>Export</button></a>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
<div class="table-responsive table--no-card m-b-30">
<table class="table table-borderless table-striped table-earning">
<thead>
    <tr>
        <th>SR. No</th>
        <th>Position</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone No</th>
        <th>Email Id</th>
        <th>Application Date</th>
        <th>status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $a = 1;?>
    @foreach($data as $list)
    <tr class="tr-shadow">
        <td>{{$a++}}</td>
        <td>
            <span class="block-email">{{$list->position}}</span>
        </td>
        <td class="desc">{{$list->first_name}}</td>
        <td>{{$list->last_name}}</td>
        <td>
            {{$list->phone_no}}
        </td>
        <td>{{$list->email_id}}</td>
        <td>{{$list->created_at}}</td>
        <td><span class="status--process">
            @if($list->status == '1')
            Pending
            @elseif($list->status == '2')
            Screened
            @elseif($list->status == '3')
            Rejected
            @elseif($list->status == '4')
            Shortlisted
            @elseif($list->status == '5')
            Hold
            @elseif($list->status == '6')
            Need to discuss
            @endif
            </span>
        </td>
        <td>
            <div class="table-data-feature">
            <a href="{{url('/admin/career/jobapplication/print/')}}/{{$list->job_application_id}}">  
            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
            <i class="fa fa-print"></i>
            </button></a>
                <a href="{{url('/admin/career/jobapplication/managejobapp/')}}/{{$list->job_application_id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                </a>
                @if(Auth::user()->users_type =='1')
                <a  onclick="return myFunction();" href="{{url('/admin/career/jobapplication/delete/')}}/{{$list->job_application_id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                </a>
                @endif
            </div>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
{{ $data->links() }}
<!-- END DATA TABLE -->
</div>
</div>


</div>
</div>
</div>                       
@endsection
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>