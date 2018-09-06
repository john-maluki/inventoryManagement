<?php include_once("header/header.php"); ?>

<!--start page content -->
<div id="dateRangePickerBlock" class="body collapse in">   
 <?php include("includes/add_workshop.php");?>        
    
                    <form role="form" method="POST" action="Workshop.php">
                                        <div class="form-group">
                                            <label>Workshop Name</label>
                                            <input class="form-control" type="text" required="required" name="workshop_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Venue</label>
                                            <input class="form-control" type="text" required="required" name="venue">
                                        </div>
                                        <div class="form-group">
                                            <label>Added By: Admin Name</label>
                                            <input class="form-control" placeholder="name" type="text" required="required" name="added_by" value="<?php echo $_SESSION['name'];?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Workshop Objectives</label>
                                            <textarea class="form-control" rows="5"  required="required" name="workshop_objective"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input class="form-control" placeholder="name" type = "date" required="required" name="start_date">
                                        </div>
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input class="form-control" placeholder="name" type = "date" required="required" name="end_date">
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="add_workshop">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                    </form>
                                 </div>
<!--End page content -->



<?php include_once("footer/footer.php"); ?>