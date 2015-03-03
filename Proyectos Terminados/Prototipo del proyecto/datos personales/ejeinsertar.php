<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
<link rel="StyleSheet" href="stilo.css" type="text/css">
   <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Inserta los datos pertenecientes a la informacin del alumno</H1>
<h2>
<p><a href="consulta.php">Regresar</a></p>
<p><a href="../datos escolares/consulta.php">datos escolares</a></p>
<p><a href="../direccion local/consulta.php">direccion local</a></p>
<p><a href="../direccion foranea/consulta.php">direccion foranea (en caso de tener)</a></p>
<p><a href="../materiasimpartidas/consulta.php">materias impartidas</a></p>
<p><a href="../materiascursadas/consulta.php">materias cursadas</a></p>
<p><a href="../materiascursar/consulta.php">materias por cursar</a></p>
<p>&nbsp;</p>
<FORM ACTION="procesar.php">
  <TABLE>
<TR>
   <TD>nombre:</TD>
   <TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>apellido1:</TD>
   <TD><INPUT TYPE="text" NAME="apellido1" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>apellido2:</TD>
   <TD><INPUT TYPE="text" NAME="apellido2" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>matricula:</TD>
   <TD><INPUT TYPE="text" NAME="matricula" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>edad:</TD>
   <TD><INPUT TYPE="text" NAME="edad" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>sexo:</TD>
   <TD><INPUT TYPE="text" NAME="sexo" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>telefono:</TD>
   <TD><INPUT TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>direccion:</TD>
   <TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>estadoCivil:</TD>
   <TD><INPUT TYPE="text" NAME="estadoCivil" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>e_mail:</TD>
   <TD><INPUT TYPE="text" NAME="e_mail" SIZE="20" MAXLENGTH="30"></TD>
</TR>

</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Guardar">
</FORM>
<hr>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from datospersonales",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
        <TD>&nbsp;<B>nombre</B></TD> <TD>&nbsp;<B>apellido1</B></TD> <TD>&nbsp;<B>apellido2</B></TD>
        <TD>&nbsp;<B>matricula</B></TD> <TD>&nbsp;<B>edad</B></TD> <TD>&nbsp;<B>sexo</B></TD>
	<TD>&nbsp;<B>telefono</B></TD><TD>&nbsp;<B>direccion</B></TD><TD>&nbsp;<B>estadoCivil</B></TD><TD>&nbsp;<B>e_mail</B>&nbsp;</TD>
        </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td> <td>&nbsp;%s</td>
      <td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>",
      $row["nombre"], $row["apellido1"], $row["apellido2"], $row["matricula"], $row["edad"], 
      $row["sexo"],$row["telefono"],$row["direccion"],$row["estadoCivil"],$row["e_mail"]);
   }
   mysql_free_result($result);
   mysql_close($link);   
?>
</table>
</body>
</html> 