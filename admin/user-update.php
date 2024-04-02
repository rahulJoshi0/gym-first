<?php

include_once("config2.php");

 $data = $_POST;
 $id = $data['id'];
 
 
 $name = $data["name"];
 $email = $data["email"];
 $phone = $data["phone"];
 $gender = $data["gender"];
 $designation = $data["designation"];
 $password = $data["password"];

$updateQuery = "UPDATE `users` SET name='$name',email='$email',phone='$phone',gender='$gender',designation='$designation',
password='$password' WHERE id=$id";
$con->query($updateQuery);
// dd($useQuery);

// $insQuery = "INSERT INTO `users` (name,email,phone,gender,designation,password) VALUES('$name','$email','$phone','$gender'
// ,'$designation','$password') ";
// $con->query($insQuery);

header("location: user-list.php");

?>