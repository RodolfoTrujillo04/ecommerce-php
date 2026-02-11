<?php
session_start();

$usuario = $_POST['user'] ?? '';
$password = $_POST['pass'] ?? '';

// Credenciales fijas
if ($usuario === "administrador" && $password === "asd") {
    $_SESSION['rol'] = 'admin';
    header("Location: dashboard.php");
    exit();
} elseif ($usuario === "cliente" && $password === "123") {
    $_SESSION['rol'] = 'cliente';
    header("Location: productos.php");
    exit();
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .error-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 350px;
        }

        .error-box h1 {
            color: #333;
            margin-bottom: 10px;
        }

        .error-box p {
            color: #555;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="error-box">
        <h1>⚠ Credenciales Incorrectas</h1>
        <p>El usuario o la contraseña no son válidos.</p>
        <a href="index.php" class="btn">Volver a intentar</a>
    </div>
</body>
</html>
<?php
}
?>
