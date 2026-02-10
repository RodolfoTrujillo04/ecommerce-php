<?php
session_start();
if($_SESSION['rol'] != 'cliente') header("Location: index.php");

$productos = [
    ['id' => 1, 'nombre' => 'Laptop Gamer', 'precio' => 1200, 'img' => 'imagen1.jpg'],
    ['id' => 2, 'nombre' => 'Smartphone Pro', 'precio' => 800, 'img' => 'imagen2.jpg'],
    ['id' => 3, 'nombre' => 'Audífonos BT', 'precio' => 150, 'img' => 'imagen3.jpg']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body { font-family: sans-serif; background: #f4f7f6; padding: 20px; }
        .grid { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .card { background: white; padding: 15px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: 200px; text-align: center; }
        .card img { width: 100%; border-radius: 8px; }
        .btn-comprar { background: #28a745; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; margin-top: 10px; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Catálogo de Productos</h1>
    <form action="total.php" method="POST">
        <div class="grid">
            <?php foreach($productos as $p): ?>
                <div class="card">
                    <img src="img/<?php echo $p['img']; ?>" alt="Producto">
                    <h3><?php echo $p['nombre']; ?></h3>
                    <p>$<?php echo $p['precio']; ?></p>
                    <input type="number" name="cantidades[<?php echo $p['id']; ?>]" value="0" min="0" style="width: 50px;">
                    <input type="hidden" name="nombres[<?php echo $p['id']; ?>]" value="<?php echo $p['nombre']; ?>">
                    <input type="hidden" name="precios[<?php echo $p['id']; ?>]" value="<?php echo $p['precio']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin-top: 30px;">
            <button type="submit" class="btn-comprar" style="padding: 15px 40px; font-size: 18px;">Ver Resumen y Pagar</button>
        </div>
    </form>
</body>
</html>