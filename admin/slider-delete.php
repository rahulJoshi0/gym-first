<?php
include_once("config2.php");
$id = $_GET['id'];
// dd($id);
$delQuery = "DELETE  FROM `slider` where id=$id";
$con->query($delQuery);

header("location: slider-list.php");


?>