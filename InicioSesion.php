<?php
	require("Pafinas/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<h3> Iniciar Sesión</h3>
    <form action="iniciar.php" method="POST">
    	<label for="correoUser">Correo:</label><br>
        <input type="email" name="usermail"><br>
      	<label for="contraUser">Contraseña: </label><br>
        <input type="password" name="userpass"><br>
        <input type="submit" name="iniciar_sesion" value="Iniciar sesión"><br><br>	     
    </form>
    <h3>Registrarse</h3>
    <form action="Pafinas/registro.php" method="POST">
    <label for="correoUser">Correo:</label><br>
    <input type="email" name="usermail"><br>
    <label for="nombreUser">Nombre de usuario: </label><br>
    <input type="text" name="nickname"><br>
    <label for="contraUser">Contraseña:</label><br>
    <input type="password" name="userpass"><br>
    <input type="submit" value="Registrarse:" name="registrarse">
    </form>

<body>
	
</body>
</html>