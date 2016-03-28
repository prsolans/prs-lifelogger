<?php
	require '../data/connect.php';

	$category = $_GET['category'];

	$query = "SELECT * FROM `prs-lifelogger-cleardb`.`activities` WHERE category='".$category."';";	

	echo "<br>".$query;

	if (!$result = $conn->query($query)) {
	    die ('There was an error running query[' . $conn->error . ']');
	}

    while ($row = $result->fetch_array()) {
        echo '<br/>ROW: '.$row["name"];
    }

	mysql_close($conn);
?>