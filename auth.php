<?php
session_start();

$usuario = $_POST['user'] ?? '';
$password = $_POST['pass'] ?? '';

// Credenciales fijas
if ($usuario === "administrador" && $password === "asd") {
    $_SESSION['rol'] = 'admin';
    header("Location: dashboard.php");
} elseif ($usuario === "cliente" && $password === "123") {
    $_SESSION['rol'] = 'cliente';
    header("Location: productos.php");
} else {
    // Página de error si las credenciales fallan
    echo "<h1>Error: Credenciales Incorrectas</h1>";
    echo "<a href='index.php'>Volver a intentar</a>";
}
?>