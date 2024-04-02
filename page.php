<?php 
include_once("admin/config2.php");

$id = $_GET["id"];

// echo $page_id;


$sltQuery = "SELECT * FROM `pages` WHERE id = $id";
$pagQuery = $con->query($sltQuery);
// dd($pagQuery);
// $sltQuery = "SELECT * FROM `pages` WHERE id =$id";
// $pagQuery = $con->query($sltQuery);

$data = mysqli_fetch_assoc($pagQuery);

// $_title = $_page_data['title'];
// $_img = $_page_data['banner_image'];
// $_heading = $_page_data['heading'];
// $_description = $_page_data["description"];
// echo $_img;
 $titel = $data['titel'];

$img = $data['banner_image'];
$heading = $data['heading'];
$description = $data['description'];
// $ordering = $data['ordering'];
// $status = $data['status'];
// $url_key = $data['url_key']; 

// dd($titel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <?php include_once("header.php"); ?>
</head>

<body class="sub_page">
    <div class="hero_area">
        <?php include_once("nav-top.php"); ?>
    </div>



    <!-- Page Header Start -->

    <!-- Page Header End -->
    
  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="admin/<?= $img ?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  QUALITY EQUIPMENT
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  NUTRITION
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  HEALTHY DIET PLAN
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  SPORT TRAINING
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <section class="heathy_section layout_padding">
    <div class="container">

      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="detail-box">
            <h2>
              <?= $heading ?>
            </h2>
            <p>
              <?= $description ?>
            </p>
            <div class="btn-box">
              <a href="">
                READ MORE
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4"><?// $heading ?></h1>

                    <?// $description ?>

                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <?php include_once("footer.php"); ?>
</body>

</html>