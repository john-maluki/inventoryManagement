<?php
 include("includes/config.php");
 include("includes/test.php");

 if (isset($_POST["add"])) {

  $nameErr = $emailErr = $email_repErr = $idNoErr = $designationErr = $passwordErr = $password_repErr = $phoneNoErr = "";
  $name = $email = $email_rep = $idNo = $designation = $password = $password_rep = $phoneNo = "";

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

 if (field_empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
  	if(validate_name($_POST["name"])){
  	 $nameErr = "Only letters and white space allowed"; 	
  	}else{
  	   $name = ucwords(test_input($_POST["name"])); 
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

  if (field_empty($_POST["confirm_email"])) {
    $email_repErr = "Confirm Email is required";
  } else {
  	     if(validate_email($_POST["confirm_email"])){
            $emailErr = "Invalid email format";
  	     }else{
  	     	$email_rep = test_input($_POST["confirm_email"]);
  	     }
  }

   if($email != $email_rep){
      $email_repErr = "Email don't match";
   }else{
   	
   	    $email_confirmed = test_input($_POST["confirm_email"]);
   }

  if (field_empty($_POST["number"])) {
    $idNoErr = "id number is required";
  } else {
    $idNo = test_input($_POST["number"]);
  }

  if (field_empty($_POST["designation"])) {
    $designationErr = "Designation required";
  } else {
    $designation = test_input($_POST["designation"]);
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
      $passwordErr = "password don't match";
   }else{
   	 $password_param = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash 
   }

  if (field_empty($_POST["phone"])) {
    $phoneNoErr = "phone is required";
  } else {
    $phoneNo = test_input($_POST["phone"]);
  }

  function check_if_already_registed($idNo){
    include("includes/config.php");
     $sql = "SELECT * FROM admin WHERE idNo='$idNo'";
     $result = mysqli_query($link, $sql);
     $rows = mysqli_num_rows($result);

     if ($rows > 0) {
       return true;
     }else{
       return false;
     }
  }

if (!($nameErr == "" && $emailErr == "" && $email_repErr == "" && $idNoErr == "" &&
    $designationErr == "" && $passwordErr == "" && $password_repErr == "" && $phoneNoErr == "")) {
     ;
}else{
  if (check_if_already_registed($idNo)) {
  echo '<div class="alert alert-danger fade in">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo '<h5 style="text-align:center;">Account present with that ID!</h5>';
    echo '</div>';

}else{
    $sql = "INSERT INTO admin (name, email, idNo, designation, password, phoneNo)
    VALUES ('$name', '$email_confirmed', '$idNo', '$designation','$password_param', '$phoneNo')";

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
	//header("location: add_admin.php");
}

?>