@extends('admin.layout')

@section('title', 'Ticket Category List')
@section('psg', 'Active')
@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Ticket Category List</h3>
<div class="table-data__tool">
    <form method="post" action="{{url('/admin/tieket_category/list/search/')}}">
    {{ csrf_field() }}
<div class="table-data__tool-left">
<input class="au-input au-input--xl" type="text" name="search" placeholder="">
<button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:#08324A">
			<i class="zmdi zmdi-search"></i> Search
		</button>
</div>
</form>
<div class="table-data__tool-left">
    <a href="{{url('/admin/tieket_category/list')}}">
<button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background-color:#08324A">
			<i class="fas fa-list-ul"></i> All Data
		</button>
</div>
<div class="table-data__tool-right">
<a href="{{url('/admin/tieket_category/add')}}">
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
        <th>Name</th>
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
            <span class="block-email"><?php echo $msgTrimmed = mb_substr($list->name,0,40);?></span>
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
                <a href="{{url('/admin/tieket_category/update/')}}/{{$list->id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                </a>
                <a  onclick="return myFunction();" href="{{url('/admin/tieket_category/delete/')}}/{{$list->id}}">
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