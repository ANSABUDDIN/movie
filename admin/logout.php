<?php 
session_start();
include('../config.php');
if(isset($_SESSION['admin']))
{
    unset($_SESSION['admin']);
    header("location:login.php");
}
?>