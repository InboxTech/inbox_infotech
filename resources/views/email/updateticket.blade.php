<h1>Hello {{ $name }},</h1>
<?php
$datetime1 = new DateTime($tat);
$datetime2 = new DateTime($lastupdated);
$interval = $datetime2->diff($datetime1);
$resolve_in_time = $interval->format('%h');

?>
Your issue ticketno #{{$ticketno}} is currently being worked on by our technical team. We will get back to you in {{$resolve_in_time}} hours. Thank you for your patience.

<br><br><br><br>
Thanks,<br>
IT Support Team<br>
Inbox Infotech<br>
<br>
<img src="{{asset('inbox-logo.png')}}" alt="logo" height="50px"/><br><br>
<p>Note : This is system genrated email.</p>
