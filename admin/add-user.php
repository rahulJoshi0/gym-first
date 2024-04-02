<?php
include_once("config2.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <?php include_once("includes/head.php") ?>


</head>

<body>
    <div id="wrapper">
        <?php include_once("includes/navbar-top.php") ?>
        <!-- /. NAV TOP  -->
        <?php include_once("includes/navbar-side.php") ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add User</h1>
                        <span class=""><strong><a href="dashboard.php">dashboard</a>>>Add users</strong></span>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                                <div class="panel-body">
                                <form role="form" action="user-save.php" method="POST">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input class="form-control" name="name" type="text" value="<?= $_SESSION["nam"]??'' ?>">
                                        <?php if(isset($_SESSION['nam_error'])){?>
                                            <span class="error">
                                                <?php 
                                                echo $_SESSION['nam_error'];
                                                unset($_SESSION['nam_error']);
                                                ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" name="email" type="text" value="<?= $_SESSION["emails"]??'' ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter phone</label>
                                        <input class="form-control" name="phone" type="tel" value="<?= $_SESSION["phones"]?? '' ?>">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="M"<?=(($_SESSION["genders"]??"")=="M")?"checked":"" ?>>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="F"<?=(($_SESSION["genders"]??"")=="F")?"checked":"" ?>>Female
                                                </label>
                                            </div>
                                            
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="O"<?=(($_SESSION["genders"]??"")=="O")?"checked":"" ?>>Other
                                                </label>
                                            </div>
                                            <div class="form-group">
                                        <label>Enter designation</label>
                                        <input class="form-control" name="designation" type="text" value="<?= $_SESSION["designations"]?? '' ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter password</label>
                                        <input class="form-control" name="password" type="password">
                                        <?php if(isset($_SESSION["password_error"])) { ?>
                                              <span class="error">
                                                  <?php
                                                   echo $_SESSION["password_error"];
                                                  unset($_SESSION["password_error"]);
                                              ?>
                                              </span>
                                          <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Enter password</label>
                                        <input class="form-control" name="re-password" type="password">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    </div>


                                    <button class="btn btn-info">Send Message </button>

                                </form>
                                <?php

                                
                                ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
    unset($_SESSION["nam"]);
    unset($_SESSION["emails"]);
    unset($_SESSION["phones"]);
    unset($_SESSION["genders"]);
    unset($_SESSION["designations"]);

    ?>
    <?php include_once("includes/footer.php") ?>




</body>

</html>