<?php 
include('bd/conexion.php');
include('funciones.php');

$funciones = new  Funciones();

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Datos Seleccionados</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="jumbotron">

<h1>Datos Seleccionados:</h1>
<hr>
<h2>
<?php echo $funciones->tipo1($_POST['tipo1']); ?> :

<?php echo $funciones->tipo2($_POST['tipo2']); ?>
</h2>
</div>
</div>
</div>
</div>
</body>
</html>