<?php
	include('../includes/config.php');
	
	$id=$_GET['idNo'];
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$new_id=$_POST['idNo'];
	$designation=$_POST['designation'];
	$phone_no=$_POST['phone'];
	
	mysqli_query($link, "update admin set name='$name', email='$email', idNo='$new_id', designation='$designation', phoneNo='$phone_no' where idNo='$id'");
	header('location:crud_admin.php');

?>