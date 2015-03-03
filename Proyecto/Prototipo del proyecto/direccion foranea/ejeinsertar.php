<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
<link rel="StyleSheet" href="stilo.css" type="text/css">
   <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Inserta los datos pertenecientes a la direccion foranea del alumno</H1>
<h2><a href="consulta.php">Regresar</a></h2>

<FORM ACTION="procesar.php">
<TABLE>
<TR>
   <TD>matricula:</TD>
   <TD><INPUT TYPE="text" NAME="matricula" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>calle:</TD>
   <TD><INPUT TYPE="text" NAME="calle" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>numero:</TD>
   <TD><INPUT TYPE="text" NAME="numero" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>localidad:</TD>
   <TD><INPUT TYPE="text" NAME="localidad" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>estado:</TD>
   <TD><INPUT TYPE="text" NAME="estado" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>colonia:</TD>
   <TD><INPUT TYPE="text" NAME="colonia" SIZE="20" MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Guardar">
</FORM>
<hr>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from direcforanea",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
        <TD>&nbsp;<B>matricula</B></TD> <TD>&nbsp;<B>calle</B></TD> <TD>&nbsp;<B>numero</B></TD>
        <TD>&nbsp;<B>localidad</B></TD> <TD>&nbsp;<B>estado</B></TD> <TD>&nbsp;<B>colonia</B></TD>
        </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td>
      <td>&nbsp;%s</td> <td>&nbsp;%s</td>",
      $row["matricula"], $row["calle"], $row["numero"], $row["localidad"], $row["estado"], 
      $row["colonia"]);
   }
   mysql_free_result($result);
   mysql_close($link);   
?>
</table>
</body>
</html> 