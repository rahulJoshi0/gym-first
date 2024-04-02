<?php
include_once("config2.php");

$selQuery = "SELECT*FROM `enquiries`";
$dataQuery = $con->query($selQuery);
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
                        <h1 class="page-head-line">enquiry LIST</h1>
                        <span class=""><strong><a href="dashboard.php">dashboard</a>>> enquiry List</strong></span>
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
                                            <th>name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>message</th>
                                            <th>status</th> 
                                        </tr>
                                        </thead>
                                    <tbody>
                                        <?php 
                                        if($dataQuery->num_rows) {
                                            $i = 1;
                                            while($_data = mysqli_fetch_assoc($dataQuery))
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $_data['name'] ?></td>
                                                    <td><?= $_data['email'] ?></td>
                                                    <td><?= $_data['phone'] ?></td>
                                                    <td><?= $_data['message'] ?></td>                                                
                                                    <td id="status_id<?= $_data['id'] ?>">
                                                        <?php if($_data['status']==1){ ?> 
                                                            <button data-id="<?= $_data['id'] ?>"class="btn btn-danger status_class">Unread</button>
                                                      <?php  }else{ ?> 
                                                        <button class="btn btn-success">Read</button>
                                                     <?php } ?>  
                                                    <!-- <//?= ($_data['status']=="1")?"un-read":"read" ?></td> -->
                                                        
                                                   
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
  <script>
    $(document).ready(function(){
        $(".status_class").click(function(){
            ids = $(this).attr('data-id');
            $.ajax({
                url:'enquary-save.php',
                type: 'POST',
                data:{s_id:ids},
                success: function(result){
                    $("#status_id"+ids).html(result);
                },
                error: function(er){
                    alert(er);
                }
            });
        });
    });
  </script>
   
    <!-- <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script> -->


</body>
</html>