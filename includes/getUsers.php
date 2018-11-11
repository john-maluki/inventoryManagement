<?php
include "config.php";

$departid = $_POST['county'];   // department id

$sql = "SELECT id, name  FROM health_facilities WHERE sub_county_id=".$departid;

$result = mysqli_query($link,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['id'];
    $name = $row['name'];

    $users_arr[] = array("id" => $userid, "name" => $name);
}

// encoding array to json format
echo json_encode($users_arr);