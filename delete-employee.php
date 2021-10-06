<?php

	include 'config.php';
		if(isset($_GET['eid']))
        {
        	$id=intval($_GET['eid']);
        	$query=mysqli_query($conn,"DELETE from employee_details where id='$id'");
        	header('location:index.php');
        }

?>