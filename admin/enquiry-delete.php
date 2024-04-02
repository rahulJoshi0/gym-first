<?php
include_once("config2.php");
$id = $_GET['id'];
// dd($id);
// $delQuery = "DELETE  FROM `pages` where id=$id";
// $con->query($delQuery);

$delQuery = "DELETE FROM `enquiries` WHERE id=$id";
$con->query($delQuery);

header("location: enquiry-list.php");


?>