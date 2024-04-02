﻿<?php
require_once("config2.php");
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
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <?php include_once("includes/message.php") ?>
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