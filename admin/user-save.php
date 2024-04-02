<?php
include_once("config2.php");

$data = $_POST;

$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$gender = $data["gender"];
$designation = $data["designation"];
$password = md5($data["password"]);
$confirmpassword = md5($data["re-password"]);


$isError = false;
$_SESSION["nam"] = $data["name"];
$_SESSION["emails"] = $data["email"];
$_SESSION["phones"] = $data["phone"];
$_SESSION["genders"] = $data["gender"];
$_SESSION["designations"] = $data["designation"];
$_SESSION["password"] = $data["password"];

if($data["name"]==""){
  $isError=true;
  $_SESSION["nam_error"]="name is a required field";
}
if($data["password"]==""){
  $isError=true;
  $_SESSION["password_error"]="password is a required field";
}
  if($isError){
     header("location:add-user.php");
     exit();
  }

if($password === $confirmpassword){
$insQuery = "INSERT INTO `users`(name,email,phone,gender,designation,password) VALUES('$name','$email','$phone','$gender','$designation','$password')";
$con->query($insQuery);
unset($_SESSION["nam"]);
unset($_SESSION["emails"]);
unset($_SESSION["phones"]);
unset($_SESSION["genders"]);
unset($_SESSION["designations"]);

header("location: user-list.php");
}else{
header("location: add-user.php");
    
}
?>