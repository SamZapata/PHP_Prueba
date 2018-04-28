<!-- Prueba PHP -->
<!-- Autor: Johnny Zapata Serna -->

<!-- =====configuration to connection MySql data base using php====-->

<?php
	//Connection with data base mysql
	function connection() {
		$servername = 'localhost';
		$username	= 'jsam';
		$password	= 'sam2130';
		$dbname 	= 'db_prueba';
		$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("No se conecnto con el servidor de la base de datos".mysqli_connect_error());
			}else {
				mysqli_select_db($conn, $dbname);
				//echo "Conectado a la base de datos";
			}
		return $conn;
	}

	//starting connection with data base
	$conectar = connection();

	//Función para seleccionar una emprea por id
	function query_select_empresa($code){

		$conectar = connection();

		$empr_nombre = $_POST['nombre'];
		$empr_direccion = $_POST['direccion'];
		$cont_nombre = $_POST['contacto'];
		$url_name = $_POST['url'];

		//First, enterprise select
		$sql_select_empresa = "SELECT contacto.cont_nombre, empresa.id_empresa, empresa.empr_nombre, empresa.empr_direccion, url.url_name FROM empresa LEFT JOIN contacto ON empresa.id_empresa = contacto.empresa_id_empresa LEFT JOIN url ON empresa.id_empresa = url.empresa_id_empresa WHERE empresa.id_empresa=$code";

		if ($conectar==TRUE) {
			// $result = mysqli_query($conectar, $sql_select_empresa);
			// $row = mysqli_fetch_assoc($result);
			return $sql_select_empresa;

		}else {
			echo "no se guardo";
		}
	}

?>