<?php
function get_user_total($data_collumn, $table_name){
include("config.php");
//get the designations
 $sql = "SELECT $data_collumn FROM $table_name WHERE user = '2'";
 $result = mysqli_query($link, $sql);

 $num = mysqli_num_rows($result);
 return $num;
}