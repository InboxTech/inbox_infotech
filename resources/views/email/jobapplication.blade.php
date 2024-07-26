<h1>Hello Team,</h1>

We have received new Job Application for {{$position}} from {{$name}} with below details.<br>
<table border="1">
<tr>
<td>Name</td>
<td>{{$name}}</td>
</tr>
<tr>
<td>position</td>
<td>{{$position}}</td>
</tr>
<tr>
<td>Phone Number</td>
<td>{{$supportno}}</td>
</tr>
<tr>
<td>Email Id</td>
<td>{{$emailid}}</td>
</tr>
<tr>
<td>Resume</td>
<td><a href="{{ asset('storage/media/')}}/{{$resume}}"> View Resume</a></td>
</tr>
</table>
<br><br><br><br>
Thanks,<br>
IT Support Team<br>
Inbox Infotech<br>
<br>
<img src="{{asset('inbox-logo.png')}}" alt="logo" height="50px"/><br><br>
<p>Note : This is system genrated email.</p>