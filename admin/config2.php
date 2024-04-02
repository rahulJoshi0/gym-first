<?php
session_start();

function dd($data){
    echo "<pre>";
    print_r($data);
    die();
}

$host = "localhost";
$username = "root";
$password = "";
$databaseName = "php_project";

$con = mysqli_connect($host,$username,$password,$databaseName);

?>