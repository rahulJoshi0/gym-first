<?php
include_once("config2.php");

$data = $_POST;
$id = $data['id'];
// dd($id);

$tite = $data['titel'];
$order = $data['ordering'];
$sttus = $data['status'];
// $titel = $data['titel'];
$foldername = "uploades/";

$imgbasName = basename($_FILES["image"]["name"]);

$imageData = $foldername . $imgbasName;
$tmpName = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmpName, $imageData);
if(!$tmpName){
$updateQuery = "UPDATE `slider` SET titel='$tite',ordering='$order',status='$sttus' WHERE id=$id";
}else{
    $updateQuery = "UPDATE `slider` SET titel='$tite',ordering='$order',status='$sttus',image='$imageData' WHERE id=$id";
}
$con->query($updateQuery);

header("location: slider-list.php");



?>