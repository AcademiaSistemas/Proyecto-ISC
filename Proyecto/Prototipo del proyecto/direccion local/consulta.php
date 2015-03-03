<html> 
<head>
<title>Ejemplo de Consultas de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<body>
<H1>Datos pertenecientes a la direccion local del alumno</H1>
<h2><a href="ejeinsertar.php">Nuevo Registro</a></h2>
<h2><a href="ejeborrar.php">Borrar Registro</a></h2>
<h2>
<p><a href="ejemodificar.php">Actualizar registro</a></p>
<p><a href="../datos personales/ejeinsertar.php">Regresar</a></p>
<p>
  <?php
include("conexion.php");
$link=Conectarse();
$result=mysql_query("select * from direclocal",$link);
?>
</p>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
  <TR><TD>matricula</TD><TD>calle</TD><TD>numero</TD><TD>localidad</TD><TD>estado</TD><TD>colonia</TD></TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["matricula"],$row["calle"],$row["numero"],$row["localidad"],$row["estado"],$row["colonia"]);
}
mysql_free_result($result);
mysql_close($link);
?>
</table>
</body>
</html> 
