<?php include_once("header/header.php"); ?>
<?php include_once("includes/get_all_row.php"); ?>
<!--start page content -->
               <div class="panel panel-default">
                        <div class="panel-heading">
                            Objectives on various workshops
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Workshop Name</th>
                                            <th>Objective</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = get_all_row("addedworkshop");
                                         while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['workshop_name'] . "</td>";
                                                    echo "<td>" . $row['workshop_objective'] . "</td>";
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