<?php include_once("header/header_client.php"); ?>
<?php include("includes/get_data_for_form_fields.php"); ?>
<link href="css/nprogress.css" rel="stylesheet">
<!--start page content -->
<form role="form" method="POST" action="includes/client_join_workshop.php">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type = "text" name="name" required value="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>">
                                            <span><?php if (isset($nameErr)) {echo $nameErr;}?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input type = "number" class="form-control"  name="id" required value="<?php echo $_SESSION['idNo']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Workshop</label>
                                            <select class="form-control" name="workshop">
                                                <?php
                                                 $result = get_data_for_fields("workshop_name", "addedworkshop");
                                                while($row = mysqli_fetch_array($result)){
                                                    echo "<option>" . $row['workshop_name'] . "</option>"; 
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Venue</label>
                                            <select class="form-control" name="venue">
                                                <?php
                                                 $result = get_data_for_fields("venue", "addedworkshop");
                                                while($row = mysqli_fetch_array($result)){
                                                    echo "<option>" . $row['venue'] . "</option>"; 
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <select class="form-control" name="designation">
                                                <?php
                                                 $result = get_data_for_fields("designation", "designation");
                                                while($row = mysqli_fetch_array($result)){
                                                    echo "<option>" . $row['designation'] . "</option>"; 
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <?php

                                        echo '<div class="form-group">';
                                        echo '<label>Sub County</label>';
                                        echo '<select class="form-control" name="subcounty">';
                                                $result = get_data_for_fields("*", "migori");
                                                while($row = mysqli_fetch_array($result)){
                                                    echo '<option>'.$row['sub_county'].'</option>';
                                                }
                                        echo '</select>';
                                        echo '</div>';
                                        

                                        echo '<div class="form-group">';
                                        echo'<label>Facility</label>';
                                        echo'<select class="form-control" name="facility">';
                                                $result = get_data_for_fields("*", "facility");
                                                while($row = mysqli_fetch_array($result)){
                                                   
                                                    echo '<option>'.$row['RONGO'].'</option>';
                                                    
                                                }
                                        echo'</select>';
                                        echo '</div>';
                                        ?>
                                        <button type="submit" class="btn btn-default" name="join">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>  
<!--End page content -->
<script src="scripts/validator.js"></script>
<?php include_once("footer/footer_client.php"); ?>