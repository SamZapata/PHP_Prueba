<?php
	//Connection with data base mysql
	function connection() {
		$servername = 'localhost';
		$username	= 'jsam';
		$password	= 'sam2130';
		$dbname 	= 'db_prueba';
		$conn = mysqli_connect($servername, $username, $password);
			if (!$conn) {
				die("No se conecnto con el servidor de la base de datos".mysqli_connect_error());
			}else {
				mysqli_select_db($conn, $dbname);
				echo "Conectado a la base de datos ";
			}
		return $conn;
	}

	function query_update($code){
		$conectar = connection();
		/*Variable para modificar una empresa*/
		// $code = $_GET['id_empresa'];

		$sql_select_one = "SELECT empresa.empr_nombre, empresa.empr_direccion, contacto.cont_nombre, url.url_name FROM empresa LEFT join() contacto ON empresa.id_empresa = contacto.empresa_id_empresa LEFT JOIN url ON empresa.id_empresa = url.empresa_id_empresa WHERE id_empresa='$code'";

		/*$sql_update_empresa = "UPDATE empresa SET empr_nombre='$empr_nombre', empr_direccion='$empr_direccion' WHERE empr_nombre = $empresa_nombre " ;
		$sql_update_contacto = "UPDATE INTO contacto (cont_nombre, empresa_id_empresa) VALUES ('$cont_nombre', '$empr_id')";
		$sql_update_url = "UPDATE INTO url(url_name, empresa_id_empresa) VALUES ('$url_name', '$empr_id')";*/

		if ($conectar==TRUE) {
			$result = mysqli_query($conectar, $sql_select_one);
			/*mysqli_query($conectar, $sql_insert_contacto);
			mysqli_query($conectar, $sql_insert_url);*/
			
			return $result;
		}else {
			echo "no se guardo";
		}
	}

?>