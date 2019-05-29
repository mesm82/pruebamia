<?php
	/**
	* clase para guardar los datos de la bd
	*/
	class datosPersonales 
	{
		# Atributos

		private $cedula;
		private $nombre;
		private $fechaNac;
		private $sexo;

		# Métodos
		
		public function __construct($cedula,$nombre,$fechaNac,$sexo)
		{
			$this->cedula = $cedula;
			$this->nombre = $nombre;
			$this->fechaNac = $fechaNac;
			$this->sexo = $sexo;
		}

		public function guardar()
		{
			# incluye la librería que hace la conexión con la bd
			include_once('../conexion.php');
     
			# guarda los datos en la bd
			$sql = "insert into datospersonales(cedula,nombre,fechanacimiento,sexo) values('$this->cedula','$this->nombre','$this->fechaNac','$this->sexo')";

			$resultado = pg_query($conexion,$sql);

			if(pg_affected_rows($resultado)>0) {
				return 1;
			} else {
				return 0;
			}
			
		}
	}
?>