<?php
 if(isset($_POST["sign_in"])){
    $select_code = $_POST["select_code"];
    if($select_code == 1){
        include("login_admin.php");

    }else{
         include("login_client.php");

    }
    /*switch($select_code){
        case label 1:
             include("includes/login_admin.php");
             break;

        case label 2:
             include("includes/login_client.php");
             break;      

    }*/
 }
?>