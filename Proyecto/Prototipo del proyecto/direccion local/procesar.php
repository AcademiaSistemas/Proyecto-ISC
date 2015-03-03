<?php
   include("conexion.php");
   $link=Conectarse();
   $matricula=$_GET['matricula'];
   $calle=$_GET['calle'];      
   $numero=$_GET['numero'];
   $localidad=$_GET['localidad'];  
   $estado=$_GET['estado'];
   $colonia=$_GET['colonia']; 
            
   mysql_query("insert into direclocal (matricula, calle, numero, localidad, estado, colonia)
 values ('$matricula','$calle','$numero','$localidad','$estado','$colonia')",$link);
   
   header("Location: ejeinsertar.php");
?>