<?php
	
	
session_start();

include 'config/config.php';	

$tipo = "Inventario";

$fecha_inicio = $_GET['fecha_inicio'] ?? null;
$fecha_fin = $_GET['fecha_fin'] ?? null;

$total_productos = 0;
$stock_bajo = 0;
$valor_total = 0;

$productos = [];

if ($fecha_inicio && $fecha_fin) {

    $sql = "SELECT p.*, c.nombre_categoria 
            FROM productos p
            LEFT JOIN categorias c 
            ON p.id_categoria = c.id_categorias
            WHERE DATE(p.fecha_registro) BETWEEN ? AND ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fecha_inicio, $fecha_fin]);
    $result = $stmt->fetchAll();
	$productos = $result;
	

    foreach ($result as $row) {

        $stock = $row['cantidad_disponible'];
        $stock_minimo = 5;

        $valor_producto = $stock * $row['precio'];

        $total_productos++;
        $valor_total += $valor_producto;

        if ($stock < $stock_minimo) {
            $stock_bajo++;
        }
    }

    // 🔥 Guardar reporte
    if (!isset($_GET['guardado'])) {

// if (!isset($_SESSION['id_usuario'])) {
//     die("Usuario no autenticado");
// }

$usuario_id = 3; // prueba rápida

        $stmtInsert = $pdo->prepare("
            INSERT INTO reportes 
            (tipo_reporte, fecha_inicio, fecha_fin, total_productos, productos_stock_bajo, valor_total, generado_por)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");

        $stmtInsert->execute([
            $tipo,
            $fecha_inicio,
            $fecha_fin,
            $total_productos,
            $stock_bajo,
            $valor_total,
            $usuario_id
        ]);

        header("Location: reports.php?guardado=1&fecha_inicio=$fecha_inicio&fecha_fin=$fecha_fin");
        exit();
    }
}
?>



<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Reportes</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/separate/pages/invoice.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="./css/separate/main.css">

</head>
<body class="with-side-menu theme-side-madison-caribbean body-menu">

	<!---------------         SIDE HEADER              --------------------------->

	<?php include_once __DIR__ . '/partials/header.php'; ?>
	

	<!---------------         SIDE HEADER              --------------------------->




	<!---------------         SIDE BAR              --------------------------->
	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
		<ul class="side-menu-list">

				<li class="">
					<a href="index.php">
						<i class="font-icon font-icon-dashboard"></i>
						<span class="lbl">Dashboard</span>
					</a>
				</li>

				<li class="">
					<a href="products.php">
						<span class="glyphicon glyphicon-list-alt"></span>
						<span class="lbl">Productos</span>
					</a>
				</li>

			<li class="magenta opened">
				<a href="reports.php">
					<i class="font-icon font-icon-chart-2"></i>
					<span class="lbl">Reportes</span>
				</a>
			</li>


			<li class="">
				<a href="calendar.php">
					<i class="font-icon font-icon-calend"></i>
					<span class="lbl">Calendario</span>
				</a>
			</li>
			
		</ul>
	

		<a href="dashnoard-principal.html" class="site-logo">
			<img class="hidden-md-down img-fluid" src="img/Logo.png" alt="">
			<img class="hidden-lg-up img-fluid" src="img/Logo.png" alt="">
		</a>


	</nav>
	<!---------------         SIDE BAR              --------------------------->

	<!---------------      PAGE CONTENT         --------------------------->


	<div class="page-content">
		<div class="container-fluid">
		  <section class="card">
			<header class="card-header card-header-lg">
			  Reporte de Inventario
			</header>
			<div class="card-block invoice">
			  <div class="row">
				<div class="col-lg-6 company-info">
				  <h5>Sistema de Inventario</h5>
				  <p>www.miempresa.com</p>
	  
				  <div class="invoice-block">
					<div>Calle 123 #45-67</div>
					<div>Cali, Valle del Cauca</div>
					<div>Colombia</div>
				  </div>
	  
				  <div class="invoice-block">
					<div>Teléfono: (602) 555 1234</div>
					<div>Email: contacto@miempresa.com</div>
				  </div>
	  
				  <div class="invoice-block">
					<h5>Reporte generado por:</h5>
					<div>Diego Erazo</div>
					<div>Fecha de generación:<br><?= date("d \d\e F \d\e Y") ?></div>
				  </div>
				</div>
				<div class="col-lg-6 clearfix invoice-info">		
				  <div class="text-lg-right">
					<h5>ID Reporte: INV-<?= rand(100,999) ?></h5>

<form method="GET" class="mb-3">
    <div class="row">
        <div class="col-md-4">
            <label>Fecha inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Fecha fin</label>
            <input type="date" name="fecha_fin" class="form-control" required>
        </div>

        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">
                Generar Reporte
            </button>
        </div>
    </div>
