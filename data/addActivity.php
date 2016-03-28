<?php
	require 'connect.php';

	$activity = $_POST['activity'];
	$category = $_POST['category'];

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`, `name`, `category`) VALUES (DEFAULT, '".$activity."', '".$category."');";	

	echo "<br>".$query;
	mysqli_query($conn,$query);

	mysql_close($conn);
?>