<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ayuda</title>

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


	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<!-- Sidebar -->
				<div class="col-sm-3 sidebar container-help">
					<h4>Centro de Ayuda</h4>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a class="li-help" href="#faq">Preguntas Frecuentes</a></li>
						<li><a class="li-help" href="#guia">Guía de Usuario</a></li>
						<li><a class="li-help" href="#glosario">Glosario</a></li>
						<li><a class="li-help" href="#contacto">Soporte</a></li>
					</ul>
					<hr>
					<form class="form">
						<div class="form-group">
							<label for="search">Buscar en ayuda</label>
							<input type="text" class="form-control" id="search" placeholder="Buscar...">
						</div>
					</form>
				</div>
		
				<!-- Main content -->
				<div class="col-sm-9 content container-help">
					<h2>Centro de Ayuda</h2>
					<p>Encuentra aquí toda la información que necesitas para usar el sistema de inventario.</p>
		
					<!-- FAQ -->
					<div id="faq">
						<h3>Preguntas Frecuentes</h3>
						<div class="panel panel-default faq-item ">
							<div class="panel-heading">¿Cómo ingreso un nuevo producto?</div>
							<div class="panel-body">
								Ve al módulo de Inventario y haz clic en "Agregar producto". Completa los campos obligatorios y guarda.
							</div>
						</div>
						<div class="panel panel-default faq-item">
							<div class="panel-heading">¿Cómo consultar el historial de movimientos?</div>
							<div class="panel-body">
								Dirígete al menú "Movimientos", filtra por fecha o producto y verás el historial completo.
							</div>
						</div>
						<div class="panel panel-default faq-item">
							<div class="panel-heading">¿Puedo editar productos después de agregarlos?</div>
							<div class="panel-body">
								Sí. En el listado de productos, haz clic en el ícono de editar y realiza los cambios necesarios.
							</div>
						</div>
					</div>
					<hr>
					<!-- Guía de usuario -->
					<div id="guia">
						<h3>Guía Rápida de Usuario</h3>
						<ul>
							<li><a class="li-help" href="#">➤ Cómo registrar productos</a></li>
							<li><a class="li-help" href="#">➤ Cómo realizar movimientos</a></li>
							<li><a class="li-help" href="#">➤ Generar reportes PDF</a></li>
						</ul>
					</div>
					<hr>
		
					<!-- Glosario -->
					<div id="glosario">
						<h3>Glosario de Términos</h3>
						<dl class="dl-horizontal">
							<dt>Stock</dt>
							<dd>Cantidad disponible de un producto en inventario.</dd>
							<dt>Movimiento</dt>
							<dd>Acción de entrada o salida de productos registrada en el sistema.</dd>
							<dt>Nivel mínimo</dt>
							<dd>Cantidad mínima recomendada para un producto antes de solicitar más.</dd>
						</dl>
					</div>
					<hr>
		
					<!-- Contacto -->
					<div id="contacto">
						<h3>¿Aún necesitas ayuda?</h3>
						<p>Escríbenos a <a class="li-help" href="mailto:soporte@tuempresa.com">soporte@tuempresa.com</a> o llena el siguiente formulario:</p>
						<form>
							<div class="form-group">
								<label for="nombre">Nombre:</label>
								<input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
							</div>
							<div class="form-group">
								<label for="correo">Correo electrónico:</label>
								<input type="email" class="form-control" id="correo" placeholder="Tu correo">
							</div>
							<div class="form-group">
								<label for="mensaje">Mensaje:</label>
								<textarea class="form-control" rows="4" id="mensaje" placeholder="Describe tu problema o duda..."></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Enviar consulta</button>
						</form>
					</div>
		
				</div>
			</div>
		</div>
		
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

<script src="js/app.js"></script>
</body>
</html>