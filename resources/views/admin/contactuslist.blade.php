@extends('admin.layout')

@section('title', 'Contactus List')
@section('pgs', 'Active')
@section('main')

<div class="main-content" style="padding-top: 60px;">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Contactus List</h3>
<div class="table-data__tool">
    
<div class="table-data__tool-left">
  
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
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>IP</th>
    <th>message</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php $a = 1;?>
    @foreach($data as $list)
    <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->name}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->ip}}</td>
        <td><?php echo $msgTrimmed = mb_substr($list->message,0,40);?></td>
        <td>
        <div class="table-data-feature">
                <a href="{{url('admin/contactus/manage_contactus/')}}/{{$list->id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                </a>
                <a  onclick="return myFunction();" href="{{url('admin/contactus/delete/')}}/{{$list->id}}">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                </a>
                

            @if($list->status==1)
            <a href="{{url('admin/contactus/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-primary" style="background-color:#08324A;">Seen</button></a>
                @elseif($list->status==0)
                <a href="{{url('admin/contactus/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary" style="background-color:#EF4923;">Pending</button></a>
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