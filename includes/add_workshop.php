<?php
 include("includes/config.php");
 include("includes/test.php");

 if (isset($_POST["add_workshop"])) {

  $workshop_nameErr = $venueErr = $added_byErr = $workshop_objectiveErr = $start_dateErr = $end_dateErr = "";
  $workshop_name = $venue = $added_by = $workshop_objective = $start_date = $end_date = "";

function field_empty($field_name){
	if (empty($field_name)) {
      return true;
    } else {
    return false;
      }

 }  

 if (field_empty($_POST["workshop_name"])) {
    $workshop_nameErr = "workshop name is required";
  } else {
  	
    $workshop_name = strtoupper(test_input($_POST["workshop_name"]));
    
  }


  if (field_empty($_POST["venue"])) {
    $venueErr = "venue is required";
  } else {
        $venue = test_input($_POST["venue"]);
  }

  if (field_empty($_POST["added_by"])) {
    $added_byErr = "Added by required";
  } else {
  	     
         $added_by = test_input($_POST["added_by"]);
  }


  if (field_empty($_POST["workshop_objective"])) {
    $workshop_objectiveErr = "Objective is required";
  } else {
    $workshop_objective = test_input($_POST["workshop_objective"]);
  }

  if (field_empty($_POST["start_date"])) {
    $start_dateErr = "Start date required";
  } else {
    $start_date = test_input($_POST["start_date"]);
  }

  if (field_empty($_POST["end_date"])) {
    $end_dateErr = "End date required";
  } else {
    $end_date = test_input($_POST["end_date"]); 
  }

  function check_if_already_registed($workshop_name){
    include("includes/config.php");
     $sql = "SELECT * FROM addedworkshop WHERE workshop_name='$workshop_name'";
     $result = mysqli_query($link, $sql);
     $rows = mysqli_num_rows($result);

     if ($rows > 0) {
       return true;
     }else{
       return false;
     }
  }


if (!($workshop_nameErr == "" && $venueErr == "" && $added_byErr == "" && $workshop_objectiveErr == "" &&
    $start_dateErr == "" && $end_dateErr == "")) {
     ;
}else{
  if (check_if_already_registed($workshop_name)) {
  echo '<div class="alert alert-danger fade in">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo '<h5 style="text-align:center;">Workshop with that name already exists!</h5>';
    echo '</div>';

}else{
    $sql = "INSERT INTO addedworkshop (workshop_name, venue, added_by, workshop_objective, start_date, end_date)
    VALUES ('$workshop_name', '$venue', '$added_by', '$workshop_objective','$start_date', '$end_date')";

   if (mysqli_query($link, $sql)) {
    //echo "New record created successfully";
    echo '<div class="alert alert-success fade in">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo '<h5 style="text-align:center;">Operation succeful</h5>';
    echo '</div>';
   } 

}

}

mysqli_close($link);

}else{
	//header("location: ../add_workshop.php");
}

?>