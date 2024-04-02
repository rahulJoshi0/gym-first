<?php
include_once("admin/config2.php");

$data = $_POST;
  $name = $data["name"];
 $email = $data["email"];
 $phone = $data["phone"];
 $message = $data["message"];
// die();

$insQuery = "INSERT INTO `enquiries` (name,email,phone,message) VALUES('$name','$email','$phone','$message')";
$con->query($insQuery);
header("location: index.php"); 
?>