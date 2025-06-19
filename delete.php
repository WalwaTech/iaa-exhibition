<?php
include 'connect.php';
$ID =$_GET['ID'];
$query="DELETE FROM user WHERE ID ='$ID'";
$result = mysqli_query($link,$query);
header("location:selt.php");
?>

