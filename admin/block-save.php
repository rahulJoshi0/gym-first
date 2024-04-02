<?php
include_once("config2.php");


$data = $_POST;

$foldername = "uploades/";

$imgbasName = basename($_FILES["image"]["name"]);

$imageData = $foldername . $imgbasName;
$tmpName = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmpName, $imageData);

  $identifier = $data['identifier'];
  $titel = $data['titel'];
  $heading = $data['heading'];
  $description = $data['description'];
  // $banner_image = $data['banner_image'];
  $ordering = $data['ordering'];
  $status = $data['status'];
//   $url_key = $data['url_key']; 



$insQuery = "INSERT INTO `block` (identifier,titel,heading,description,banner_image,ordering,status) 
values('$identifier','$titel','$heading','$description','$imageData',$ordering,$status)";
// $con->query($insQuery);


// header("location: block-list.php");
if($con->query($insQuery)){
  $_SESSION['success']= "block add in successfully";
  header("location: block-list.php");
}else{

}


?>