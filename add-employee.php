<?php

include 'config.php';

if(isset($_POST['submit']))
{
	  $name = $_POST['name'];
	 $email = $_POST['email'];
	  $mobile = $_POST['mobile'];
	  $department = $_POST['department'];
	

	$sql = "INSERT INTO employee_details SET
		name = '$name',
		email = '$email',
		mobile = '$mobile',
		department = '$department'
	";
	$res = mysqli_query($conn, $sql);
		if($res == true)
		{
			header('location:index.php');
		}
		else
		{
			header('location:add-employee.php');
		}
}

?>
<html lang="en">
<head>
  <title>Add Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Add Employee Details</h2>

  <br>
<br>

		<form action="" method="post" style="width: 30%;">
					<div class="form-group">
						<label>Name: </label>
						<input type="text" name="name" placeholder="Enter Name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" placeholder="Enter email" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Mobile: </label>
						<input type="input" name="mobile" placeholder="Enter mobile number" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Department:</label>
						<input type="text" name="department" placeholder="Enter department" class="form-control" required="">
					</div>

					<input type="submit" name="submit" class="btn btn-primary">
				</form>
		

</div>
</body>
</html>


