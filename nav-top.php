<?php
// die();

$selectQuery = "SELECT * FROM `pages`";
$pageQuery = $con->query($selectQuery);
//dd($slQuery);
?>
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              RAHUL FITNESS 26
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php while($_data = mysqli_fetch_assoc($pageQuery)) {                           
                  ?>
                  <li class="nav-item active">
                    <a href="page.php?id=<?= $_data['id'] ?>"class="nav-link"><?= $_data["titel"] ?></a>
                  </li>
                <?php } ?>
                 <!-- <li class="nav-item ">
                  <a class="nav-link" href="why.php"> Why us </a>
                </li>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="trainer.php"> trainers</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> Contact Us</a>
                </li> 
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>