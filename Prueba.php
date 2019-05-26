<!DOCTYPE html>
<?php
//	session_start ();
		include "conectardb.php"; 
//		include "acciones.php"; 
	//valida_admin ();
	$carrusu = obtenercarrerausu();
	// $mencionusu = obtenermencionusu();
    // $nucleousu = obtenernucleousu();
    

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Document</title>

	<style>
		.form-control {width: auto;font-weight: bold;}
		select {margin: 2% 5%;}
		#contenedor {border: 1px solid rgba(0, 0, 0, 1.00);width: 300px;margin: 50px auto;}
	</style>
</head>

<body>
	<div id="contenedor">
		<div class="form-group">
			<?php
				//esto lo debes cambiar, por una obtencion de valor en la pagina
				$elemetos = 10;
				
				//este es un archivo con los datos de la conexion.... suplanta esto!!!
				require("datosConexion.php");

				/*******************************
				 * CONEXION A LA BASE DE DATOS *
				 *******************************/
				
				$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
				if(mysqli_connect_errno()){
					echo "Fallo al conectar con la base de datos";
					exit();
				}
				mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
				mysqli_set_charset($conexion, "utf8");
				$sql = "SELECT empresa FROM `clientes` ";
				$resultados = mysqli_query($conexion, $sql);
				
				/********************************************
				 * ALMACENAR INFORMACION DE BBDD A UN ARRAY *
				 ********************************************/

				$datos = array(); 
				$cantidad = mysqli_num_rows($resultados); 
	
				while ($filas = mysqli_fetch_array($resultados)) { 
					$datos[] = $filas['empresa'] ; 
				} 
				
				/*********************************
				 * CONSTRUCCION DE LOS ELEMENTOS *
				 *********************************/

				for($i = 0; $i < $elemetos; $i++){ 
					echo "<select class='form-control'>";
					echo "<option>Seleccione una opcion</option>";
					for($j = 0; $j < $cantidad; $j++){ 
						echo "<option>" . $datos[$j] . "</option>";
					}
					echo "</select>";
				}
			?>
		</div>
	</div>
</body>
</html>