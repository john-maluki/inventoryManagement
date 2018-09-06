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
        <p>&copy;   &nbsp;2018 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="scripts/jquery-2.0.3.min.js"></script>
     <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="scripts/jquery.flot.js"></script>
    <script src="scripts/jquery.flot.resize.js"></script>
    <script src="scripts/jquery.flot.time.js"></script>
     <script  src="scripts/jquery.flot.stack.js" ></script>
    <script src="scripts/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>