<?php

include "db.php";
session_destroy();
alert("logout successfully");
redirect("adminlogin.php");

?>