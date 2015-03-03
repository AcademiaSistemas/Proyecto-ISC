<?php
   include("conexion.php");
   $link=Conectarse();
   $nombre=$_GET['nombre'];
   $apellido1=$_GET['apellido1'];      
   $apellido2=$_GET['apellido2'];
   $matricula=$_GET['matricula'];  
   $edad=$_GET['edad'];
   $sexo=$_GET['sexo'];
   $telefono=$_GET['telefono'];
   $direccion=$_GET['direccion'];
   $estadoCivil=$_GET['estadoCivil'];
   $e_mail=$_GET['e_mail']; 
            
   mysql_query("insert into datospersonales (nombre, apellido1, apellido2, matricula, edad, sexo, telefono, direccion, estadoCivil, e_mail)
 values ('$nombre','$apellido1','$apellido2','$matricula','$edad','$sexo','$telefono','$direccion','$estadoCivil','$e_mail')",$link);
   
   header("Location: ejeinsertar.php");
?>