</form>
				</div>
	  
				<div class="payment-details">
					<strong>Resumen</strong>
						<div>Total de productos: <b><?= $total_productos ?></b></div>
						<div>Productos con stock bajo: <b><?= $stock_bajo ?></b></div>
						<div>Valor total del inventario: 
    						<b>$<?= number_format($valor_total, 0, ',', '.') ?></b>
						</div>
				  </div>
				</div>
			  </div>
	  
			  <div class="row table-details">
				<div class="col-lg-12">
				  <table class="table table-bordered">
					<thead>
					  <tr>
						<th>#</th>
						<th>Producto</th>
						<th>Categoría</th>
						<th>Stock</th>
						<th>Stock Mínimo</th>
						<th>Precio Unitario</th>
						<th>Valor Total</th>
					  </tr>
					</thead>
					<tbody>
					 <tbody>
<?php if (!empty($productos)): ?>
    <?php $i = 1; ?>
<?php foreach ($productos as $index => $producto): ?>

<tr>
    <td><?= $index + 1 ?></td>
    
    <td><?= $producto['nombre'] ?></td>
    
    <td><?= $producto['nombre_categoria'] ?></td>
    
    <td><?= $producto['cantidad_disponible'] ?></td>
    
    <td>5</td> <!-- puedes dejar fijo o luego hacerlo dinámico -->
    
    <td>$<?= number_format($producto['precio'], 0, ',', '.') ?></td>
    
    <td>
        $<?= number_format(
            $producto['cantidad_disponible'] * $producto['precio'], 
            0, ',', '.'
        ) ?>
    </td>

</tr>

<?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="7" class="text-center">
            No hay datos para mostrar
        </td>
    </tr>
<?php endif; ?>
</tbody>
					
					  <!-- Puedes añadir más filas dinámicamente -->
					</tbody>
				  </table>
				</div>
			  </div>
	  
			  <div class="row">
				<div class="col-lg-7 terms-and-conditions">
				  <strong>Observaciones</strong>

<?php if ($stock_bajo > 0): ?>
    Este reporte refleja los productos disponibles en inventario. 
    <span style="color:red;">
        Hay <?= $stock_bajo ?> productos con stock bajo.
    </span>
    Se recomienda realizar reposición.
<?php else: ?>
    El inventario se encuentra en buen estado. No hay productos con stock bajo.
<?php endif; ?>

				</div>
				<div class="col-lg-5 clearfix">
				  <div class="total-amount">
<div>Subtotal del inventario: 
    <b>$<?= number_format($valor_total, 0, ',', '.') ?></b>
</div>

<div>Productos con stock bajo: 
    <b><?= $stock_bajo ?></b>
</div>

<div>Valor estimado de reposición: 
    <span class="colored">
        $<?= number_format($stock_bajo * 500000, 0, ',', '.') ?>
    </span>
</div>
					<div class="actions">
					  <a href="exportar_pdf.php?fecha_inicio=<?= $fecha_inicio ?>&fecha_fin=<?= $fecha_fin ?>" 
   class="btn btn-rounded btn-inline">
   Exportar PDF
</a>
<a href="exportar_excel.php?fecha_inicio=<?= $fecha_inicio ?>&fecha_fin=<?= $fecha_fin ?>" 
   class="btn btn-rounded btn-inline exl">
   Exportar EXCEL
</a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		</div><!--.container-fluid-->
	  </div>

	<!---------------      PAGE CONTENT         --------------------------->
	  

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script type="text/javascript" src="js/lib/moment/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="js/lib/eonasdan-bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="js/lib/clockpicker/bootstrap-clockpicker.min.js"></script>
	<script src="js/lib/clockpicker/bootstrap-clockpicker-init.js"></script>
	<script src="js/lib/daterangepicker/daterangepicker.js"></script>
	<script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
	<script>
		$(function() {
			function cb(start, end) {
				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
			cb(moment().subtract(29, 'days'), moment());

			$('#daterange').daterangepicker({
				"timePicker": true,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				"linkedCalendars": false,
				"autoUpdateInput": false,
				"alwaysShowCalendars": true,
				"showWeekNumbers": true,
				"showDropdowns": true,
				"showISOWeekNumbers": true
			});

			$('#daterange2').daterangepicker();

			$('#daterange3').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			});

			$('#daterange').on('show.daterangepicker', function(ev, picker) {
				/*$('.daterangepicker select').selectpicker({
					size: 10
				});*/
			});

			/* ==========================================================================
			 Datepicker
			 ========================================================================== */

			$('.datetimepicker-1').datetimepicker({
				widgetPositioning: {
					horizontal: 'right'
				},
				debug: false
			});

			$('.datetimepicker-2').datetimepicker({
				widgetPositioning: {
					horizontal: 'right'
				},
				format: 'LT',
				debug: false
			});
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>