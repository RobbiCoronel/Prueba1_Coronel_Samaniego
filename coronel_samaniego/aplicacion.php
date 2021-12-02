<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php 

	$conexion=mysqli_connect('localhost','prueba','c8u$7ShG','db_mantenimiento');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
<h3 class="text-center">Registro de los Mantenimientos</h3>

<div class="container">
    
    <button type="button" class="btn btn-outline-dark" onclick="formulario()">Nuevo Registro
    </button>
<br> 

<br>

	<table class="table">
        <thead>
		<tr>
			<th scope="col">FECHA</th>
			<th scope="col">KILOMETRAJE</th>
			<th scope="col">MANTENIMIENTO</th>
			<th scope="col">COSTO TOTAL</th>
	
		</tr>
        </thead>

		<?php 
		$sql="SELECT * from cs_vehiculos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['FECHA'] ?></td>
			<td><?php echo $mostrar['KILOMETRAJE'] ?></td>
			<td><?php echo $mostrar['MANTENIMIENTO'] ?></td>
			<td><?php echo $mostrar['COSTO_TOTAL'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
    <a href="index.php">Regresar a la Pagina inicial</a> <br>

</div>


</body>

<script src="assets/js/validador.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/ingreso.js"></script>
</html>






   