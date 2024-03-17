<html>
<head>
<title> Crear base de datos </title>
</head>
<body >
<?php
$servidor= $_POST["serv"];
$usuario= $_POST["user"];
$password= $_POST["pass"];
$bdname=$_POST["nom"];

// Creación de la conexión con el servidor
$con = mysqli_connect($servidor, $usuario, $password);

// Verificación de la conexión
if (!$con) {
  die("Fallo la conexión: " . mysqli_connect_error());
}

// Creación de la base de datos
$sql = "CREATE DATABASE ".$dbase1;

if (mysqli_query($con, $sql)) {
  echo " Se creo la base de datos";
} else {
  echo "Error al crear la base de datos" . mysqli_error($con);
}

mysqli_close($con);// cerramos la conexión con el servidor
?>
</body>
</html>