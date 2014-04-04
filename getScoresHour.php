<?php
	require '../connect.php';
	$count = (int) $_POST['count'];
	if (!$count) {
		$count = 5;
	}
	$sql = mysqli_query($con, "SELECT * FROM Snake_Scores WHERE time >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY Score DESC LIMIT $count") or die(mysqli_error($con));
	$arr = array();
	while($row = $sql->fetch_assoc()) {
		$arr[] = $row;
	}
	echo json_encode($arr);
?>