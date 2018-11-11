<?php
include("config.php");


 $sql = "SELECT * FROM facility";
 $result = mysqli_query($link, $sql);

 $output = mysqli_fetch_assoc($result);

 echo json_encode($output);
 ?>