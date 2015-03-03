<html> 
<head>
<title>Ejemplo de Consultas de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<body>
<H1>Informacion perteneciente a las materias que cursa el alumno en el siclo actual</H1>
<h2><a href="ejeinsertar.php">Nuevo Registro</a></h2>
<h2><a href="ejeborrar.php">Borrar Registro</a></h2>
<h2>

<p><a href="../datos personales/ejeinsertar.php">Regresar</a></p>
<p>
  <?php
include("conexion.php");
$link=Conectarse();
$result=mysql_query("select * from materiascursadas",$link);
?>
</p>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
  <TR><TD>matricula</TD><TD>clavemateria</TD><TD>nombremateria</TD></TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row["matricula"],$row["clavemateria"],$row["nombremateria"]);
}
mysql_free_result($result);
mysql_close($link);
?>
</table>
</body>
</html> 
