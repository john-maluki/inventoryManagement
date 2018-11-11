<?php
//setting header to json
header('Content-Type: application/json');

//database
include "config.php";

//query to get data from the table
$queryWorkshop = sprintf("SELECT DISTINCT workshop FROM trainee_workshop_attended;");
//execute query
$result = mysqli_query($link, $queryWorkshop);
$data = array();

foreach($result as $value) {

	# code...
	//find the number of each distinct record
	$request = $value['workshop'];
    $queryCount = sprintf("SELECT COUNT(workshop) AS numberOfThisWorkshop FROM trainee_workshop_attended WHERE workshop='$request';");
    $result1 = mysqli_query($link, $queryCount);
    $number =  mysqli_fetch_assoc($result1);
    $numberOfCounts = intval($number['numberOfThisWorkshop']);
 
    $data[] = array("y" => $numberOfCounts, "label" => $value['workshop']);

}

//free memory associated with result
$result->close();

//close connection
mysqli_close($link);

//now print the data
print json_encode($data);