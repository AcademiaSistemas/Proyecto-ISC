<?php

// Realizamos la conexión al servidor MySQL
require("./conexion.php");
$link=Conectarse();

// La variable submit es recibida desde el formulario de modificación de datos
// Comprobamos si este archivo es llamado desde el formulario se ejecuta la 
// consulta UPDATE, si no, se presenta el formulario para editar la información

if(isset($_POST["submit"])){

	$query = "UPDATE datospersonales SET matricula='".$_POST["matricula"]."', nombre='".$_POST["nombre"]."', ".
		"apellido1='".$_POST["apellido1"]."', apellido2='".$_POST["apellido2"]."', ".
		"edad='".$_POST["edad"]."',"." sexo='".$_POST["sexo"]."',"." telefono='".$_POST["telefono"]."',".
		" direccion='".$_POST["direccion"]."',"." estadoCivil='".$_POST["estadoCivil"]."',"." e_mail='".$_POST["e_mail"]."'
 		WHERE matricula='".$_POST["matricula"]."'";
	$result=mysql_query($query,$link) or die("Error: ".mysql_error());
	echo "Se han modificado los datos del usuario con matricula ".$_POST["matricula"];
echo '<a href="ejemodificar.php"><br>Volver</a>';
}else{

	// Recibimos la variable NoControl pasada mediante el metodo GET
	// y depositamos el valor de esta en la variable llamada $NoControl
	 
	$matricula=$_GET['matricula'];
	$query="SELECT * FROM datospersonales WHERE matricula='".$matricula."'";
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
	    <td> nombre</td>
	    <td><input name='nombre'  type='text' maxlength='20' value="<?php echo $Rs['nombre']; ?>"></td>
	    </tr>
	  <tr>
	    <td> apellido1</td>
	    <td><input name='apellido1'  type='text' maxlength='20' value="<?php echo $Rs['apellido1']; ?>"></td>
	    </tr>
	  <tr>
	    <td> apellido2</td>
	    <td><input name='apellido2'  type='text' maxlength='20' value="<?php echo $Rs['apellido2']; ?>" readonly='true'></td>
	    </tr>
	  <tr>
	    <td> matricula</td>
	    <td><input name='matricula'  type='text' maxlength='20' value="<?php echo $Rs['matricula']; ?>"></td>
	    </tr>
	  <tr>
	    <td> edad</td>
	    <td><input name='edad'  type='text' maxlength='20' value="<?php echo $Rs['edad']; ?>"></td>
	    </tr>
	    <tr>
	    <td> sexo</td>
	    <td><input name='sexo'  type='text' maxlength='20' value="<?php echo $Rs['sexo']; ?>"></td>
	    </tr>
	<tr>
	    <td> telefono</td>
	    <td><input name='telefono'  type='text' maxlength='20' value="<?php echo $Rs['telefono']; ?>"></td>
	    </tr>
	<tr>
	    <td> direccion</td>
	    <td><input name='direccion'  type='text' maxlength='20' value="<?php echo $Rs['direccion']; ?>"></td>
	    </tr>
	<tr>
	    <td> estadoCivil</td>
	    <td><input name='estadoCivil'  type='text' maxlength='20' value="<?php echo $Rs['estadoCivil']; ?>"></td>
	    </tr>
           <tr>
	    <td> e_mail</td>
	    <td><input name='e_mail'  type='text' maxlength='20' value="<?php echo $Rs['e_mail']; ?>"></td>
	    </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><input name='submit' type='submit' value='Guardar'></td>
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