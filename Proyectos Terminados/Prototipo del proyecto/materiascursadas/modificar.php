<?php

// Realizamos la conexión al servidor MySQL
require("./conexion.php");
$link=Conectarse();

// La variable submit es recibida desde el formulario de modificación de datos
// Comprobamos si este archivo es llamado desde el formulario se ejecuta la 
// consulta UPDATE, si no, se presenta el formulario para editar la información

if(isset($_POST["submit"])){

	$query = "UPDATE materiascursadas SET matricula='".$_POST["matricula"]."', clavemateria='".$_POST["clavemateria"]."', ".
		"nombremateria='".$_POST["nombremateria"]."'
		WHERE matricula='".$_POST["matricula"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo "Se han modificado los datos del usuario con matricula ".$_POST["matricula"];
echo '<a href="ejemodificar.php"><br>Volver</a>';
}else{

	// Recibimos la variable NoControl pasada mediante el metodo GET
	// y depositamos el valor de esta en la variable llamada $NoControl
	 
	$matricula=$_GET['matricula'];
	$query="SELECT * FROM materiascursadas WHERE matricula='".$matricula."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	 
	// Verificamos con la consulta SELECT si existe un registro asociado al número
	// recibido presentamos el formulario de edición, sino avisamos que 
	// la operación no puede efectuarse
	 
	if(mysql_num_rows($result) > 0){

	while($Rs=mysql_fetch_array($result)) {
	 
	?>

	<form  method=Post name=frm action="./modificar.php">
	    <table>
		<tr>
		<td colspan=2>
		Formulario de Modificacion</td>
	    </tr>
	  <tr>
	    <td> matricula</td>
	    <td><input name='matricula'  type='text' maxlength='20' value="<?php echo $Rs['matricula']; ?>"></td>
	    </tr>
	  <tr>
	    <td> clavemateria</td>
	    <td><input name='clavemateria'  type='text' maxlength='20' value="<?php echo $Rs['clavemateria']; ?>"></td>
	    </tr>
	  <tr>
	    <td>nombremateria</td>
	    <td><input name='nombremateria'  type='text' maxlength='20' value="<?php echo $Rs['nombremateria']; ?>" readonly='true'></td>
	    </tr>
	  
	  <tr>
	    <td>&nbsp;</td>
	    <td><input name='submit' type='submit' value='Enviar'></td>
	  </tr>
	</table>
	</form>

	<?php
	}
	   
	}else{
	    echo "No fué posible realizar la operación solicitada al usuario con NoContrl ".$matricula;
	}
}
// Cerramos la conexión
mysql_close($link);
  
?>