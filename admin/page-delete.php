<?php
include_once("config2.php");
$id = $_GET['id'];
// dd($id);
// $delQuery = "DELETE  FROM `pages` where id=$id";
// $con->query($delQuery);

$delQuery = "DELETE FROM `pages` WHERE id=$id";
$con->query($delQuery);

header("location: page-list.php");


?>