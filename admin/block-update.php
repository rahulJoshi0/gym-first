<?php
include_once("config2.php");

$data = $_POST;
$id = $data['id'];
// dd($id);

$identifier = $data['identifier'];
$titel = $data['titel'];
$heading = $data['heading'];
$description = $data['description'];
$ordering = $data['ordering'];
$status = $data['status'];


$foldername = "uploades/";

$imgbasName = basename($_FILES["image"]["name"]);

$imageData = $foldername . $imgbasName;
$tmpName = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmpName, $imageData);
if(!$tmpName){
    $updateQuery = "UPDATE `block` SET identifier='$identifier',titel='$titel',heading='$heading',description='$description',ordering='$ordering',status='$sttus' WHERE id=$id";
}else{
    $updateQuery = "UPDATE `block` SET identifier='$identifier',titel='$titel',heading='$heading',description='$description',ordering='$ordering',status='$sttus',banner_image='$imageData' WHERE id=$id";
}
$con->query($updateQuery);

header("location: block-list.php");



?>