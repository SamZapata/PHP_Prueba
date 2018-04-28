<?php
	//Connection with data base mysql
	include 'db_mysql.php';


	function query_update(){

		$conectar = connection();

		$empresa_id = $_POST['id'];
		$empr_nombre = $_POST['nombre'];
		$empr_direccion = $_POST['direccion'];
		$cont_nombre = $_POST['contacto'];
		$url_name = $_POST['url'];

		//Script sql
		$sql_update_empresa = "UPDATE empresa SET empr_nombre='$empr_nombre', empr_direccion='$empr_direccion' WHERE id_empresa='$empresa_id'";

		$sql_update_contacto = "UPDATE contacto SET cont_nombre='$cont_nombre' WHERE empresa_id_empresa='$empresa_id'";
		
		$sql_update_url = "UPDATE url SET url_name='$url_name' WHERE empresa_id_empresa='$empresa_id'";

		if ($conectar==TRUE) {
			mysqli_query($conectar, $sql_update_empresa);
			mysqli_query($conectar, $sql_update_contacto);
			mysqli_query($conectar, $sql_update_url);
			
			echo "Guardado";
			
		}else {
			echo "no se guardo";
		}
	}

	query_update();

?>
	<!-- Back -->
	</br>
	<a href="/PHP_Prueba/empresas.php">Ver Empresas</a>