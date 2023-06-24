<?php
include("conecion.php");
boton($conexion);


function insertar($conexion){
	// Obtener los datos del formulario
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $flexRadioDefault = $_POST['flexRadioDefault'];
    $fecha_nac = $_POST['fecha_nac'];
    $tipo_ide = $_POST['tipo_ide'];
    $num_ide = $_POST['num_ide'];
	$email = $_POST['email'];
    $tel = $_POST['tel'];
    $direccion = $_POST['direccion'];
	$password = $_POST['password'];

	// Insertar los datos en la base de datos
	$sql = "INSERT INTO estudiante VALUES ('$nombre', '$apellido', '$flexRadioDefault',
    '$fecha_nac', '$tipo_ide', '$num_ide', '$email', '$tel', '$direccion', '$password')";
	mysqli_query($conexion, $sql);
	mysqli_close($conexion);
	sleep(4);
	header("Location: tabla.php");
}


function boton($conexion){
	////obtener la validacion del boton
	if(isset($_POST['enviar'])){
		insertar($conexion);
        echo '<h1>registrando</h1>';

	}
	else{
		echo 'no enviado ';
	}
}



?>
