<?php
	include('../includes/config.php');
	
	$id=$_GET['idNo'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$id_no=$_POST['id'];
	$email=$_POST['email'];
	
	mysqli_query($link,"update trainee set firstname='$firstname', lastname='$lastname', idNo='$id_no', email='$email' where idNo='$id'");
	header('location:crud_trainee.php');

?>