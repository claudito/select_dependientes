<?php include('config.php'); ?>
<?php include('bd/conexion.php'); ?>
<?php 
$db  = new Conexion();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tipos de Select Dependientes</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
// Parametros para el combo
$("#idalumno").change(function () {
$("#idalumno option:selected").each(function () {
elegido=$(this).val();
$.post("informacion.php", { elegido: elegido }, function(data){
$("#idinformacion").html(data);
});     
});
});    
});
</script>


</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<h1>Lista de Alumnos</h1>
<hr>
<select name="" id="idalumno" class="form-control" required="">
<option value="">SELECCIONAR</option>
<?php 
$query  ="SELECT * FROM alumno";
$result = $db->query($query);
while ($fila = mysqli_fetch_object($result))
 {
	echo "<option value='$fila->codigo'>$fila->nombres $fila->apellidos</option>";
 }


 ?>	

</select>


<div id="idinformacion"></div>


</div>
</div>
</div>


</body>
</html>