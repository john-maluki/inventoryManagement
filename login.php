 <?php include("includes/register.php");?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Migori Inventory Training Management | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/magic.min.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="img/logo.png" id="logoimg" alt=" Inventory System" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="includes/login.php" class="form-signin" method="POST">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p>
                <input type="text" placeholder="Username" class="form-control" requred = "required" name="idno"/>
                <input type="password" placeholder="Password" class="form-control" name="password"/>
                <select class="form-control" name="select_code">
                    <option>1</option>
                    <option>2</option>
                                                
                </select><br>
                <button class="btn text-muted text-center btn-danger" type="submit" name="sign_in">Sign in</button>
            </form>
        </div>
        
        <div id="signup" class="tab-pane">
            <form action="login.php" class="form-signin" method="POST">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                 <input type="text" placeholder="First Name" class="form-control" name="firstname"/>
                 <input type="text" placeholder="Last Name" class="form-control" name="lastname"/>
                 <input type="text" placeholder="Middle Name" class="form-control" name="middlename"/>
                 <input type="number" placeholder="ID" class="form-control" name="number"/>
                <input type="text" placeholder="Username" class="form-control" name="username"/>
                <input type="email" placeholder="Your E-mail" class="form-control" name="email"/>
                <input type="password" placeholder="password" class="form-control" name="password"/>
                <input type="password" placeholder="Re type password" class="form-control" name="password2"/>
                <button class="btn text-muted text-center btn-success" type="submit" name="register">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="scripts/jquery-2.0.3.min.js"></script>
      <script src="scripts/bootstrap.js"></script>
   <script src="scripts/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
