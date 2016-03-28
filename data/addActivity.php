<?php
	require 'connect.php';

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`name`, `category`) VALUES ($_POST['activity'], 1);";

	echo $query;
	
	mysqli_query($conn,$query);

?>