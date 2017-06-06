<?php
	$FM_host="localhost";
    $FM_user="root";
    $FM_pass="";
    $FM_FM="trabajo_final";
    
 	$conexion= mysqli_connect($FM_host,$FM_user,$FM_pass);
    if(mysqli_connect_errno()){
    	echo "No se ha logrado conectar con el host";
    }
    mysqli_set_charset($conexion,"UTF8");
    
    mysqli_select_db($conexion,$FM_FM) or die("Error al conectar con la base de datos");
?>