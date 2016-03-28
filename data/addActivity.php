<?php
	require 'connect.php';

	$activity = $_POST['activity'];
	$category = $_POST['category'];

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`, `name`, `category`) VALUES (DEFAULT, '$activity', '$category');";
	
	mysqli_query($conn,$query);
?>