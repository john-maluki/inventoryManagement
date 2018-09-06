<?php
	
	include('../includes/config.php');
	$id=$_GET['idNo'];
	mysqli_query($link,"delete from admin where idNo='$id'");
	header('location:crud_admin.php');

?>