<?php 

require_once '../includes/confid.php';

$memberId = $_POST['member_id'];

$sql = "SELECT * FROM members WHERE id = $memberId";
$query = $link->query($sql);
$result = $query->fetch_assoc();

$link->close();

echo json_encode($result);

