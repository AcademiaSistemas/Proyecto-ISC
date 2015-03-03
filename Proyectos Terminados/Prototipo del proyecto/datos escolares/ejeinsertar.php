<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
<link rel="StyleSheet" href="stilo.css" type="text/css">
   <title>insertar</title>
</head>
<body>
<H1>Inserta los datos pertenecietes a la informacion escolar del alumno</H1>
<h2><a href="consulta.php">Regresar</a></h2>

<FORM ACTION="procesar.php">
<TABLE>
<TR>
   <TD>matricula:</TD>
   <TD><INPUT TYPE="text" NAME="matricula" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>grado:</TD>
   <TD><INPUT TYPE="text" NAME="grado" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>incidencias:</TD>
   <TD><INPUT TYPE="text" NAME="incidencias" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>promedio:</TD>
   <TD><INPUT TYPE="text" NAME="promedio" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>creditos:</TD>
   <TD><INPUT TYPE="text" NAME="creditos" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>actExtraCurry:</TD>
   <TD><INPUT TYPE="text" NAME="actExtraCurry" SIZE="20" MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Guardar">
</FORM>
<hr>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from DatosEscolares",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
        <TD>&nbsp;<B>matricula</B></TD> <TD>&nbsp;<B>grado</B></TD> <TD>&nbsp;<B>incidencias</B></TD>
        <TD>&nbsp;<B>promedio</B></TD> <TD>&nbsp;<B>creditos</B></TD> <TD>&nbsp;<B>actExtraCurry</B></TD>
        </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td>
      <td>&nbsp;%s</td> <td>&nbsp;%s</td>",
      $row["matricula"], $row["grado"], $row["incidencias"], $row["promedio"], $row["creditos"], 
      $row["actExtraCurry"]);
   }
   mysql_free_result($result);
   mysql_close($link);   
?>
</table>
</body>
</html> 