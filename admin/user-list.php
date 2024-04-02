<?php
include_once("config2.php");

$selQuery = "SELECT*FROM `users`";

$userQuery = $con->query($selQuery);
// print_r($userQuery);
// die();
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
                        <h1 class="page-head-line">USER LIST</h1>
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
                                            <th> Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>designation</th>
                                            <!-- <th>password</th> -->
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    <tbody>
                                        <?php 
                                        if($userQuery->num_rows) {
                                            $i = 1;
                                            while($_user = mysqli_fetch_assoc($userQuery))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $_user['name'] ?></td>
                                                    <td><?= $_user['email'] ?></td>
                                                    <td><?= $_user['phone'] ?></td>
                                                    <td><?= ($_user['gender']=="M")?"male":"female" ?></td>
                                                    <td><?= $_user['designation'] ?></td>
                                                  
                                                    <td><a href="user-edit.php?id=<?= $_user['id'] ?>"class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                        <a href="user-delete.php?id=<?= $_user['id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash "></i>delete</a></td>
                                                </tr>
                                           <?php
                                            }
                                        }else{
                                            ?>
                                            <tr>
                                                <td colspan='7' align='center'>no data</td>
                                            </tr>
                                      <?php  }
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
   
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>


</body>
</html>
