<?php
include_once("config2.php");
include_once("includes/validation.php");

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
                        <h1 class="page-head-line">Add slider</h1>
                        <span class=""><strong><a href="dashboard.php">dashboard</a>>>Add slider</strong></span>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                                <div class="panel-body">
                                <form role="form" action="slider-save.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Enter titel</label>
                                        <input class="form-control" name="titel" type="text" >
                                    </div>
                                    <div class="form-group">
                                        <label>Enter ordering</label>
                                        <input class="form-control" name="ordering" type="number" >
                                    </div>
                                 
                                    <div class="form-group">
                                            <label>status</label>
                                            <select class="form-control" name="status">
                                                <option value="">select</option>
                                                <option value="1">enable</option>
                                                <option value="2">disable</option>                                                
                                            </select>
                                        </div>
                                    <!-- <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div> -->
                                    <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>


                                    <button class="btn btn-info">Save</button>

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
  
    <?php include_once("includes/footer.php") ?>




</body>

</html>