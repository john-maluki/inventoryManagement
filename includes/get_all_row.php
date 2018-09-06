<?php
function get_all_row($table_name){
include("config.php");

//get rows data
 $sql = "SELECT * FROM $table_name";
 $result = mysqli_query($link, $sql);

 return $result;
}
?>