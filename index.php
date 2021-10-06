
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
  <h2>Employee Details</h2>

  <br>
    <a href="add-employee.php" class="btn btn-primary">Add Employee</a>
  <br><br>     
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Department</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
          include 'config.php';
            $sql = "SELECT * FROM employee_details";
            $res = mysqli_query($conn, $sql);

            if(mysqli_num_rows($res) >0)
            {
              while($row = mysqli_fetch_assoc($res))
              {
          ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td>
            <a href="update_employee_details.php?eid=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
            <a href="delete-employee.php?eid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
          </td>
      </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>


