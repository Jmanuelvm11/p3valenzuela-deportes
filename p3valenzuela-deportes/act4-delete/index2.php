<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros con Función PHPn</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:98%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Eliminar Registros con Función PHP </h1>
<br><br>

<?php
	include("function2.php");
?>
<table border="1" width="100%">
	<tr>
		<th width="15%">CVV</th>
		<th width="20%">Fecha_de_caducidad</th>
		<th width="20%">Marca</th>
		<th width="20%">PAN</th>
        <th width="20%">Titular</th>
		<th width="20%">Usuario</th>
        <th width="15%">Borrar</th>
	</tr>
<?php 
	$sql = "select * from tarjeta";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
	<td><?php echo $row->CVV;?></td>
		<td><?php echo $row->Fecha_de_caducidad;?></td>
		<td><?php echo $row->Marca;?></td>
		<td><?php echo $row->PAN;?></td>
		<td><?php echo $row->Titular;?></td>
		<td><?php echo $row->Usuario;?></td>
		<td>
   <a class="btn btn-primary" href="borrar2.php?CVV=<?php echo $row->CVV;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>