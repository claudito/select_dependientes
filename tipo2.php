<option value="">[SELECCIONAR]</option>
<?php
include('bd/conexion.php');
$db = new Conexion();
$tipo2=$_POST["elegido"];
$sql        =  "SELECT * FROM tipo2 WHERE  codigo_tipo1='$tipo2'";
$result     = $db->query($sql);
while ($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['codigo']; ?>"><?php echo $row['descripcion']; ?></option>

<?php
}
		
?>