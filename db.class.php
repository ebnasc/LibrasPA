<?php
	class db {

		private $host = 'localhost';
		private $usuario = 'root';
		private $senha = '';
		private $database = 'libras_pa';

		public function conecta_db(){

			$conect = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			mysqli_set_charset($conect, 'utf8');

			if(mysqli_connect_errno()){
				echo 'Erro ao tentar se conectar com o Banco de Dados: '.mysqli_connect_error();
			}

			return $conect;
		}

	}

?>