<!DOCTYPE html>
<html>
<head>
    <title>Job_Application_for_{{$position}}_{{$first_name}}_{{$last_name}}</title>
    <!-- Latest compiled and minified CSS -->
    <link href="{{public_path('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <style>
            /** Define the margins of your page **/
            @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 80px;

                /** Extra personal styles **/
                background-color: #08324A;
                /*color: white;*/
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #08324A;
                color: white;
                text-align: center;
                line-height: 35px;
            }
            .column {
  float: left;
  width: 50%;
  padding: 30px;
  /* Should be removed. Only for demonstration */
}
.column4 {
  float: left;
  width: 20%;
  /*padding: 26px;*/
  padding-left: 26px;
  padding-right: 26px;
  
  
  /* Should be removed. Only for demonstration */
}
.column3{
  float: left;
  width: 33%;
  padding-left: 26px;
  padding-right: 26px;
  /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.page-break {
  page-break-after: always;
}
        </style>
</head>
<body>

<header>
<img src="{{public_path('logo.png')}}" style="padding:13px">
</header>
<br>
<main>

<div class="card page-break">
	<div class="card-header">
		<strong>Job Application Form for : </strong>{{$position}}
	</div>   
    <label style="padding:15px"><b>Personal Data</b></label>
    <div class="row">
  <div class="column4">
    <p><b>First Name</b></p>
    <p>{{$first_name}}</p>
  </div>
  <div class="column4">
    <p><b>Last Name</b></p>
    <p>{{$last_name}}</p>
  </div>
  <div class="column4">
    <p><b>Date of birth</b></p>
    <p>{{$date_of_birth}}</p>
  </div>
  <div class="column4">
    <p><b>Citizenship</b></p>
    <p>{{$citizenship}}</p>
  </div>
</div>
<div class="row">
  <div class="column4">
    <p><b>Address</b></p>
    <p>{{$address}}</p>
  </div>
  <div class="column4">
    <p><b>ZIP Code</b></p>
    <p>{{$zip_code}}</p>
  </div>
  <div class="column4">
    <p><b>City</b></p>
    <p>{{$city}}</p>
  </div>
  <div class="column4">
    <p><b>State</b></p>
    <p>{{$state}}</p>
  </div>
</div>
<div class="row">
  <div class="column3">
    <p><b>Email Id</b></p>
    <p>{{$email_id}}</p>
  </div>
  <div class="column3">
    <p><b>Phone Number</b></p>
    <p>{{$phone_no}}</p>
  </div>
  <div class="column3">
    <p><b>Photo</b></p>
    <p><img src="{{ public_path('storage/media/')}}/{{$photo}}" width= '100' height='100' class="img img-responsive" /></p>
  </div>  
</div>
<label style="padding-left:15px"><b>Qualification</b></label>
<table class="table table-borderless table-data3">
	<thead style="background-color:#08324A; color:#fff">
		<tr>
			<th>SR.No</th>
			<th>Name Of Examination</th>
			<th>Name Of Institution</th>
			<th>Name Of University</th>
			<th>Passing Year</th>
			<th>CGPA</th>
		</tr>
	</thead>
	<tbody>
	<?php $a = 1;?>
		@foreach($abz as $list)
		<tr>
			<td>{{$a++}}</td>
			<td>{{$list->name_of_the_examination}}</td>
			<td>{{$list->name_of_the_boardoruniversity}}</td>
			<td>{{$list->name_of_the_institution}}</td>
			<td>{{$list->year_of_passing}}</td>
			<td class="process">{{$list->cgpa}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
<br><br>
<div class="card">
<label style="padding-left:15px"><b>Experience</b></label>
<table class="table table-borderless table-data3">
	<thead style="background-color:#08324A;color:#fff">
		<tr>
			<th>SR.No</th>
			<th>Company Name</th>
			<th>Position</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Job Profile</th>
			<th>Reason For Job Change</th>
		</tr>
	</thead>
	<tbody>
	<?php $a = 1;?>
		@foreach($xyz as $list)
		<tr>
			<td>{{$a++}}</td>
			<td>{{$list->company_name}}</td>
			<td>{{$list->position}}</td>
			<td>{{$list->start_date}}</td>
			<td>{{$list->end_date}}</td>
			<td>{{$list->details}}</td>
			<td>{{$list->reason_for_job_change}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>

        
        </main>
        <footer>
Copyright &copy; Inbox Infotech <?php echo date("Y");?> 
</footer>
</body>

</html>