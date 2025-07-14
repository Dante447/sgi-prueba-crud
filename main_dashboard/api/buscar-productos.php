<?php
include __DIR__ . '/../config/config.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$busqueda = isset($_GET['q']) ? trim($_GET['q']) : '';

$sql = "SELECT 
            p.id_producto,
            p.nombre AS nombre_producto,
            p.cantidad_disponible,
            p.precio AS precio_unitario,
            pr.nombre_proveedor,
            c.nombre_categoria
        FROM productos p
        LEFT JOIN proveedores pr ON p.id_proveedor = pr.id_proveedor
        LEFT JOIN categorias c ON p.id_categoria = c.id_categorias
        WHERE p.nombre LIKE :busqueda
        ORDER BY p.id_producto ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute(['busqueda' => "%$busqueda%"]);

$productos = $stmt->fetchAll();

echo json_encode($productos);
