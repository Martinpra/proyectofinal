<?php
include ('BaseDeDatosmysqli.php');
include ('clase_docente.php'); 
$base = new BaseDeDatosmysqli("localhost","root","","mydb");
$docente1 = new Docente($base);
if (isset($_POST['id'])){	
	$docente1->actualizar_docente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['tipo_usuario']);
//unset ($_POST);
header("Location: listado_docente.php");
	?>
<?php } ?>
<!--	<script type="text/javascript">
		window.location='inicio.php'
	</script>-->
  




    