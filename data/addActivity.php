<?php
	require 'connect.php';

	$activity = $_POST['activity'];

	echo "ACT" . $activity;

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`,`name`, `category`) VALUES (1, $activity, 1);";

	echo $query;
	
	mysqli_query($conn,$query);

?>