<?php

$Nombre=$_POST["nombre"];
$Apellido=$_POST["ape"];
$Telefono=$_POST["tel"];
$Correo=$_POST["cor"];


$conn = mysqli_connect($servername, $username, $password, $dbase1);

if (!$conn) {
  die("Fallo la conexion:" . mysqli_connect_error());
}

$sql = "INSERT INTO dbase1 (Nombre, Apellido_paterno, Telefono, Correo, Contrasena, Confirmar_contrasena)
VALUES('$Nombre', '$Apellido', '$Telefono', '$Correo')";

if (mysqli_query($conn, $sql)) {
 echo "El registro se agrego correctamente";
} else {
  echo "Error:No se pudo agregar el registro " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
	
</body>
</html>