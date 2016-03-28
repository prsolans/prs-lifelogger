<?php
	require 'connect.php';

	$activity = $_POST['activity'];

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`, `name`, `category`) VALUES (DEFAULT, '$activity', 1);";

	echo $query;
	
	mysqli_query($conn,$query);

?>