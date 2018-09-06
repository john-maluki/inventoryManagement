<?php include_once("header/header.php"); ?>
<link href="css/nprogress.css" rel="stylesheet">
<!--start page content -->

<div class="x_content">
  <?php include("includes/admin-record-add.php");?>

                    <form class="form-horizontal form-label-left" novalidate method="POST" action="add_admin.php">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s)" required="required" type="text">
                          <?php if (isset($nameErr)): ?>
                              <span style="color:blue;"><?php echo $nameErr; ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                          <?php if (isset($emailErr)): ?>
                              <span style="color:blue;"><?php echo $emailErr; ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                          <?php if (isset($email_repErr)): ?>
                              <span style="color:blue;"><?php echo $email_repErr; ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">ID No<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="number" required="required" data-validate-minmax="10, 100" class="form-control col-md-7 col-xs-12" size="8">
                          <?php if (isset($phoneNoErr)): ?>
                              <span style="color:blue;"><?php echo $phoneNoErr; ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Designation <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text" name="designation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                          <?php if (isset($designationErr)): ?>
                              <span style="color:blue;"><?php echo $designationErr; ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                          <?php if (isset($passwordErr)): ?>
                              <span style="color:blue;"><?php echo $passwordErr; ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                          <?php if (isset($password_repErr)): ?>
                              <span style="color:blue;"><?php echo $password_repErr ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone No <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                          <?php if (isset($phoneNoErr)): ?>
                              <span style="color:blue;"><?php echo $phoneNoErr ?></span>
                            <?php endif ?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success" name="add">Add</button>
                        </div>
                      </div>
                    </form>
                  </div>     
<!--End page content -->


<script src="scripts/validator.js"></script>
<?php include_once("footer/footer.php"); ?>