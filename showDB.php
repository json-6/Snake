<?php
	require '../connect.php';
	$sql = mysqli_query($con, "SELECT * FROM Snake_Scores") or die(mysql_error());
	while($row = $sql->fetch_assoc()) {
		print_r($row);
		echo "<br />----------------------------------------------------------------------------<br />";
	}
?>