<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'inventorymanagement');

$localhost = 'localhost';
$db = 'inventorymanagement';
$user = 'root';
$pass = '';
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect($localhost, $user, $pass, $db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>