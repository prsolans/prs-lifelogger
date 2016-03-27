<?php
	require 'connect.php';

	$query = "INSERT INTO `prs-lifelogger-cleardb`.`activities` (`id`,`name`, `category`) VALUES (1, 'Run', 1);"

	echo $query;

	// $result = mysql_query($query);
	// if (!$result) {
	//     die('Invalid query: ' . mysql_error());
	// }
?>