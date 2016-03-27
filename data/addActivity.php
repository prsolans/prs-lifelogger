<?php
	require 'connect.php';

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`,`name`, `category`) VALUES (1, $_POST['selectActivity'], 1);";

	echo $query;
	
	mysqli_query($conn,$query);

?>