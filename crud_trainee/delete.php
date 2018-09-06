<?php
	include('../includes/config.php');
	$id=$_GET['idNo'];
	mysqli_query($link,"delete from trainee where idNo='$id'");
	header('location:crud_trainee.php');

?>