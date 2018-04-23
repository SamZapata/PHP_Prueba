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

	function query_select(){
		$conectar = connection();
		
		$sql_select_empresa = "SELECT contacto.cont_nombre, empresa.empr_nombre, empresa.empr_direccion, url.url_name FROM empresa, contacto, url WHERE id_empresa=contacto.empresa_id_empresa";
		/*$sql_select_contacto = "INSERT INTO contacto (cont_nombre, empresa_id_empresa) VALUES ('$cont_nombre', '$empr_id')";
		$sql_select_url = "INSERT INTO url(url_name, empresa_id_empresa) VALUES ('$url_name', '$empr_id')";*/

		if ($conectar==TRUE) {
			#echo "Datos: ";
			$result = mysqli_query($conectar, $sql_select_empresa);
			/*mysqli_query($conectar, $sql_insert_contacto);
			mysqli_query($conectar, $sql_insert_url);*/
			return $result;
		}else {
			echo "no se guardo";
		}
	}

?>
<a href="/Prueba/empresas.php">Regresar</a>