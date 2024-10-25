@extends('admin.layout')

@section('title', 'All Support Ticket List')
@section('psg', 'Active')
@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">All Support Ticket List</h3>
<div class="table-data__tool">
    <form method="post" action="{{url('/admin/supporttickets/list/search/')}}">
    {{ csrf_field() }}
<div class="table-data__tool-left">
<input class="au-input au-input--xl" type="text" name="search" placeholder="">
<button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:#08324A">
			<i class="zmdi zmdi-search"></i> Search
		</button>
</div>
</form>
<div class="table-data__tool-left">
    <a href="{{url('/admin/supporttickets/list')}}">
<button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:#08324A">
			<i class="fas fa-list-ul"></i> All Data
		</button>
</div>
<div class="table-data__tool-right">
<a href="{{url('/admin/supporttickets/add')}}">
<button class="au-btn au-btn-icon au-btn--green au-btn--small">
    <i class="zmdi zmdi-plus"></i>add item</button></a>
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
<thead style="background-color:#08324A;">
    <tr>
        <th>SR. No</th>
		<th>Created Date</th>				
		<th>Project Name</th>		
		<th>Priority</th>
        <th>Ticket Category</th>
		<th>Ticket Subcategory</th>
		<th>TAT</th>
        <th>Name</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Phone</th>
        <th>Current status</th>
		<th>Final status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $a = 1;?>
    @foreach($data as $list)
    <tr class="tr-shadow">
        <td>{{$a++}}</td>
		<td>{{$list->ticketdate}}</td>
		<td><span class="block-email">{{$list->projectname}}</span></td>
		<td>
		@if($list->priority == '1')
		<span style="background-color:#61FF33; padding-left:10px;padding-right:10px;color:#000;"><b>Low</b></span>
		@elseif($list->priority == '2')
		<span style="background-color:#E9FF33; padding-left:10px;padding-right:10px;color:#000;"><b>Medium</b></span>
		@elseif($list->priority == '3')
		<span style="background-color:#FF6B33; padding-left:10px;padding-right:10px;color:#000;"><b>High</b></span>
		@elseif($list->priority == '4')
		<span style="background-color:#FF3333; padding-left:10px;padding-right:10px;color:#000;"><b>Urgent</b></span>
		@endif
		</td>
		<td>
            <span><?php echo $msgTrimmed = mb_substr($list->categoryname,0,40);?></span>
        </td>
        <td>
            <span><?php echo $msgTrimmed = mb_substr($list->subcategoryname,0,40);?></span>
        </td>
		
		<td>{{$list->approxclosetime}}</td>
		<td>
            <span><?php echo $msg = mb_substr($list->firstname,0,40);?> </span>
        </td>
		<td>
            <span><?php echo $msg = mb_substr($list->lastname,0,40);?> </span>
        </td>
		<td>
            <span class="block-email">{{$list->email}}</span>
        </td>
		<td>
            <span>{{$list->phone}}</span>
        </td>
        <td>            
			@if($list->status == '1')
			New
			@elseif($list->status == '2')
			Assigned
			@elseif($list->status == '3')
			In Progress
			@elseif($list->status == '4')
			Pending / Hold
			@elseif($list->status == '0')
			Resolved
			@endif
        </td>
		<td>            
			@if($list->finalstatus == '0')
			Close
			@elseif($list->finalstatus == '1')
			Active
			@elseif($list->finalstatus == '2')
			Reopen
			@endif
        </td>
        <td>
            <div class="table-data-feature">
                <a href="{{url('/admin/supporttickets/view/')}}/{{$list->supportticket}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                    <i class="fa fa-eye"></i>
                </button>
                </a>
				@if(Auth::user()->users_type == '1')	
				<a href="{{url('/admin/supporttickets/update/')}}/{{$list->supportticket}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                </a>
                <a  onclick="return myFunction();" href="{{url('/admin/supporttickets/delete/')}}/{{$list->supportticket}}">
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