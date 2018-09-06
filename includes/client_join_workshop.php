<?php
 include("config.php");
 include("test.php");

 if (isset($_POST["join"])) {
  $nameErr = $idErr = $workshopErr = $designationErr = $subcountyErr = $facilityErr = "";
  $name = $id = $workshop = $designation = $subcounty = $facility = "";

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

 if (field_empty($_POST["name"])) {
    $nameErr = "Name is required";
    }elseif(validate_name($_POST["name"])){
  	 $nameErr = "Only letters and white space allowed";	
  	}else{
  	   $name = test_input($_POST["name"]); 
  	}
    

  if (field_empty($_POST["id"])) {
    $idErr = "ID is required";
  } else {
  	   	  $id = test_input($_POST["id"]);
  }

  if (field_empty($_POST["workshop"])) {
    $workshopErr = "Select workshop";
  } else {
    $workshop = test_input($_POST["workshop"]);
  }

  if (field_empty($_POST["venue"])) {
    $venueErr = "Select venue";
  } else {
    $venue = test_input($_POST["venue"]);
  }

  if (field_empty($_POST["designation"])) {
    $designationErr = "Designation required";
  } else {
    $designation = test_input($_POST["designation"]);
  }

  if (field_empty($_POST["subcounty"])) {
    $subcountyErr = "Select sub county required";
  } else {
    $subcounty = test_input($_POST["subcounty"]);
  }

  if (field_empty($_POST["facility"])) {
    $faclityErr = "facility is required";
  } else {
    $facility = test_input($_POST["facility"]);
  }

  function check_if_already_registed($id, $workshop){
    include("config.php");
     $sql = "SELECT * FROM trainee_workshop_attended WHERE ID='$id' AND workshop='$workshop'";
     $result = mysqli_query($link, $sql);
     $rows = mysqli_num_rows($result);

     if ($rows > 0) {
       return true;
     }else{
       return false;
     }
  }


  if (check_if_already_registed($id, $workshop)) {
    echo '<script language="javascript">';
              echo 'alert("It looks like you have already done this!"); location.href="../client.php"';
              echo '</script>';
  }else{
    $sql = "INSERT INTO trainee_workshop_attended (name, ID, workshop, venue, designation, subcounty, facility)
    VALUES ('$name', '$id', '$workshop', '$venue', '$designation','$subcounty', '$facility')";

          if (mysqli_query($link, $sql)) {
              //echo "New record created successfully";
              echo '<script language="javascript">';
              echo 'alert("Successfully Registered"); location.href="../client.php"';
              echo '</script>';           
           
          } else {
              //echo "Error: " . $sql . "<br>" . mysqli_error($link);
            
          }

          mysqli_close($link);


     
     }
   }


?>