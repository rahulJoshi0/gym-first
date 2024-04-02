<?php

include_once("config2.php");

 $data = $_POST;
 $id = $data['id'];
 
 
 $name = $data["name"];
 $email = $data["email"];
 $phone = $data["phone"];
 $message = $data["message"];
 $status = $data["status"];


$updateQuery = "UPDATE `enquiries` SET name='$name',email='$email',phone='$phone',message='$message',status='$status'
 WHERE id=$id";
$con->query($updateQuery);
// dd($useQuery);

// $insQuery = "INSERT INTO `users` (name,email,phone,gender,designation,password) VALUES('$name','$email','$phone','$gender'
// ,'$designation','$password') ";
// $con->query($insQuery);

header("location: enquiry-list.php");

?>