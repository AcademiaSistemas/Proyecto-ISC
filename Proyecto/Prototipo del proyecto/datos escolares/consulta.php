<html> 
<head>
<title>Ejemplo de Consultas de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<body>
<H1>Datos pertenecientos a la informacion escolar del alumno</H1>
<h2><a href="ejeinsertar.php">Nuevo Registro</a></h2>
<h2><a href="ejeborrar.php">Borrar Registro</a></h2>
<h2>
<p><a href="ejemodificar.php">Actualizar registro</a></p>
<p><a href="../datos personales/ejeinsertar.php">Regresar</a></p>
<p>
  <?php
include("conexion.php");
$link=Conectarse();
$result=mysql_query("select * from DatosEscolares",$link);
?>
</p>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
  <TR><TD>matricula</TD><TD>grado</TD><TD>incidencias</TD><TD>promedio</TD><TD>creditos</TD><TD>actExtraCurry</TD></TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["matricula"],$row["grado"],$row["incidencias"],$row["promedio"],$row["creditos"],$row["actExtraCurry"]);
}
mysql_free_result($result);
mysql_close($link);
?>
</table>
</body>
</html> 
