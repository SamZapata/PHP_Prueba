<!-- Prueba PHP -->
<!-- Autor: Johnny Zapata Serna -->

<!-- =====Insert data in tables (empresa, contacto, url)=====-->

<?php
	//Connection with data base mysql
	include 'db_mysql.php';

	function query_insert(){
		$conectar = connection();
		$empr_id	= $_POST['id'];
		$empr_nombre = $_POST['nombre'];
		$empr_direccion = $_POST['direccion'];
		$cont_nombre = $_POST['contacto'];
		$url_name = $_POST['url'];
		$sql_insert_empresa = "INSERT INTO empresa VALUES ('$empr_id','$empr_nombre','$empr_direccion')";
		$sql_insert_contacto = "INSERT INTO contacto (cont_nombre, empresa_id_empresa) VALUES ('$cont_nombre', '$empr_id')";
		$sql_insert_url = "INSERT INTO url(url_name, empresa_id_empresa) VALUES ('$url_name', '$empr_id')";

		if ($conectar==TRUE) {
			mysqli_query($conectar, $sql_insert_empresa);
			mysqli_query($conectar, $sql_insert_contacto);
			mysqli_query($conectar, $sql_insert_url);
			echo "guardado";
		}else {
			echo "no se guardo";
		}
	}

	query_insert();

	function query_update(){
		$conectar = connection();
		$empr_nombre = $_POST['nombre'];
		$empr_direccion = $_POST['direccion'];
		$cont_nombre = $_POST['contacto'];
		$url_name = $_POST['url'];
		$sql_update_empresa = "UPDATE empresa SET empr_nombre='$empr_nombre', empr_direccion='$empr_direccion'" ;
		$sql_update_contacto = "INSERT INTO contacto (cont_nombre, empresa_id_empresa) VALUES ('$cont_nombre', '$empr_id')";
		$sql_update_url = "INSERT INTO url(url_name, empresa_id_empresa) VALUES ('$url_name', '$empr_id')";

		if ($conectar==TRUE) {
			mysqli_query($conectar, $sql_insert_empresa);
			mysqli_query($conectar, $sql_insert_contacto);
			mysqli_query($conectar, $sql_insert_url);
			echo "guardado";
		}else {
			echo "no se guardo";
		}
	}

?>
<a href="/PHP_Prueba/empresas.php"> Regresar</a>