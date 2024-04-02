<?php
include_once("config2.php");


$data = $_POST;

$foldername = "uploades/";

$imgbasName = basename($_FILES['image']['name']);

$imageData = $foldername . $imgbasName;
$tmpName = $_FILES['image']['tmp_name'];
move_uploaded_file($tmpName, $imageData);

  $titel = $data['titel'];
  $heading = $data['heading'];
  $description = $data['description'];
  $ordering = $data['ordering'];
  $status = $data['status'];
  $url_key = $data['url_key']; 
//   $title = preg_replace("/[^a-zA-Z]/","",$titel);
// // dd($title);
// $url_key = strtolower($title);



$insQuery = "INSERT INTO `pages`(titel,heading,description,banner_image,ordering,status,url_key) values('$titel','$heading','$description','$imageData',$ordering,$status,'$url_key')";
if($con->query($insQuery)){
  $_SESSION['success']= "page add in successfully";
  header("location: page-list.php");
}else{
  $_SESSION['error']= "something wrong";
  header("location: page-add.php");
}


?>