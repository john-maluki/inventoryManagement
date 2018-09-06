<?php

 function get_number_of_rows($collumn, $table){
 // Include config file
require_once 'config.php';
 $sql = "SELECT * FROM $table";
 $do_query = mysqli_query($link, $sql);

 $rows = mysqli_num_rows($do_query);

 return $rows;

}


?>