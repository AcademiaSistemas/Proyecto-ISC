<?php
   include("conexion.php");
   $link=Conectarse();
   $matricula=$_GET['matricula'];
   $clavemateria=$_GET['clavemateria'];      
   $nombremateria=$_GET['nombremateria'];
   
            
   mysql_query("insert into materiasimpartidas (matricula, clavemateria, nombremateria)
 values ('$matricula','$clavemateria','$nombremateria')",$link);
   
   header("Location: ejeinsertar.php");
?>