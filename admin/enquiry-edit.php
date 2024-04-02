<?php
include_once("config2.php");

$id = $_GET['id'];
$selQuery = "SELECT * FROM `enquiries` WHERE id=$id";
$enquiryQuery = $con->query($selQuery);

$_user = mysqli_fetch_assoc($enquiryQuery);
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
                        <h1 class="page-head-line">edit enquiry</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.
                        </h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                                <div class="panel-body">
                                <form role="form" action="enquiry-update.php" method="POST">
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
                                    <div class="form-group">
                                        <label>Enter message</label>
                                        <input class="form-control" name="message" type="text" value="<?= $_user['message']?? '';?>">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
										<label>Status</label>
										<select name="status" class="form-control">
											<option></option>
											<option value="1"<?=(($_user['status']??'')=="1")?"selected" :'' ?>>un-read</un-read></option>
											<option value="2"<?=(($_user['status']??'')=="2")?"selected" :'' ?>>read</option>
										</select>
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