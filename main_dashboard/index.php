
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Menú principal</title>

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
	<link rel="stylesheet" href="css/separate/vendor/lobipanel.min.css">
	<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
	<link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="./css/separate/main.css">
	<link rel="stylesheet" href="css/lib/lobipanel/lobipanel.min.css">

</head>


<body class="with-side-menu theme-side-madison-caribbean body-menu">

	<!---------------         SIDE HEADER              --------------------------->
	<?php include_once __DIR__ . '/partials/header.php'; ?>

	<!---------------         SIDE HEADER              --------------------------->



	<!---------------         SIDE BAR              --------------------------->
	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
		<ul class="side-menu-list">

				<li class="magenta opened">
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

			<li class="">
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


	<!---------------         PAGE CONTENT              --------------------------->
	<div class="page-content">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-xl-6">
	                <div class="chart-statistic-box">
	                    <div class="chart-txt">
	                        <div class="chart-txt-top">
	                            <p><span class="unit">📦</span><span class="number">1540</span></p>
	                            <p class="caption">Productos en inventario</p>
	                        </div>
							<table class="tbl-data">
								<tr>
									<td class="price color-purple">🔄 320</td>
									<td>Movimientos recientes</td>
								</tr>
								<tr>
									<td class="price color-yellow">🔴 8</td>
									<td>Alertas de stock bajo</td>
								</tr>
								<tr>
									<td class="price color-lime">💼 15</td>
									<td>Proveedores activos</td>
								</tr>
							</table>
							
	                    </div>

	                </div><!--.chart-statistic-box-->
	            </div><!--.col-->
	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
								<div>
									<div class="number">8</div>
									<div class="caption"><div>Stock crítico</div></div>
									<div class="percent">
										<div class="arrow up"></div>
										<p>+33%</p>
									</div>
								</div>
							</article>
							
	                    </div><!--.col-->
	                    <div class="col-sm-6">
							<article class="statistic-box purple">
								<div>
									<div class="number">210</div>
									<div class="caption"><div>Movimientos inventario</div></div>
								</div>
							</article>
							
	                    </div><!--.col-->
	                    <div class="col-sm-6">
							<article class="statistic-box yellow">
								<div>
									<div class="number">1520</div>
									<div class="caption"><div>Total productos</div></div>
								</div>
							</article>
							
	                    </div><!--.col-->
	                    <div class="col-sm-6">
							<article class="statistic-box green">
								<div>
									<div class="number">5</div>
									<div class="caption"><div>Usuarios del sistema</div></div>
								</div>
							</article>
							
	                    </div><!--.col-->
	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->
	
	        <div class="row">
	            <div class="col-xl-6 dahsboard-column">
	                <section class="box-typical box-typical-dashboard panel panel-default scrollable">
	                    <header class="box-typical-header panel-heading">
	                        <h3 class="panel-title">Últimos movimientos</h3>
	                    </header>
	                    <div class="box-typical-body panel-body">
	                        <table class="tbl-typical">
	                            <tr>
	                                <th><div>Producto</div></th>
	                                <th><div>Usuario</div></th>
	                                <th align="center"><div>Cantidad</div></th>
	                                <th align="center"><div>Fecha</div></th>
	                            </tr>
	                            
								<tr>
									<td>Teclado Mecánico Redragon</td>
									<td>Diego Erazo</td>
									<td align="center">3</td>
									<td align="center"><span class="semibold">01 May</span> 10:45</td>
								</tr>
								<tr>
									<td>Monitor LG 27"</td>
									<td>Laura Gómez</td>
									<td align="center">1</td>
									<td align="center"><span class="semibold">30 Abr</span> 16:20</td>
								</tr>
								<tr>
									<td>Router TP-Link</td>
									<td>Carlos Ramírez</td>
									<td align="center">2</td>
									<td align="center"><span class="semibold">29 Abr</span> 08:30</td>
								</tr>
	                        </table>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->

	            </div><!--.col-->
	            <div class="col-xl-6 dahsboard-column">
	                <section class="box-typical box-typical-dashboard panel panel-default scrollable">
	                    <header class="box-typical-header panel-heading">
	                        <h3 class="panel-title">Alertas de inventario</h3>
	                    </header>
	                    <div class="box-typical-body panel-body">
	                        <table class="tbl-typical">
	                            <tr>
	                                <th><div>Estado</div></th>
	                                <th><div>Producto</div></th>
	                                <th align="center"><div>Nivel actual</div></th>
	                                <th align="center"><div>Fecha</div></th>
	                            </tr>
	                            <tr>
									<td><span class="label label-success">Disponible</span></td>
									<td>Disco Duro Externo 1TB</td>
									<td align="center">12 unidades</td>
									<td align="center"><span class="semibold">01 May</span> 11:00</td>
								</tr>
								<tr>
									<td><span class="label label-warning">Bajo</span></td>
									<td>Cartuchos de Tinta Epson</td>
									<td align="center">3 unidades</td>
									<td align="center"><span class="semibold">30 Abr</span> 09:15</td>
								</tr>
								<tr>
									<td><span class="label label-danger">Agotado</span></td>
									<td>USB Kingston 32GB</td>
									<td align="center">0 unidades</td>
									<td align="center"><span class="semibold">29 Abr</span> 14:50</td>
								</tr>
	                        </table>
	                    </div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->
							<!--.box-typical-dashboard-->
	            </div><!--.col-->
	        </div>
	    </div><!--.container-fluid-->
	</div>

	<!---------------         PAGE CONTENT              --------------------------->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script type="text/javascript" src="js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function() {
			$('.panel').lobiPanel({
				sortable: true
			});
			$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
				$('.dahsboard-column').matchHeight();
			});

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						},
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>