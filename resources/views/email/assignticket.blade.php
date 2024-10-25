<h1>Hello ,{{$toassignusersname}}</h1>
<?php
$datetime1 = new DateTime($tat);
$datetime2 = new DateTime($lastupdated);
$interval = $datetime2->diff($datetime1);
$resolve_in_time = $interval->format('%h');

?>
Ticket number #{{$ticketno}} assigned to you.
<table border="1" style="padding:5px;">
<tr>
<td>Ticket ID</td>
<td>{{$ticketno}}</td>
</tr>
<tr>
<td>Category</td>
<td>{{$categoryname}}</td>
</tr>
<tr>
<td>Priority</td>
<td>{{$priority}}</td>
</tr>
<tr>
<td>Project</td>
<td>{{$projectname}}</td>
</tr>
<tr>
<td>Customer Name</td>
<td>{{ $name }}</td>
</tr>
<tr>
<td>Subject</td>
<td>{{$subject}}</td>
</tr>
<tr>
<td>Mobile No</td>
<td>{{$phone}}</td>
</tr>
<tr>
<td>Alt. Mobile No.</td>
<td>{{$alternetcontactno}}</td>
</tr>
<tr>
<td>Tikcet Assigned by</td>
<td>{{$fromasssignusername}}</td>
</tr>
</table>
Kindly start working on it.
<br><br><br><br>
Thanks,<br>
IT Support Team<br>
Inbox Infotech<br>
<br>
<img src="{{asset('inbox-logo.png')}}" alt="logo" height="50px"/><br><br>
<p>Note : This is system genrated email.</p>
