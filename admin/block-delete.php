<?php
include_once("config2.php");
$id = $_GET['id'];
// dd($id);
// $delQuery = "DELETE  FROM `pages` where id=$id";
// $con->query($delQuery);

$delQuery = "DELETE FROM `block` WHERE id=$id";
$con->query($delQuery);

header("location: block-list.php");


?>