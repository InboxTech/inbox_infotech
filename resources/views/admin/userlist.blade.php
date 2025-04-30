@if(Auth::user()->users_type == '1')
@extends('admin.layout')

@section('title', 'Inbox Users List')

@section('user', 'Active')

@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Users List</h3>
<div class="table-data__tool">
    <form method="post" action="{{url('/admin/user/cmslist')}}">
    {{ csrf_field() }}
<div class="table-data__tool-left">
<div class="rs-select2--light rs-select2--md">
    <select class="js-select2" name="property" required>
        <option value="">Select Value</option>
        <option value="All Data">All Data</option>
        <option value="name">Name</option>
        <option value="email">Email ID</option>
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
<a href="{{url('/admin/user/export')}}">
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
        <th>Name</th>
        <th>Email </th>
        <th>Created Date</th>
        <th>Users Type</th>
        <th>status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $a = 1;?>
    @foreach($data as $list)
    <tr class="tr-shadow">
        <td>{{$a++}}</td>
        <td>{{$list->name}}</td>
        <td>
            <span class="block-email">{{$list->email}}</span>
        </td>
        <td>
            <span class="status--process">{{$list->created_at}}</span>
        </td>
        <td>
            @if($list->users_type == '1')
            Admin
            @elseif($list->users_type == '2')
            Subscriber
            @elseif($list->users_type == '3')
            HR
			@elseif($list->users_type == '4')
            IT Support
            @else
            Other
            @endif
    </td>
        <td>
            @if($list->status == '1')
            Active
            @else
            Inactive
            @endif
        </td>
        <td>
            <div class="table-data-feature">
                <a href="{{url('/admin/user/manageuser')}}/{{$list->id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                </a>
                <a  onclick="return myFunction();" href="{{url('/admin/user/delete')}}/{{$list->id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                </a>
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
 @endif
 