<?php
session_start(); 
unset($_SESSION['nama']);

echo "<script>window.open('index.php','_self')</script>";
?>