<?php
   include("conexion.php");
   $link=Conectarse();
   $nombre=$_GET['nombre'];
   $apellido1=$_GET['apellido1'];      
   $apellido2=$_GET['apellido2'];
   $direccion=$_GET['direccion'];  
   $telefono=$_GET['telefono'];
   $matricula=$_GET['matricula']; 
            
   mysql_query("insert into administrativo (nombre, apellido1, apellido2, direccion, telefono, matricula)
 values ('$nombre','$apellido1','$apellido2','$direccion','$telefono','$matricula')",$link);
   
   header("Location: ejeinsertar.php");
?>