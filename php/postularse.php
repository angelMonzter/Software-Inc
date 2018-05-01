<?php

include("conexion.php");
conectar();
// variables
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$telefono= $_POST['telefono'];
$detalle=$_POST["detalles"]; 
$estudiante=$_POST['estudiante'];


//$encrip=password_hash($contrasena,PASSWORD_DEFAULT);
if (empty($nombre && $correo && $telefono && $detalle && $estudiante)) {
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../formulario1.html";
	</script>
	<?php
}else{

	$consulta=mysql_query("insert into postular (`id_post`, `nombre`, `telefono`, `estudiante`, `correo`, `detalles`) values (NULL, '$nombre', '$telefono', '$estudiante', '$correo', '$detalle')",$conex) or die (mysql_error($consulta));
	?>
<body>
		<script type="text/javascript">
		
		alert("Se ha postulado con éxito...");
		window.location="../index.html";
		</script>
</body>

	<?php

}

mysql_close($conex);


?>