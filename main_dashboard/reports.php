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
					<a href="dashboard-principal.php">
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


			<li class="red">
				<a href="mail.php">
					<i class="font-icon glyphicon glyphicon-send"></i>
					<span class="lbl">Correo</span>
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
					<div>Fecha de generación:<br>01 de mayo de 2025</div>
				  </div>
				</div>
				<div class="col-lg-6 clearfix invoice-info">
				  <div class="text-lg-right">
					<h5>ID Reporte: INV-001</h5>
					<div>Fecha desde: 
						<div class="form-group">
							<div class="input-group date datetimepicker-1">
								<input type="text" class="form-control">
							<span class="input-group-addon">
								<i class="font-icon font-icon-calend"></i>
							</span>
							
							</div>
						</div>
					</div>
					<div>Hasta: <div class="form-group">
						<div class="input-group date datetimepicker-1">
							<input type="text" class="form-control">
						<span class="input-group-addon">
							<i class="font-icon font-icon-calend"></i>
						</span>
						</div>
					</div></div>
				  </div>
	  
				  <div class="payment-details">
					<strong>Resumen</strong>
					<div>Total de productos: <b>125</b></div>
					<div>Productos con stock bajo: <b>18</b></div>
					<div>Valor total del inventario: <b>$45.300.000</b></div>
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
					  <tr>
						<td>1</td>
						<td>Mouse Óptico</td>
						<td>Periféricos</td>
						<td>15</td>
						<td>10</td>
						<td>$35.000</td>
						<td>$525.000</td>
					  </tr>
					  <tr style="background-color: #ffe6e6;">
						<td>2</td>
						<td>Teclado Mecánico</td>
						<td>Periféricos</td>
						<td>4</td>
						<td>10</td>
						<td>$120.000</td>
						<td>$480.000</td>
					  </tr>
					  <!-- Puedes añadir más filas dinámicamente -->
					</tbody>
				  </table>
				</div>
			  </div>
	  
			  <div class="row">
				<div class="col-lg-7 terms-and-conditions">
				  <strong>Observaciones</strong>
				  Este reporte refleja los productos disponibles en inventario. Las filas en rojo indican stock por debajo del mínimo requerido. Se recomienda revisar para reposición.
				</div>
				<div class="col-lg-5 clearfix">
				  <div class="total-amount">
					<div>Subtotal del inventario: <b>$45.300.000</b></div>
					<div>Productos con stock bajo: <b>18</b></div>
					<div>Valor estimado de reposición: <span class="colored">$5.000.000</span></div>
					<div class="actions">
					  <button class="btn btn-rounded btn-inline">Exportar PDF</button>
					  <button class="btn btn-rounded btn-inline exl">Exportar EXCEL</button>
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