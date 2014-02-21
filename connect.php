<?php
	$con=mysqli_connect("localhost","smith130","PASSWORD","smith130_DM");
	if (mysqli_connect_errno($con)) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>