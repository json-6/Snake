<?php
	require '../connect.php';
	$id = (int) $_POST['id'];
	$sql = mysqli_query($con, "DELETE FROM Snake_Scores WHERE id = $id") or die(mysql_error());
	header("Location: cpanel.php");
?>