<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "alojamiento";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y enlazar
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $correo, $contraseña);

// Establecer parámetros y ejecutar
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$stmt->execute();

$stmt->close();
$conn->close();

// Redirigir a la página principal después de crear la cuenta
header("Location: index.html");
exit();
?>
