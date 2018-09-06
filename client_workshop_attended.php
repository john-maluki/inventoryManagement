<?php include_once("header/header_client.php"); ?>
<?php include_once("includes/select_data_from_table.php"); ?>
<link href="css/nprogress.css" rel="stylesheet">
<!--start page content -->
<div class="panel panel-default">
                        <div class="panel-heading">
                            Workshop you have attended
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Workshop Name</th>
                                            <th>Venue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = get_table_data("trainee_workshop_attended", $_SESSION['idNo']);
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                                echo "<td>" . $row['workshop'] . "</td>";
                                                echo "<td>" . $row['venue'] . "</td>";
                                            echo "</tr>";
        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!--End page content -->
<script src="scripts/validator.js"></script>
<?php include_once("footer/footer_client.php"); ?>