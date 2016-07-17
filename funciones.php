<?php 

class Funciones{


function  tipo1($codigo){
$db    = new Conexion();
$query = $db->query("SELECT * FROM tipo1 WHERE codigo='$codigo'");
$dato=$db->recorrer($query);
return $dato['descripcion'];


} 



function tipo2($codigo){
$db    = new Conexion();
$query = $db->query("SELECT * FROM tipo2 WHERE codigo='$codigo'");
$dato=$db->recorrer($query);
return $dato['descripcion'];



}




}







 ?>