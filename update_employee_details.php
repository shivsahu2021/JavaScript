<?php

include 'config.php';

if(isset($_POST['submit']))
{
		echo $id = $_POST['id'];
	  $name = $_POST['name'];
	 $email = $_POST['email'];
	  $mobile = $_POST['mobile'];
	  $department = $_POST['department'];
	

	$sql = "UPDATE employee_details SET
		name = '$name',
		email = '$email',
		mobile = '$mobile',
		department = '$department' where id = '$id'
	";
	$res = mysqli_query($conn, $sql);
		if($res == true)
		{
			header('location:index.php');
		}
		else
		{
			header('location:update-employee.php');
		}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Update Employee Details</h2>

  <br>
<br>
		<?php

			$id = $_GET['eid'];
			$sql = "SELECT * FROM employee_details where id = '$id'";

			$res = mysqli_query($conn, $sql);

			$row = mysqli_fetch_assoc($res);
		?>

		<form action="" method="post" style="width: 30%;">
					<div class="form-group">
						<label>Name: </label>
						<input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter email" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Mobile: </label>
						<input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" placeholder="Enter mobile number" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Department:</label>
						<input type="text" name="department" value="<?php echo $row['department']; ?>" placeholder="Enter department" class="form-control" required="">
					</div>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<input type="submit" name="submit" value="Update" class="btn btn-primary">
				</form>
		

</div>
</body>
</html>


