<h2>Hello Team,</h2>

We have received new Inquiry from customer <strong>{{ $name }}</strong> with below details.<br>
<table border="1">
    <tr>
        <td>Name</td>
        <td>{{ $name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $supportno }}</td>
    </tr>
    <tr>
        <td>Phone Number </td>
        <td>{{ $phoneno }}</td>
    </tr>
    <tr>
        <td>Message</td>
        <td>{{ $details }}</td>
    </tr>
</table>
<br><br><br><br>
Thanks,<br>
IT Support Team<br>
Inbox Infotech<br>
<br>
<img src="{{ asset('inbox-logo.png') }}" alt="logo" height="50px" /><br><br>
<p>Note : This is system genrated email.</p>
