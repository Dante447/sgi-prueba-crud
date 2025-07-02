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
<link rel="stylesheet" href="css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
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
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Configuración</h2>
						</div>
					</div>
				</div>
			</header>

			<div class="container">


				<div class="row gutters-sm">
				  <div class="col-md-4 d-none d-md-block">
					<div class="card">
					  <div class="card-body m-0">
						<nav class="nav flex-column nav-pills nav-gap-y-1 justify-content-center">
							<ul class="nav flex-column nav-pills nav-gap-y-1" role="tablist">
								<li class="nav-item ">
								  <a href="#profile" data-toggle="tab" class="nav-link has-icon active same-width"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 5 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Perfil</a>
								</li>

								<li class="nav-item">
								  <a href="#security" data-toggle="tab" class="nav-link has-icon same-width"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Seguridad</a>
								</li>
								<li class="nav-item">
								  <a href="#notification" data-toggle="tab" class="nav-link has-icon same-width"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="butt" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Notificaciones</a>
								</li>
							  </ul>
						</nav>
					  </div>
					</div>
				  </div>
				  <div class="col-md-8">
					<div class="card">
						<div class="card-body tab-content">
							<div class="tab-pane active" id="profile">
								<h6>YOUR PROFILE INFORMATION</h6>
							<!-- Sección de foto de perfil -->
								<div class="row align-items-center mb-4">
									<div class="col-md-3 text-center">
										<img src="img/avatar-1-128.png" alt="Foto de Perfil" class="rounded-circle" width="120" height="120" id="previewFoto">
										<input type="file" class="form-control mt-2" accept="image/*" id="fotoPerfilInput" onchange="previewImagen(this)">
									</div>
									<div class="col-md-9">
										<ul class="text-muted small">
											<li><b>Tamaño mínimo:</b> 400x400px</li>
											<li><b>Peso máximo:</b> 2MB</li>
											<li><b>Contenido:</b> Tu rostro o logo de la compañía</li>
										</ul>
									</div>
								</div>
							<hr>

							<!-- Formulario de datos -->
							<form>
								<div class="form-group">
								<label for="nombres">Nombres</label>
								<input type="text" class="form-control" id="nombres" placeholder="Ingrese sus nombres">
								</div>

								<div class="form-group">
								<label for="apellidos">Apellidos</label>
								<input type="text" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos">
								</div>

								<div class="form-group">
								<label for="tipoUsuario">Tipo de Usuario</label>
								<select class="form-control" id="tipoUsuario">
									<option value="">Seleccione...</option>
									<option value="empleado">Empleado</option>
									<option value="gerente">Gerente</option>
								</select>
								</div>

								<div class="form-group">
								<label for="rolUsuario">Rol Asignado</label>
								<select class="form-control" id="rolUsuario">
									<option value="">Seleccione un rol</option>
									<option value="admin">Administrador</option>
									<option value="inventario">Inventario</option>
									<option value="ventas">Ventas</option>
									<!-- Agrega más roles según tus necesidades -->
								</select>
								</div>

								<button type="submit" class="btn btn-primary">Guardar Cambios</button>
								<button type="reset" class="btn btn-light">Cancelar</button>
							</form>
						</div>
					
						<div class="tab-pane" id="security">
						  <h6>Seguridad</h6>
						  <hr>
						  <form>
							<div class="form-group">
							  <label class="d-block">Cambiar contraseña</label>
							  <input type="text" class="form-control" placeholder="introduce tu antigua contraseña">
							  <input type="text" class="form-control mt-1" placeholder="Nueva contraseña">
							  <input type="text" class="form-control mt-1" placeholder="Confirma la nueva contraseña">
							</div>
						  </form>
						  <hr>

						  <form>
						  </form>
						</div>
						<div class="tab-pane" id="notification">
						  <h6>NOTIFICATION SETTINGS</h6>
						  <hr>
						  <form>
							<div class="form-group">
								<h6>Canales de notificación</h6>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="notifEmail" checked>
								  <label class="form-check-label" for="notifEmail">Correo electrónico</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="notifApp" checked>
								  <label class="form-check-label" for="notifApp">Notificaciones en la aplicación</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="notifSMS">
								  <label class="form-check-label" for="notifSMS">SMS</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="notifWhatsApp">
								  <label class="form-check-label" for="notifWhatsApp">WhatsApp</label>
								</div>
							  </div>
							  
							  <div class="form-group mb-4">
								<h6>Tipos de notificación</h6>
								<ul class="list-group list-group-sm">
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Cambios en el perfil
									  <div class="custom-control custom-switch ml-4">
										<input type="checkbox" class="custom-control-input" id="notifPerfil" checked>
										<label class="custom-control-label" for="notifPerfil"></label>
									  </div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Recordatorios importantes
									  <div class="custom-control custom-switch ml-4">
										<input type="checkbox" class="custom-control-input" id="notifRecordatorios" checked>
										<label class="custom-control-label" for="notifRecordatorios"></label>
									  </div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Notificaciones del sistema
									  <div class="custom-control custom-switch ml-4">
										<input type="checkbox" class="custom-control-input" id="notifSistema">
										<label class="custom-control-label" for="notifSistema"></label>
									  </div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Nuevas asignaciones
									  <div class="custom-control custom-switch ml-4">
										<input type="checkbox" class="custom-control-input" id="notifAsignaciones">
										<label class="custom-control-label" for="notifAsignaciones"></label>
									  </div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Mensajes o comentarios
									  <div class="custom-control custom-switch ml-4">
										<input type="checkbox" class="custom-control-input" id="notifMensajes" checked>
										<label class="custom-control-label" for="notifMensajes"></label>
									  </div>
									</li>
								  </ul>
								  
							  </div>
							  
							  <div class="form-group mb-4">
								<label for="frecuenciaNotif">Frecuencia de notificación</label>
								<select class="form-control" id="frecuenciaNotif">
								  <option value="inmediata">Inmediatamente</option>
								  <option value="diaria">Resumen diario</option>
								  <option value="semanal">Resumen semanal</option>
								  <option value="nunca">Nunca</option>
								</select>
							  </div>
							  
							  <div class="form-group form-check mb-4">
								<input type="checkbox" class="form-check-input" id="modoSilencioso">
								<label class="form-check-label" for="modoSilencioso">Activar modo silencioso por 24 horas</label>
							  </div>
							  
							  <button class="btn btn-primary">Guardar preferencias</button>
							  
						  </form>
						</div>
					  </div>
					</div>
				  </div>
				</div>
		  
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


	<!-- Javascript Settings -->

	<script>
		function previewImagen(input) {
		  const file = input.files[0];
		  if (file) {
			const reader = new FileReader();
			reader.onload = function(e) {
			  document.getElementById('previewFoto').src = e.target.result;
			};
			reader.readAsDataURL(file);
		  }
		}
	  </script>
	  



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="js/app.js"></script>
</body>
</html>