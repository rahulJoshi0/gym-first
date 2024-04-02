<?php
include_once("config2.php");

$data = $_POST;
$id = $data['id'];
// dd($id);

// $tite = $data['titel'];
// $order = $data['ordering'];
// $sttus = $data['status'];
// $titel = $data['titel'];
$titel = $data['titel'];
$heading = $data['heading'];
$description = $data['description'];
// $banner_image = $data['banner_image'];
$ordering = $data['ordering'];
$status = $data['status'];
$url_key = $data['url_key']; 

$foldername = "uploades/";

$imgbasName = basename($_FILES["image"]["name"]);

$imageData = $foldername . $imgbasName;
$tmpName = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmpName, $imageData);
if(!$tmpName){
    $updateQuery = "UPDATE `pages` SET titel='$titel',heading='$heading',description='$description',ordering='$ordering',status='$sttus',url_key='$url_key' WHERE id=$id";
}else{
    $updateQuery = "UPDATE `pages` SET titel='$titel',heading='$heading',description='$description',ordering='$ordering',status='$sttus',url_key='$url_key',banner_image='$imageData' WHERE id=$id";
}
$con->query($updateQuery);

header("location: page-list.php");



?>