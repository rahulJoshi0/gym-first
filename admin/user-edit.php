<?php
include_once("config2.php");

$id = $_GET['id'];
$selQuery = "SELECT * FROM `users` WHERE id=$id";
$userQuery = $con->query($selQuery);

$_user = mysqli_fetch_assoc($userQuery);
// dd($id);
// header("location: user-list.php");
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
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.
                        </h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                                <div class="panel-body">
                                <form role="form" action="user-update.php" method="POST">
                                     <input type="hidden" name="id" value="<?= $_user['id'] ?>">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input class="form-control" name="name" type="text" value="<?= $_user['name']?? "";?> ">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" name="email" type="text" value="<?= $_user['email']?? '';?>">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter phone</label>
                                        <input class="form-control" name="phone" type="tel" value="<?= $_user['phone']?? '';?>">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="M"<?= (($_user['gender']??"") == "M") ? "checked" :"" ?>>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="F"<?= (($_user['gender']??"") == "F") ? "checked":"" ?>>Female
                                                </label>
                                            </div>
                                            <div class="form-group">
                                        <label>Enter designation</label>
                                        <input class="form-control" name="designation" type="text" value= "<?= $_user['designation']?? ''; ?>" >
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter password</label>
                                        <input class="form-control" name="password" type="text"  value="<?= $_user['password']?? ''; ?>">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    </div>


                                    <button type="submit" class="btn btn-info">Send Message </button>

                                </form>
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

    <?php include_once("includes/footer.php") ?>




</body>

</html>