<?php
require_once __DIR__ . '/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

include 'config/config.php';

$fecha_inicio = $_GET['fecha_inicio'] ?? null;
$fecha_fin = $_GET['fecha_fin'] ?? null;

$dompdf = new Dompdf();

$sql = "SELECT p.*, c.nombre_categoria 
        FROM productos p
        LEFT JOIN categorias c 
        ON p.id_categoria = c.id_categorias
        WHERE DATE(p.fecha_registro) BETWEEN ? AND ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$fecha_inicio, $fecha_fin]);
$productos = $stmt->fetchAll();

$total = 0;
$stock_bajo = 0;

$html = '
<h2 style="text-align:center;">Reporte de Inventario</h2>
<p><b>Desde:</b> '.$fecha_inicio.' <b>Hasta:</b> '.$fecha_fin.'</p>

<table border="1" cellspacing="0" cellpadding="5" width="100%">
<tr>
    <th>#</th>
    <th>Producto</th>
    <th>Categoría</th>
    <th>Stock</th>
    <th>Precio</th>
    <th>Total</th>
</tr>
';

foreach ($productos as $i => $p) {

    $stock = $p['cantidad_disponible'];
    $precio = $p['precio'];
    $valor = $stock * $precio;

    $total += $valor;

    if ($stock < 5) {
        $stock_bajo++;
    }

    $html .= '
    <tr>
        <td>'.($i+1).'</td>
        <td>'.$p['nombre_producto'].'</td>
        <td>'.$p['nombre_categoria'].'</td>
        <td>'.$stock.'</td>
        <td>$'.number_format($precio,0,',','.').'</td>
        <td>$'.number_format($valor,0,',','.').'</td>
    </tr>
    ';
}

$html .= '
</table>

<br>

<h3>Resumen</h3>
<p>Total inventario: <b>$'.number_format($total,0,',','.').'</b></p>
<p>Productos con stock bajo: <b>'.$stock_bajo.'</b></p>
';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream("reporte_inventario.pdf", ["Attachment" => false]);

?>