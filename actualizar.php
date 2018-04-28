<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Empresa</title>
	<!-- get bootstrap to build responsive site -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="md-10 md-offset-5 lg-10 lg-offset-10">
		<div class="container">
			<h1 class="text-center">CONTACTAR EMPRESA</h1>

			<div class="row text-center">
				</br>
				<div class="container form">
					</br>
					<p class="text-center">Actualización de datos de la empresa</p>

					<div class="md-5 lg-5">

					<!-- Show data for enterprise selected -->
						<?php 
							//Define variable for get id empresa
							$code = $_GET["id_empresa"];
							//inherit
							include 'database/db_mysql.php';
							//query de consulta con el id de la empresa
							$consulta = query_select_empresa($code);
							//ejecuta el query
							$result = mysqli_query($conectar, $consulta);
							//guarda el resultado
							$row = mysqli_fetch_assoc($result);
						?>
					<form action="/PHP_Prueba/database/db_update.php" method="POST">

						<label for="id">ID de la empresa: </label>
						</br>
						<input type="text" name="id" value="<?php echo $code; ?>" readonly></br>
						</br>
						<label for="nombre">Nombre de la empresa: </label>
						</br>
						<input type="text" name="nombre" value="<?php echo $row['empr_nombre'];?>">
						</br>
						<label for="nombre">Dirección: </label>
						</br>
						<input type="text" name="direccion" value="<?php echo $row['empr_direccion']; ?>">
						</br>
						<label for="contacto">Contacto: </label>
						</br>
						<input type="text" name="contacto" value="<?php echo $row['cont_nombre']; ?>">
						</br>
						<label for="url">Url: </label>
						</br>
						<input type="text" name="url" value="<?php echo $row['url_name']; ?>">
						</br>
						<input type="submit" value="Actualizar">
						</br>
					</form>

					</div>
					</br>
					<a href="/PHP_Prueba/empresas.php">Ver Empresas</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Get bootstrap scripts js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>