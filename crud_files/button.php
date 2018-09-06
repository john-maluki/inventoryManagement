<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['idNo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($link,"select * from admin where idNo='".$row['idNo']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Name: <strong><?php echo $drow['name']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa icon-remove"></span> Cancel</button>
                    <a href="delete.php?idNo=<?php echo $row['idNo']; ?>" class="btn btn-danger"><span class="fa icon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['idNo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($link,"select * from admin where idNo='".$row['idNo']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?idNo=<?php echo $erow['idNo']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="name" class="form-control" value="<?php echo $erow['name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="email" name="email" class="form-control" value="<?php echo $erow['email']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID No:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="idNo" class="form-control" value="<?php echo $erow['idNo']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Designation:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="designation" class="form-control" value="<?php echo $erow['designation']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Phone No:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="phone" class="form-control" value="<?php echo $erow['phoneNo']; ?>">
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