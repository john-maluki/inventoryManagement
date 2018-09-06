<?php
 include("includes/config.php");
 include("includes/test.php");

 if (isset($_POST["register"])) {

  $firstnameErr = $lastnameErr = $middlenameErr = $emailErr = $idNoErr = $usernameErr = $passwordErr = $password_repErr = "";
  $firstname = $lastname = $middlename = $email = $idNo = $username = $password = $password_rep = "";

function field_empty($field_name){
	if (empty($field_name)) {
      return true;
    } else {
    return false;
      }

 }


 function validate_name($field){
  	if (!preg_match("/^[a-zA-Z ]*$/", $field)) {
       return true;
    }else{
    	return false;
    }

  }

  function validate_email($field){
  	if (!filter_var($field, FILTER_VALIDATE_EMAIL)) {
         return true;
     }else{
     	return false;
     }
   }  

 if (field_empty($_POST["firstname"])) {
    $firstnameErr = "First is required";
  } else {
  	if(validate_name($_POST["firstname"])){
  	 $firstnameErr = "Only letters and white space allowed";
  	}else{
  	   $firstname = ucwords(test_input($_POST["firstname"]));
  	}
    
  }

  if (field_empty($_POST["lastname"])) {
    $lastnameErr = "lastname is required";
  } else {
    if(validate_name($_POST["lastname"])){
     $lastnameErr = "Only letters and white space allowed";  
    }else{
       $lastname = ucwords(test_input($_POST["lastname"]));
    }
    
  }

  if (field_empty($_POST["middlename"])) {
    $middlenameErr = "middlename is required";
  } else {
    if(validate_name($_POST["middlename"])){
     $middlenameErr = "Only letters and white space allowed";  
    }else{
       $middlename = ucwords(test_input($_POST["middlename"]));
    }
    
  }


  if (field_empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
  	   if(validate_email($_POST["email"])){
  	   	 $emailErr = "Invalid email format"; 
  	   }else{
  	   	    $email = test_input($_POST["email"]);
  	   }
  }

  if (field_empty($_POST["number"])) {
    $idNoErr = "id number is required";
  } else {
    $idNo = test_input($_POST["number"]);
  }

  if (field_empty($_POST["username"])) {
    $usernameErr = "username required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (field_empty($_POST["password"])) {
    $passwordErr = "Password required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (field_empty($_POST["password2"])) {
    $password_repErr = "Password is required";
  } else {
    $password_rep = test_input($_POST["password2"]);
  }

  if($password != $password_rep){
      $password_repErr = "password don't match";
   }else{
   	 $password_param = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash 
   }

   function check_if_already_registed($idNo, $username){
    include("config.php");
     $sql = "SELECT * FROM trainee WHERE idNo='$idNo' AND username='$username'";
     $result = mysqli_query($link, $sql);
     $rows = mysqli_num_rows($result);

     if ($rows > 0) {
       return true;
     }else{
       return false;
     }
  }

  if (!($firstnameErr =="" && $lastnameErr =="" && $middlenameErr =="" &&  $emailErr =="" &&  $idNoErr =="" &&  $usernameErr =="" && 
   $passwordErr =="" &&  $password_repErr == "")) {
     ;
}else{
  if (check_if_already_registed($idNo, $username)) {
  echo '<div class="alert alert-danger fade in">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo '<h5 style="text-align:center;">Account present with that ID!</h5>';
    echo '</div>';

}else{
    $sql = "INSERT INTO trainee (firstname, lastname, middlename, idNo, username, email, password)
    VALUES ('$firstname', '$lastname', '$middlename', '$idNo', '$username', '$email',  '$password_param')";

   if (mysqli_query($link, $sql)) {
    //echo "New record created successfully";
    echo '<div class="alert alert-success fade in">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo '<h5 style="text-align:center;">New account created successfully</h5>';
    echo '</div>';
   } 

}

}

mysqli_close($link);

}else{
	//header("location: login.php");
}

?>