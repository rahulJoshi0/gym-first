<?php
include_once("config2.php");

$data = $_POST;
// $file = $_FILES;
$foldername = "uploades/";

$imgbasName = basename($_FILES["image"]["name"]);

$imageData = $foldername . $imgbasName;
$tmpName = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmpName, $imageData);

//  dd($_FILES);
  $titel = $data['titel'];
  $ordering = $data['ordering'];
  $status = $data['status'];
//  $image = $data['image'];


$_SESSION['titel'] = $data['titel'];

$insQuery = "INSERT INTO `slider` (titel,ordering,status,image) values('$titel',$ordering,$status,'$imageData')";
$con->query($insQuery);


header("location: slider-list.php");


?>