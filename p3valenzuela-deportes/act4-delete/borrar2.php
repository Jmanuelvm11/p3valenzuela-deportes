<?php 
include("function2.php");
$CVV = $_GET['CVV'];
delete('tarjeta','CVV',$CVV);
header("location:index2.php");
?>