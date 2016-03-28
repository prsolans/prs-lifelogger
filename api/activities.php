<?php
	require 'connect.php';

	$activity = $_GET['activity'];
	$category = $_GET['category'];

	$query = "SELECT * FROM `prs-lifelogger-cleardb`.`activities` WHERE category='".$category."';";	

	echo "<br>".$query;
	$result = mysqli_query($conn,$query);

	echo $result;
	
	mysql_close($conn);
?>