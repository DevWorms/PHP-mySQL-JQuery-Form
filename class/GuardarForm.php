<?php
 	class GuardarForm	{

		private $nombre;
		private $correo;
		private $contrasena;
		private $conn;

		public function __construct($nombre,$correo,$contrasena) {

			$this->conn = new Connector();

			$this->nombre = $this->conn->sec($nombre);
			$this->correo = $this->conn->sec($correo);
			$this->contrasena = $this->conn->sec($contrasena);
		}

		public function __destruct() {
     
			$this->conn = "";

			$this->nombre = "";
			$this->correo = "";
			$this->contrasena = "";
    		}

		public function insert_formsql(){

        	$apikey = md5(microtime() . rand());
				
	        $query = "INSERT INTO usuarios(nombre_usuario,correo_usuario,password_usuario, apikey_usuario)
	        		VALUES ('".$this->nombre."','".$this->correo."','".$this->contrasena."','".$apikey."')";

				return $this->conn->execute($query);

		}

	}

?>