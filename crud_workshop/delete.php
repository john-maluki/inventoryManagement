<?php
	
	include('../includes/config.php');
	$id=$_GET['id'];
	mysqli_query($link,"delete from addedworkshop where id='$id'");
	header('location:crud_workshop.php');

?>