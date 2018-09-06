<?php include_once("header/header.php"); ?>
<?php include_once("includes/get_all_row.php"); ?>
<!--start page content -->
    
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Venues on various workshops
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>Venue</th>
                                            <th>Workshop Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        $result = get_all_row("addedworkshop");
                                         while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['venue'] . "</td>";
                                                    echo "<td>" . $row['workshop_name'] . "</td>";
                                                    echo "<td>" . $row['start_date'] . "</td>";
                                                    echo "<td>" . $row['end_date'] . "</td>";

                                                echo "</tr>";
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!--End page content -->
<?php include_once("footer/footer.php"); ?>            