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
//Analiza si la conexion se ha establecido o no
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//Selecciona el id, nombre y apellido de la tabla CLIENTES(Muestra todos los datos, no solo 1)
$sql = "SELECT id, firstname, lastname FROM clientes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // Muestra los datos seleccionados
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
</body>
</html>