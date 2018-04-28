<!-- Prueba PHP -->
<!-- Autor: Johnny Zapata Serna -->

<!-- =====Select and show all data making join====-->

<?php

	//starting connection with data base
	include 'db_mysql.php';

?>

	<!-- ====Create data table==== -->
	<table border="3" class="text-center">
	<div class="table-responsive">
	<tbody class="table">
		<tr>
			<td><strong>Contacto</strong></td>
			<td><strong>Empresa</strong></td>
			<td><strong>Dirección</strong></td>
			<td><strong>Url</strong></td>
			<td><strong>Actualizar</strong></td>
		</tr>
	
	<?php

		$conectar = connection();
		
		$sql_select_all = "SELECT contacto.cont_nombre, empresa.id_empresa, empresa.empr_nombre, empresa.empr_direccion, url.url_name FROM empresa LEFT JOIN contacto ON empresa.id_empresa = contacto.empresa_id_empresa LEFT JOIN url ON empresa.id_empresa = url.empresa_id_empresa";
		$result = mysqli_query($conectar, $sql_select_all);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$row['id_empresa'];
	?>

	<!-- ====Show data==== -->
		<tr>
			
			<td><?php echo $row['cont_nombre']; ?></td>
			<td><?php echo $row['empr_nombre']; ?></td>
			<td><?php echo $row['empr_direccion']; ?></td>
			<td><?php echo $row['url_name']; ?></td>
			<td><a href="/PHP_Prueba/actualizar.php?id_empresa=<?php echo $row['id_empresa']; ?> ">Actualizar</a></td>
		</tr>

	<?php			
			}
		}else {
			echo "No hay datos!";
		}

		mysqli_close($conectar);

	?>
	</tbody>
	</div>
	</table>

	<?php
	//==============================================

	function query_select(){
		$conectar = connection();
		
		$sql_select_empresa = "SELECT id_empresa, empr_nombre, empr_direccion FROM empresa"; /*"SELECT contacto.cont_nombre, empresa.id_empresa, empresa.empr_nombre, empresa.empr_direccion, url.url_name FROM empresa LEFT JOIN contacto ON empresa.id_empresa = contacto.empresa_id_empresa LEFT JOIN url ON empresa.id_empresa = url.empresa_id_empresa";
		/*$sql_select_url = "SELECT url_name FROM url";*/
		if ($result = mysqli_query($conectar, "SELECT id_empresa, empr_nombre, empr_direccion FROM empresa")){
			printf("seleccionado: ", mysqli_num_rows($result));
			
			mysqli_free_result($result);
		}
	}


	function query_select_contacto(){
		$conectar = connection();
		$sql_select_contacto = "SELECT cont_nombre FROM contacto";

		if ($result = mysqli_query($conectar, $sql_select_contacto)) {
			#echo "Datos: ";
		
		}else {
			echo "No hay conexión con la base de datos";
		}

		mysqli_close($result);

	}

?>