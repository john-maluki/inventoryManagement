<?php
function get_table_data($table_name, $where_condition){
include("config.php");

//get the designations
 $sql = "SELECT * FROM $table_name WHERE ID = '$where_condition' ";
 $result = mysqli_query($link, $sql);

 return $result;
}

function get_all_row($table_name){
include("config.php");

//get the designations
 $sql = "SELECT * FROM $table_name";
 $result = mysqli_query($link, $sql);

 return $result;
}
 
?>