<?php
	include('../includes/config.php');
	
	$id=$_GET['id'];
	
	$workshop_name=$_POST['workshop_name'];
	$venue=$_POST['venue'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	
	
	mysqli_query($link, "update addedworkshop set workshop_name='$workshop_name', venue='$venue', start_date='$start_date', end_date='$end_date' where id='$id'");
	header('location:crud_workshop.php');

?>