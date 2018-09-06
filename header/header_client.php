<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Migori Inventory Training Management| Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <script src="js.js"></script>
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="css/layout2.css" rel="stylesheet" />
       <link href="css/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="css/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="client_dashboard.php" class="navbar-brand">
                    <img src="img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION["username"]; ?>
                            <i class="fa fa-caret-down"></i>&nbsp; <i class="fa fa-user"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="login.php"><i class="fa fa-caret-right"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="Logo Picture" src="img/migori_logo.jpeg" />
                </a>
                <a class="user-link" href="http://migori.go.ke" target = "_tab">
                    <img class="media-object img-thumbnail user-img" alt="Logo Picture" src="img/migori-go.jpg" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"></h5>
                    <ul class="list-unstyled user-info">
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="client_dashboard.php" >
                        <i></i> Dashboard
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i> </i> Available operations   
	   
                        <span class="pull-right">
                          <i class="icon-gle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="client.php"><i></i> New Workshop </a></li>
                         <li class=""><a href="client_workshop_attended.php"><i></i> Workshop attended</a></li>
                    
                    </ul>
                </li>
            
            </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo "<h1>Client: ".$_SESSION["username"]."</h1>" ?>
                    </div>
                </div>
                  <hr />  