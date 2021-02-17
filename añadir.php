


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
//Inserta un dato dentro de la tabla CLIENTES
$sql = "INSERT INTO clientes (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
//Analiza si el dato se ha introducido correctamente o no
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>