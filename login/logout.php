<?php 
session_start();
session_destroy();
header("location:../pg_inicial/index.php");
?>