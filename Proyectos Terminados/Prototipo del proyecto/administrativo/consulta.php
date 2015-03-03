<html> 
<head>
<title>Ejemplo de Consultas de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<body>
<H1>Personal Docente y Administrativo de la academia de ISC</H1>
<h2><a href="ejeinsertar.php">Nuevo Registro</a></h2>
<h2><a href="ejeborrar.php">Borrar Registro</a></h2>
<h2><a href="tercerPHP.php">Imprimir</a></h2>
<h2>
<p><a href="ejemodificar.php">Actualizar registro</a>
  <?php
include("conexion.php");
$link=Conectarse();
$result=mysql_query("select * from administrativo",$link);
?>
</p>
<p>&nbsp;</p>
<p><a href="../usuarios2/home.html">Home</a></p>
<p>&nbsp; </p>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
  <TR><TD>nombre</TD><TD>apellido1</TD><TD>apellido2</TD><TD>direccion</TD><TD>telefono</TD><TD>matricula</TD></TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["nombre"],$row["apellido1"],$row["apellido2"],$row["direccion"],$row["telefono"],$row["matricula"]);
}
mysql_free_result($result);
mysql_close($link);
?>
</table>
</body>
</html> 
