<?php
	require '../connect.php';
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$score = (int) $_POST['score'];
	$name = "'".$name."'";
	$sql = mysqli_query($con, "INSERT INTO Snake_Scores (Name, Score, Time) VALUES ($name, $score, NOW())") or die(mysql_error());
?>