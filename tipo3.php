<option value="">[SELECCIONAR]</option>
<?php
include('bd/conexion.php');
$db = new Conexion();
$tipo3=$_POST["elegido"];
$sql        =  "SELECT * FROM tipo3 WHERE  codigo_tipo2='$tipo3'";
$result     = $db->query($sql);
while ($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['codigo']; ?>"><?php echo $row['descripcion']; ?></option>

<?php
}
		
?>