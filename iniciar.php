<?php
session_start();
	require("Pafinas/conexion.php");
if(isset($_POST['iniciar_sesion'])){
	if($_POST['usermail']!="" && $_POST['userpass']!= ""){
		$mail1=$_POST['usermail'];
		$pass1=$_POST['userpass'];
		$encriptacion=sha1($pass1);
		
		$consulta="SELECT * FROM trabajo_final WHERE correoUsuario ='$mail1' AND contraseña = '$encriptacion'";
		$resultado=mysqli_query($conexion,$consulta);
		$count=mysqli_num_rows($resultado);
		
		if(!$count || mysqli_num_rows($count)==1){
			$_session['inicio_sesion']='dog';
			header("location:inicio.php");
			
		}
		else{
			echo"Contraseña o correo incorrectos";
		}
	}
	else{
		echo"Por favor llena todos los campos";	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>

</body>
</html>