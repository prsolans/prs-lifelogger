<?php
	require '../data/connect.php';

	$category = $_GET['category'];

	$query = "SELECT * FROM `prs-lifelogger-cleardb`.`activities` WHERE category='".$category."';";	

	if (!$result = $conn->query($query)) {
	    die ('There was an error running query[' . $conn->error . ']');
	}

	echo "COUNT: ". ,mysql_num_rows($result);
	$output = '{"activities":[';

    while ($row = $result->fetch_array()) {
        $output .= '{"name": "'.$row["name"].'"}';
    }

    $output .= ']}';
    echo $output;
	mysql_close($conn);
?>