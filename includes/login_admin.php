<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$idNo = $password = "";
$idNo_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["idno"]))){
        $idNo_err = 'Please enter username.';
    } else{
        $idNo = trim($_POST["idno"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials admin
    if(empty($idNo_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT name, idNo, password FROM admin WHERE idNo = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $idNo;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $name, $idNo, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['name'] = $name; 
                            $_SESSION['idNo'] = $idNo;     
                            header("location: ../index.php");
                        } else{
                            // Display an error message if password is not valid
                            //$password_err = 'The password you entered was not valid.';
                            header("location: ../login.php");
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    //$idNo_err = 'No account found with that username.';
                    header("location: ../login.php");
                }
            } else{
                //echo "Oops! Something went wrong. Please try again later.";
                header("location: ../login.php");
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }else{
        header("location: ../login.php");

    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
