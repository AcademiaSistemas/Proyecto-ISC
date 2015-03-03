<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
   <title>Ejemplo de PHP</title>
</head>
<body>
<?php
function Conectarse()
{
   if (!($link=mysql_connect("localhost","root","")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("inglescompleta",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

$link=Conectarse();
echo "Conexión con la base de datos conseguida.<br>";

mysql_close($link); //cierra la conexion
?>
</body>
</html> 