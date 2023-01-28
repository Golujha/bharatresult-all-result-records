<?php include("db.php");
$id = $_GET['id'];
$status = $_GET['status'];
$updatequery1 = "UPDATE results SET status=$status WHERE id=$id";
mysqli_query($con,$updatequery1);
header("location:index.php");
?>