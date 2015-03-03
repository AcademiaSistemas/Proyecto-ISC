<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
<link rel="StyleSheet" href="stilo.css" type="text/css">
   <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Personal Dcente y Administrativo registrado en la academia de ISC</H1>
<h2><a href="consulta.php">Regresar</a></h2>

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
   <TD>direccion:</TD>
   <TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>telefono:</TD>
   <TD><INPUT TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30"></TD>
</TR>
<TR>
   <TD>matricula:</TD>
   <TD><INPUT TYPE="text" NAME="matricula" SIZE="20" MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Guardar">
</FORM>
<hr>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from administrativo",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
        <TD>&nbsp;<B>nombre</B></TD> <TD>&nbsp;<B>apellido1</B></TD> <TD>&nbsp;<B>apellido2</B></TD>
        <TD>&nbsp;<B>direccion</B></TD> <TD>&nbsp;<B>telefono</B></TD> <TD>&nbsp;<B>matricula</B></TD>
        </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td>
      <td>&nbsp;%s</td> <td>&nbsp;%s</td>",
      $row["nombre"], $row["apellido1"], $row["apellido2"], $row["direccion"], $row["telefono"], 
      $row["matricula"]);
   }
   mysql_free_result($result);
   mysql_close($link);   
?>
</table>
</body>
</html> 