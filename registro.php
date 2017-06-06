<?php
	
	session_start();
	require("conexion.php");
?>
<!DOCTYPE html>	
    <html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body> 
		<?php
		 if(isset($_POST['registrarse']) && $_POST['usermail']!="" && $_POST['nickname']!="" &&$_POST['userpass']!=""){
			$correoUser1=$_POST['usermail'];
			$nombreUser1=$_POST['nickname'];
			$contraUser1=$_POST['userpass'];	
			$encriptar=sha1($contraUser1);
						
			$sql2="SELECT * FROM usuarios WHERE correoUsuario='$correoUser1'";
			
			$sql3="SELECT * FROM usuarios WHERE nombreUsuario='$nombreUser1'";						
			
			$resultado1=mysqli_query($conexion,$sql2);
			$resultado2=mysqli_query($conexion,$sql3);
			
			$conteo1=mysqli_num_rows($resultado1);
			$conteo2=mysqli_num_rows($resultado2);
			
		if($conteo1==1){
			echo"Esta direccion de correo ya fue registrada";
		}
		else if($conteo2==1){
			echo"Este nombre de usuario ya ha sido registrado";
		}
		else{
			$sql="INSERT INTO usuarios( ID, correoUsuario, nombreUsuario, contraseña) VALUES( '','$correoUser1','$nombreUser1','$encriptar')";
			$result=mysqli_query($conexion,$sql);		
			$_session['inicio_sesion']='dog';
			header("location:iniciar.php");
			}
		}
else{
	echo"Por favor no dejes ningun espacio en blanco al registrarte";
	}		
?>
	</body>
	</html>

