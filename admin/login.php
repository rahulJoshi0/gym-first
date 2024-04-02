<?php
require_once("config2.php");

$data = $_POST;

 $email = $data['email'];
 $password = md5($data['password']);
// die();
$selQuery = "SELECT * FROM users where email = '$email' and password = '$password'";
$dataQuery = $con->query($selQuery);

// dd($dataQuery);

if($dataQuery->num_rows){
    $_user = mysqli_fetch_assoc($dataQuery);

    $_user_id = $_user['id'];
//    die();
    // $_SESSION['user_id'] = $_user['id'];

    $_SESSION['user_id']= $_user['id'];
    $_SESSION['name']= $_user['name'];
    $_SESSION['email']= $_user['email'];
//    dd($_SESSION['user_id']);
    $insQuery = "INSERT INTO `user_logs`(user_id) values('$_user_id')";
   echo $con->query($insQuery);
//    die();

    $_SESSION['success']= "logged in successfully";
    header("location: dashboard.php");
}else{
    $_SESSION['error']= "credentials are not";
    header("location: index.php");
}


?>