<?php
// Ejemplo de cálculo de total
$carrito = [
    ['nombre' => 'Laptop Gamer', 'precio' => 1500, 'cant' => 1],
    ['nombre' => 'Mouse Pro', 'precio' => 50, 'cant' => 2]
];

$total = 0;
foreach ($carrito as $item) {
    $subtotal = $item['precio'] * $item['cant'];
    $total += $subtotal;
    echo "<li>{$item['nombre']} - x{$item['cant']} : \${$subtotal}</li>";
}

echo "<h2>Total a Pagar: \${$total}</h2>";
?>