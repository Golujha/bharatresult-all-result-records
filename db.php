<?php
    $con = mysqli_connect("localhost", "root", "", "bharatresult");
    session_start();
    function redirect($page = "index.php"){
        echo "<script>window.open('$page','_self')</script>";
    }
    function alert($msg){
        echo "<script>alert('$msg')</script>";
    }

    function checkAuth(){
        if(!isset($_SESSION['admin'])){
            redirect("adminlogin.php");
            return false;
        }
        return true;
    }
?>
