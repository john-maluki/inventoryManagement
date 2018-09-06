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
					$del=mysqli_query($link,"select * from trainee where idNo='".$row['idNo']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Name: <strong><?php echo $drow['firstname'].' '.$drow['lastname']; ?></strong></center></h5> 
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
					$edit=mysqli_query($link,"select * from trainee where idNo='".$row['idNo']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?idNo=<?php echo $erow['idNo']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">First name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="firstname" class="form-control" value="<?php echo $erow['firstname']; ?>">
						</div>
					</div>
					<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Last name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lastname" class="form-control" value="<?php echo $erow['lastname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="id" class="form-control" value="<?php echo $erow['idNo']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email</label>
						</div>
						<div class="col-lg-10">
							<input type="email" name="email" class="form-control" value="<?php echo $erow['email']; ?>">
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