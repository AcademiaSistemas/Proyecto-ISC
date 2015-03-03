<head>
   <title>Ejemplo de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<body>
<H1>Selecciona borrar para eliminas un registro</H1>
<h2><a href="consulta.php">Regresar</a>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from datospersonales",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
          <TD>&nbsp;<B>nombre</B></TD> <TD>&nbsp;<B>apellido1</B></TD> <TD>&nbsp;<B>apellido2</B></TD>
          <TD>&nbsp;<B>matricula</B></TD> <TD>&nbsp;<B>edad</B></TD> <TD>&nbsp;<B>sexo</B></TD><TD>&nbsp;<B>telefono</B></TD><TD>&nbsp;<B>direccion</B></TD><TD>&nbsp;<B>estadoCivil</B></TD><TD>&nbsp;<B>e_mail</B></TD>  <TD>&nbsp;<B>Borrar</B>&nbsp;</TD>
          
      </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td>
      <td>&nbsp;%s</td><td>&nbsp;%s</td>
      <td><a href=\"borrar.php?id=%d\">Borrar</a></td></tr>", 
      $row["nombre"], $row["apellido1"],$row["apellido2"],$row["matricula"],$row["edad"],$row["sexo"],$row["telefono"],$row["direccion"],$row["estadoCivil"],$row["e_mail"],$row["matricula"]);
   }
   mysql_free_result($result);
   mysql_close($link);
?>
</table>
</body>
</html> 