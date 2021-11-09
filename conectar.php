<?php		
		$host = 'localhost';
		$usuario = 'root';
		$senha = '';
		$database = 'libras_pa';

		$conectar = mysqli_connect($host, $usuario, $senha, $database);

		mysqli_set_charset($conectar, 'utf8');
?>			