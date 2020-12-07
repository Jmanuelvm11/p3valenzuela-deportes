<?php 
include("function.php");
$DNI = $_GET['DNI'];
delete('cliente','DNI',$DNI);
header("location:index.php");
?>