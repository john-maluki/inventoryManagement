<?php include_once("header/header.php"); ?>
<?php include_once("includes/get_all_row.php"); ?>
<link href="css/dataTables.bootstrap.css" rel="stylesheet" />

<!--start page content -->
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            People who have taken various courses
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>ID</th>
                                            <th>Workshop</th>
                                            <th>Venue</th>
                                            <th>Designation</th>
                                            <th>Sub County</th>
                                            <th>Facility</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = get_all_row("trainee_workshop_attended");
                                         while($row = mysqli_fetch_array($result)){
                                                echo "<tr class='even gradeA'>";
                                                    echo "<td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['ID'] . "</td>";
                                                    echo "<td>" . $row['workshop'] . "</td>";
                                                    echo "<td class='center'>" . $row['venue'] . "</td>";
                                                    echo "<td class='center'>" . $row['designation'] . "</td>";
                                                    echo "<td class='center'>" . $row['subcounty'] . "</td>";
                                                    echo "<td class='center'>" . $row['facility'] . "</td>";

                                                echo "</tr>";
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>         
<!--End page content -->



    <script src="scripts/jquery.dataTables.js"></script>
    <script src="scripts/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>

</div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>New admins &nbsp; : <span>
                        <?php 
                            $rows = get_raw_total("idNo", "admin");
                            echo $rows;
                        ?>
                    </span></li>
                    <li>New Users &nbsp; : <span>
                        <?php 
                            $rows = get_raw_total("username", "trainee");
                            echo $rows;
                        ?>
                    </span></li>
                    <li>Current Workshops &nbsp; : <span>
                        <?php 
                            $rows = get_raw_total("workshop_name", "addedworkshop");
                            echo $rows;
                        ?>
                    </span></li>
                </ul>
            </div>
            <div class="well well-small">
                <a style ="text-decoration:none"class="btn-block" href="crud_files/crud_admin.php"><button class="btn btn-primary btn-block"> Admins</button></a>
                <a style ="text-decoration:none"class="btn-block" href="crud_workshop/crud_workshop.php"><button class="btn btn-info btn-block">Workshops</button></a>
                <a style ="text-decoration:none"class="btn-block" href="crud_trainee/crud_trainee.php"><button class="btn btn-success btn-block">Trainee</button></a>
                <a style ="text-decoration:none"class="btn-block" href="view_venues.php"><button class="btn btn-danger btn-block">Venues</button></a>
                <a style ="text-decoration:none"class="btn-block" href="view_objectives.php"><button class="btn btn-warning btn-block">Objectives</button></a>
            </div> 
            
        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  johnmaluki &nbsp;2018 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="scripts/jquery-2.0.3.min.js"></script>
     <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="scripts/jquery.dataTables.js"></script>
    <script src="scripts/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>