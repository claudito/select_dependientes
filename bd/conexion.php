<?php 
/**
* Clase  Conexion
*/
class Conexion extends mysqli
{
	
	public function __construct()
	{  
		$servidor='localhost';
		$usuario='root';
		$password='sistemas';
		$bd='crud';

		parent::__construct($servidor,$usuario,$password,$bd);
		$this->query("SET NAMES 'utf8'");
		$this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
		//echo $x;
		unset($x);
	}
    
public function recorrer($y)
{
 
 return mysqli_fetch_array($y);
}
 }


//$db = new Conexion();

 ?>