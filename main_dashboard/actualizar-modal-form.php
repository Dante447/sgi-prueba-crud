<?php
include 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $proveedor = $_POST['proveedor'];
    $categoria = $_POST['categoria'];

    try {
        $sql = "UPDATE productos SET 
                    nombre = ?, 
                    cantidad_disponible = ?, 
                    precio = ?, 
                    id_proveedor = ?, 
                    id_categoria = ?
                WHERE id_producto = ?";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $cantidad, $precio, $proveedor, $categoria, $id]);

        header("Location: products.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al actualizar: " . $e->getMessage();
    }
} else {
    echo "No se recibió una solicitud POST válida.";
}
?>
