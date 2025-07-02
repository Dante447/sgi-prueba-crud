<?php
include __DIR__ . '/../config/config.php';



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $proveedor = $_POST['proveedor'];
    $categoria = $_POST['categoria'];

    try {
        $sql = "INSERT INTO productos (nombre, cantidad_disponible, precio, id_proveedor, id_categoria)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $cantidad, $precio, $proveedor, $categoria]);

        header("Location: ../products.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al insertar: " . $e->getMessage();
    }
} else {
    echo "❌ Método no permitido.";
}
?>
