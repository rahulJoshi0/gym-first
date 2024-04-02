<?php
if(!(isset($_SESSION['name']) && isset($_SESSION['email']))){
    $_SESSION['error']="you have to logged in first";
    header("location: index.php");
}
?>