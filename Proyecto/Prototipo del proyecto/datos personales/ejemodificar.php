<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
<link rel="StyleSheet" href="stilo.css" type="text/css">
  </head>
  <body>
<h2><a href="consulta.php">Regresar</a>
<?php
 
require("./conexion.php");
$link=Conectarse();
 
$query="SELECT * FROM datospersonales";
 
$result=mysql_query($query,$link) or die("Error: ".mysql_error());
 
// Si no se encuentran registros en la tabla usuarios solo resta mostrar
// el mensaje correspondiente, si se encuentra uno o más registros se recorre
// la tabla con la posibilidad de recoger los diferentes campos mediante la variable $Rs
 
if(mysql_num_rows($result) > 0){
 
// El encabezado de la tabla
?>
<table border=1>
  <tbody>
    <tr>
      <td>nombre</td>
      <td>apellido1</td>
      <td>apellido2</td>
      <td>matricula</td>
      <td>edad</td>
      <td>sexo</td>
      <td>telefono</td>
	<td>direccion</td>
	<td>estadoCivil</td>
	<td>e_mail</td>
    </tr>
 
<?php     
 
  while($Rs=mysql_fetch_array($result)) {
 
echo "<tr>".
      "<td>".$Rs["nombre"]."</td>".
      "<td>".$Rs["apellido1"]."</td>".
      "<td>".$Rs["apellido2"]."</td>".
      "<td>".$Rs["matricula"]."</td>".
      "<td>".$Rs["edad"]."</td>".
      "<td>".$Rs["sexo"]."</td>".
	"<td>".$Rs["telefono"]."</td>".
	"<td>".$Rs["direccion"]."</td>".
      "<td>".$Rs["estadoCivil"]."</td>".
	"<td>".$Rs["e_mail"]."</td>".
      // Establecemos un hipervinculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el numero de control en su
      // direccion a traves de la variable NoControl
      "<td><a href=./modificar.php?matricula=".$Rs["matricula"].">Modificar</a></td>".
    "</tr>";
 
}
 
}else{
 
echo "No hay usuarios registrados para listar";
 
}
// Cerramos la conexion
mysql_close($link);
 
?>
 
</table>
</form>
</body>
</html>