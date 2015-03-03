<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
   <title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from alumno",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=2>
      <TR><TD>&nbsp;Nombre</TD><TD>&nbsp;ApellidoPaterno&nbsp;</TD><TD>&nbsp;NoControl</TD></TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>", $row["Nombre"],$row["ApPat"],$row["NoControl"]);
   }
   mysql_free_result($result);
   mysql_close($link);
?>
</table>
</body>
</html> 
