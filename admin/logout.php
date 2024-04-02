<?php

session_start();
unset($_SESSION['name']);
unset($_SESSION['email']);

$_SESSION['success']="logged out";
header("location: index.php");


?>