<?php
include('config.php');
include('bd/conexion.php');
$db = new Conexion();
$codigo =  $_POST['elegido'];

$query  ="SELECT * FROM alumno WHERE codigo='$codigo'";
$result = $db->query($query);
$dato   = mysqli_fetch_array($result);
 ?>
<br>
 <div class="jumbotron">
 <label for="">Información del Alumno:</label>
 <ul>
 <li>Nombres:<?php echo $dato['nombres']; ?></li>
 <li>Apellidos:<?php echo $dato['apellidos']; ?></li>
 <li>Edad: <?php echo $dato['edad'] ?></li>
 </ul>
 <img src="<?php echo $dato['avatar']; ?>" alt="avatar" class="img-responsive" width="100" height="100">
 </div>