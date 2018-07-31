<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Send PHP</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>
<body>
	<div class="cajanewsl col-md-6">
<?php 
//validamos que el dato clave no llegue vacío

	if ($_POST['clave']!=""){ $clave=$_POST['clave'];}
	if ($_POST['nombre']!=""){$nombre=$_POST['nombre'];}
	if ($_POST['email']!=""){$email=$_POST['email'];}
	else{echo "Debe completar todos los datos";}


	//Armar el array POST
/*
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
*/
$fecha=date("d-m-Y");

	//Armamos el envio por email
	//mail("destinatario","asunto","mensaje")
$destinatario="nancy.a.viqueira@gmail.com";
$asunto="Nuevo registro desde el sitio";
$mensaje="Nombre: ".$nombre."<br>"."Email: ".$email."<br>"."clave: ".$clave."Enviado el ".$fecha;

//Cabeceras
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";

$envio=mail($destinatario,$asunto,$mensaje,$cabeceras);
if($envio==true){
	echo "Gracias por registrarse";	
}else{
	echo "Hubo un problema en el registro :(";
	echo $mensaje;
}




// Envio de datos a MySQL

// Conexion - mysqli_connect (host, usuario, clave, bd)

$conexion=mysqli_connect("localhost", "id5552802_dmdb", "utn2018", "id5552802_djmixbd") or die("Error de conexion");


// Consulta
$consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES (0, '$nombre', '$email', '$mensaje') ");

// Verificación 
if ($consulta==true) {echo "dato ingresdo";} else {echo "dato no ingresado";}


//cierre
mysqli_free_result($consulta); // libera la memoria
mysqli_close($conexion); //cierra la conexion


 ?>
</div>
</body>
</html>