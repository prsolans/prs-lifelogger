<?php
	require 'connect.php';

	$activity = $_GET['selectActivity'];

	echo "ACT" . $activity;

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`,`name`, `category`) VALUES (1, 'Run', 1);";

	echo $query;
	
	mysqli_query($conn,$query);

?>