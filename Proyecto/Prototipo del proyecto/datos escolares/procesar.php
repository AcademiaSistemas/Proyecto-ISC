<?php
   include("conexion.php");
   $link=Conectarse();
   $matricula=$_GET['matricula'];
   $grado=$_GET['grado'];      
   $incidencias=$_GET['incidencias'];
   $promedio=$_GET['promedio'];  
   $creditos=$_GET['creditos'];
   $actExtraCurry=$_GET['actExtraCurry']; 
            
   mysql_query("insert into DatosEscolares (matricula, grado, incidencias, promedio, creditos, actExtraCurry)
 values ('$matricula','$grado','$incidencias','$promedio','$creditos','$actExtraCurry')",$link);
   
   header("Location: ejeinsertar.php");
?>