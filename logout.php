<?php
session_start();
if($_SESSION['email']){
    echo "logout" . $_SESSION["email"];
}
else{
    header("location:index.php");
}
?>

<a href="logout.php">logout</a>