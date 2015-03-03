<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
<link rel="StyleSheet" href="stilo.css" type="text/css">
   <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Inserta los datos pertenecientes de las materias que cursa el alumno actualmente en el siclo escolar</H1>
<h2><a href="consulta.php">Regresar</a></h2>

<FORM ACTION="procesar.php">
<TABLE>
<TR>
   <TD>matricula:</TD>
   <TD><INPUT TYPE="text" NAME="matricula" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>clavemateria:</TD>
   <TD><INPUT TYPE="text" NAME="clavemateria" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>nombremateria:</TD>
   <TD><INPUT TYPE="text" NAME="nombremateria" SIZE="20" MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Guardar">
</FORM>
<hr>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from materiascursadas",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
        <TD>&nbsp;<B>matricula</B></TD> <TD>&nbsp;<B>clavemateria</B></TD> <TD>&nbsp;<B>nombremateria</B></TD>
        </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr> <td>&nbsp;%s</td><td>&nbsp;%s</td> <td>&nbsp;%s</td></tr>",
      $row["matricula"], $row["clavemateria"], $row["nombremateria"]);
   }
   mysql_free_result($result);
   mysql_close($link);   
?>
</table>
</body>
</html> 