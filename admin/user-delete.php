<?php
include_once("config2.php");

$id = $_GET['id']??0;
// dd($id);
$delQuery = " DELETE FROM `users` WHERE id=$id";
$con->query($delQuery);
$_SESSION["success"]="record delete success";


header("location: user-list.php");
exit();

 
?>