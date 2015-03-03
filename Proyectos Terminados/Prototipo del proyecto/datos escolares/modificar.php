<?php

// Realizamos la conexión al servidor MySQL
require("./conexion.php");
$link=Conectarse();

// La variable submit es recibida desde el formulario de modificación de datos
// Comprobamos si este archivo es llamado desde el formulario se ejecuta la 
// consulta UPDATE, si no, se presenta el formulario para editar la información

if(isset($_POST["submit"])){

	$query = "UPDATE DatosEscolares SET matricula='".$_POST["matricula"]."', grado='".$_POST["grado"]."', ".
		"incidencias='".$_POST["incidencias"]."', promedio='".$_POST["promedio"]."', ".
		"creditos='".$_POST["creditos"]."',"." actExtraCurry='".$_POST["actExtraCurry"]."'
		WHERE matricula='".$_POST["matricula"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo "Se han modificado los datos del usuario con matricula ".$_POST["matricula"];
	echo '<a href="ejemodificar.php"><br>Volver</a>';
}else{

	// Recibimos la variable NoControl pasada mediante el metodo GET
	// y depositamos el valor de esta en la variable llamada $NoControl
	 
	$matricula=$_GET['matricula'];
	$query="SELECT * FROM DatosEscolares WHERE matricula='".$matricula."'";
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
	    <td> grado</td>
	    <td><input name='grado'  type='text' maxlength='20' value="<?php echo $Rs['grado']; ?>"></td>
	    </tr>
	  <tr>
	    <td> incidencias</td>
	    <td><input name='incidencias'  type='text' maxlength='20' value="<?php echo $Rs['incidencias']; ?>" readonly='true'></td>
	    </tr>
	  <tr>
	    <td> promedio</td>
	    <td><input name='promedio'  type='text' maxlength='20' value="<?php echo $Rs['promedio']; ?>"></td>
	    </tr>
	  <tr>
	    <td> creditos</td>
	    <td><input name='creditos'  type='text' maxlength='20' value="<?php echo $Rs['creditos']; ?>"></td>
	    </tr>
           <tr>
	    <td> actExtraCurry</td>
	    <td><input name='actExtraCurry'  type='text' maxlength='20' value="<?php echo $Rs['actExtraCurry']; ?>"></td>
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
	    echo "No fué posible realizar la operación solicitada al usuario con NoControl ".$matricula;
	}
}
// Cerramos la conexión
mysql_close($link);
  
?>