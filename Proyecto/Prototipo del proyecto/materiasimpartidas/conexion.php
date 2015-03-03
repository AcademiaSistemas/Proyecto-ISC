<html>
<head>
<title>Ejemplo de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<?php
function Conectarse()
{
if(!($link=mysql_connect("localhost","root","")))
{
echo "Error conectando a la base de datos.";
exit();
}
if(!mysql_select_db("Academia", $link))
{
echo "Error seleccionando base de datos.";
exit();
}
return $link;
}
$link=Conectarse();
echo " <br>";

mysql_close($link); //cierra la conexion
?>
</body>
</html>