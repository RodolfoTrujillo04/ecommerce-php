<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Login | Modern System</title>
    <style>
        /* CSS Moderno y Elegante */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #eee;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s;
            outline: none;
        }

        .input-group input:focus {
            border-color: #764ba2;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #764ba2;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #5a3782;
        }

        .hint {
            margin-top: 15px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Bienvenido</h2>
    <form action="auth.php" method="POST">
        <div class="input-group">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Ej: administrador" required>
        </div>
        
        <div class="input-group">
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" placeholder="••••••••" required>
        </div>

        <button type="submit">Iniciar Sesión</button>
    </form>
    
    <div class="hint">
        Prueba con: <b>administrador/asd</b> o <b>cliente/123</b>
    </div>
</div>

</body>
</html>