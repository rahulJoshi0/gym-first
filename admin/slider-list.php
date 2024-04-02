<?php
include_once("config2.php");
include_once("includes/validation.php");

$selQuery = "SELECT*FROM `slider`";
$slideQuery = $con->query($selQuery);
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
                        <h1 class="page-head-line">SLIDER LIST</h1>
                        <span class=""><strong><a href="dashboard.php">dashboard</a>>> Add List</strong></span>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover display" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>titel</th>
                                            <th>ordering</th>
                                            <th>status</th>
                                            <th>image</th>
                                            <!-- <th>designation</th> -->
                                            <!-- <th>password</th> -->
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    <tbody>
                                        <?php 
                                        if($slideQuery->num_rows) {
                                            $i = 1;
                                            while($_slide = mysqli_fetch_assoc($slideQuery))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $_slide['titel'] ?></td>
                                                    <td><?= $_slide['ordering'] ?></td>
                                                    <td><?= ($_slide['status']=="1")?"enable":"disable" ?></td>
                                                    <td style="width:30%">
                                                        <img src="<?= $_slide['image'] ?>" alt="" style="width:50%;">
                                                    </td>
                                                  
                                                    <td><a href="slider-edit.php?id=<?= $_slide['id'] ?>"class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                        <a href="slider-delete.php?id=<?= $_slide['id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash "></i>delete</a></td>
                                                </tr>
                                           <?php
                                            }
                                      }
                                      ?>
                                   
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
              
            </div>
 
          
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

  <?php include_once("includes/footer.php") ?>
   
    <!-- <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script> -->


</body>
</html>