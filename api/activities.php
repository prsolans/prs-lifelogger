<?php
	require '../data/connect.php';

	$query = "SELECT * FROM `prs-lifelogger-cleardb`.`activities`;";	

    $response = array();
	$posts = array();

	if (!$result = $conn->query($query)) {
	    die ('There was an error running query[' . $conn->error . ']');
	}

    while ($row = $result->fetch_array()) {
		$name=$row['name']; 
		$category=$row['category']; 

		$activities[] = array('name'=> $name, 'category'=> $category);
	} 

	$response['activities'] = $activities;

	$fp = fopen('activities.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);

	mysql_close($conn);
?>