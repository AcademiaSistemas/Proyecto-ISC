<?php
   include("conexion.php");
   $link=Conectarse();
   $id=$_GET['id'];
   mysql_query("delete from administrativo where matricula = $id",$link);
   
   header("Location: ejeborrar.php");
?>