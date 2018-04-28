<!DOCTYPE html>
<html>
<head>
	<title>Empresas</title>
	<!-- get bootstrap to build responsive site -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="md-10 md-offset-1 lg-10 lg-offset-1 sm-12">
		<div class="container">
			<h1 class="text-center">CONTACTAR EMPRESA</h1>
			<div class="row">
				<div class="container">
					<h3>Empresas</h3>
					<table border="3" class="text-center">
						<thead>
							<tr>
								<a href="/PHP_Prueba/index.php">Registrar Empresa</a>
								<!-- <th colspan="4">Lista de Contacto</th> -->
							</tr>
						</thead>
						<div class="table-responsive">
						
							<?php 
								include 'database/db_select.php';
							?>
						
						</div>
					</table>

				</div>
				</br>
			</div>
		</div>
	</div>

	<!-- Get bootstrap scripts js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</form>
</body>
</html>