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
//Crea una tabla CLIENTES en la base de datos EJERCICIO
$sql = "CREATE TABLE clientes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
//Analiza si la tabla CLIENTE se ha creado correctamente
if ($conn->query($sql) === TRUE) {
  echo "Table Clientes created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
</body>
</html>