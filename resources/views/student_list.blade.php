<!DOCTYPE html>
<html lang="en">
<head>
	<title>Students List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                <a href="{{url('course-registration-form')}}" style="background-color: #212529; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
                    Course Registration Form</a>
                <a href="{{url('course-add-form')}}" style="background-color: #212529; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
                    New Course Add</a>
                <a href="{{url('/course-list')}}" style="background-color: #212529; border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">
                    Courses List</a>
				<div class="table100">

                    <br>
					<table>
						<thead>
							<tr class="table100-head">
								<th style=" font-weight: bold; text-align: center;">ID</th>
								<th style=" font-weight: bold; text-align: center;">Name</th>
								<th style=" font-weight: bold; text-align: center;">Institute Name</th>
								<th style=" font-weight: bold; text-align: center;">Department Name</th>
								<th style=" font-weight: bold; text-align: center;">Address</th>
								<th style=" font-weight: bold; text-align: center;">Gender</th>
								<th style=" font-weight: bold; text-align: center;">Mobile Number</th>
								<th style=" font-weight: bold; text-align: center;">Course Name</th>
								<th style=" font-weight: bold; text-align: center;">Email ID</th>
							</tr>
						</thead>
						<tbody>
                        @foreach ($allStudents as $student)
								<tr>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->id}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->name}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->institute}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->department}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->address}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->gender}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->mobile_number}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->course}}</td>
									<td style="color: black; font-weight: bold; text-align: center;">{{$student->email}}</td>
								</tr>
                        @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
    <script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="table/vendor/bootstrap/js/popper.js"></script>
	<script src="table/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="table/vendor/select2/select2.min.js"></script>
	<script src="table/js/main.js"></script>
</body>
</html>
