<?php
include_once 'database.php';
    $c=$_POST["email"];
    $e=$_POST["message"];
$query="INSERT INTO test2.info(email,message) values('$c','$e')";
mysqli_query($conn,$query);
if($query){
    header("location: index.php");
}

mysqli_close($conn);
?>