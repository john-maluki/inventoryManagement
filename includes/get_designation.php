<?php
function get_data_for_fields($data_collumn, $table_name){
include("config.php");

//get the designations
 $sql = "SELECT $data_collumn FROM $table_name";
 $result = mysqli_query($link, $sql);
 $num = mysqli_num_rows($result);
 return $num;
 
}
 
?>