<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EJERCICIO";
// Se crea conexion con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// //Analiza si la conexion se ha establecido o no
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Borra la tabla CLIENTES
$sql = "DROP TABLE clientes";
//Analiza si la tabla CLIENTES se ha borrado correctamente o no
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>

</body>
</html>