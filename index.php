<?php
$servername = "database";
$username = "root";
$password = "root";
$dbname = "martinhuertaalvaro";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Establecer el modo de error de PDO a excepción
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT nombre, edad, estilo FROM mytable";
  $stmt = $conn->query($sql);

  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "Nombre: " . $row["nombre"] . " - Edad: " . $row["edad"] . " - Estilo: " . $row["estilo"] . "<br>";
    }
  } else {
    echo "0 results";
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
