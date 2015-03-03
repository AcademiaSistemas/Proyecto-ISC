<head>
   <title>Ejemplo de PHP</title>
<link rel="StyleSheet" href="stilo.css" type="text/css">
</head>
<body>
<H1>selecciona borrar para borrar un campo</H1>
<h2><a href="consulta.php">Regresar</a></h2>

<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from materiascursadas",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR>
          <TD>&nbsp;<B>matricula</B></TD> <TD>&nbsp;<B>calvemateria</B></TD> <TD>&nbsp;<B>nombremateria</B></TD>
          <TD>&nbsp;<B>Borrar</B>&nbsp;</TD>
          
      </TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td>
      <td>&nbsp;%s</td><td>&nbsp;%s</td>
      <td><a href=\"borrar.php?id=%d\">Borrar</a></td></tr>", 
      $row["matricula"], $row["clavemateria"],$row["nombremateria"],$row["matricula"]);
   }
   mysql_free_result($result);
   mysql_close($link);
?>
</table>
</body>
</html> 