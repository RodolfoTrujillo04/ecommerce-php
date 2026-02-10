<?php
session_start();
if($_SESSION['rol'] != 'cliente') header("Location: index.php");

$cantidades = $_POST['cantidades'];
$nombres = $_POST['nombres'];
$precios = $_POST['precios'];
$totalGeneral = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; padding: 50px; }
        .resumen-card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); width: 450px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { text-align: left; border-bottom: 2px solid #eee; padding: 10px; }
        td { padding: 10px; border-bottom: 1px solid #eee; }
        .total-row { font-size: 22px; font-weight: bold; color: #764ba2; text-align: right; }
        .btn-final { display: block; text-align: center; background: #764ba2; color: white; text-decoration: none; padding: 12px; border-radius: 8px; margin-top: 20px; }
    </style>
</head>
<body>

<div class="resumen-card">
    <h2>Resumen de Compra</h2>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cant.</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($cantidades as $id => $cantidad): 
                if($cantidad > 0):
                    $subtotal = $cantidad * $precios[$id];
                    $totalGeneral += $subtotal;
            ?>
                <tr>
                    <td><?php echo $nombres[$id]; ?></td>
                    <td><?php echo $cantidad; ?></td>
                    <td>$<?php echo number_format($subtotal, 2); ?></td>
                </tr>
            <?php 
                endif;
            endforeach; 
            ?>
        </tbody>
    </table>

    <div class="total-row">
        Total a Pagar: $<?php echo number_format($totalGeneral, 2); ?>
    </div>

    <a href="productos.php" class="btn-final" style="background: #666;">Regresar</a>
    <a href="#" class="btn-final" onclick="alert('¡Gracias por su compra!')">Confirmar Pedido</a>
</div>

</body>
</html>