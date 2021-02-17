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
$conn = null;
$servername = "localhost";
$username = "root";
$password = "";
// Se crea conexion con la base de datos

$conn = new mysqli($servername, $username, $password);

//Analiza si la conexion se ha establecido o no
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Crea la base de datos llamada EJERCICIO
$sql = "CREATE DATABASE EJERCICIO";
//Analiza si la base de datos se ha creado correctamente o no
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

 ?>
</body>
</html>