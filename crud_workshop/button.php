<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($link,"select * from addedworkshop where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Workshop Name: <strong><?php echo $drow['workshop_name']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa icon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa icon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($link,"select * from addedworkshop where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Workshop Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="workshop_name" class="form-control" value="<?php echo $erow['workshop_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Venue</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="venue" class="form-control" value="<?php echo $erow['venue']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Start Date</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="start_date" class="form-control" value="<?php echo $erow['start_date']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">End Date</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="end_date" class="form-control" value="<?php echo $erow['end_date']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa icon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="fa icon-save"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->