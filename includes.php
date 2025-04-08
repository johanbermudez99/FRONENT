<?php
// Aquí defines la conexión a tu base de datos
$servername = "localhost";
$username = "root"; // Usa tu nombre de usuario de base de datos
$password = "";     // Usa tu contraseña de base de datos
$dbname = "nombre_de_base_de_datos"; // Usa el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
