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
				#echo "Conectado a la base de datos ";
			}
		return $conn;
	}

	function query_select(){
		$conectar = connection();
		
		$sql_select_empresa = "SELECT contacto.cont_nombre, empresa.id_empresa, empresa.empr_nombre, empresa.empr_direccion, url.url_name FROM empresa LEFT JOIN contacto ON empresa.id_empresa = contacto.empresa_id_empresa LEFT JOIN url ON empresa.id_empresa = url.empresa_id_empresa";
		/*$sql_select_url = "SELECT url_name FROM url";*/

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

	function query_select_contacto(){
		$conectar = connection();
		$sql_select_contacto = "SELECT cont_nombre FROM contacto";

		if ($conectar==TRUE) {
			#echo "Datos: ";
			$result = mysqli_query($conectar, $sql_select_contacto);
			/*mysqli_query($conectar, $sql_insert_contacto);
			mysqli_query($conectar, $sql_insert_url);*/
			return $result;
		}else {
			echo "No hay conexión con la base de datos";
		}

	}

?>