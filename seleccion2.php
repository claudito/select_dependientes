<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lenguajes y Frameworks</title>
	<?php 
	include('bd/conexion.php'); 
	$db = new Conexion
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
// Parametros para el combo
$("#tipo1").change(function () {
$("#tipo1 option:selected").each(function () {
elegido=$(this).val();
$.post("tipo2.php", { elegido: elegido }, function(data){
$("#tipo2").html(data);
});     
});
});    
});

$(document).ready(function() {
// Parametros para el combo
$("#tipo2").change(function () {
$("#tipo2 option:selected").each(function () {
elegido=$(this).val();
$.post("tipo3.php", { elegido: elegido }, function(data){
$("#tipo3").html(data);
});     
});
});    
});


</script>

</head>
<body>
<form action="datos-seleccionados.php" method="POST">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h1>Select Dependientes:</h1>
<hr>
<div class="form-group">
 <label for="">Lenguajes y frameworks</label>
<select name="tipo1" id="tipo1" class="form-control" required="">
<option value="">[SELECCIONAR]</option>
<?php
$sql    = "SELECT  * FROM tipo1 order by descripcion";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['codigo']; ?>"><?php echo $row['descripcion']; ?></option>
<?php
}
?>
</select>
</div>


<div class="form-group">
<label>Resultado</label>
<select class="form-control"  name="tipo2" id="tipo2" required>
</select>
</div>

<div class="form-group">
<label>Empresas que los utilizan</label>
<select class="form-control"  name="tipo3" id="tipo3" required>
</select>

</div>


<button class="btn btn-primary">Enviar</button>

</div>
</div>
</form>
</body>
</html>