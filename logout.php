<?php
session_start();
//$email=$_SESSION['logid'];
session_unset($_SESSION['logid']);
session_destroy();
header("location:registration.php");
?>