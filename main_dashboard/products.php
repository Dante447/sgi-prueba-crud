<?php

include 'config/config.php';



// Inicializamos variables para evitar errores si no hay resultados
$productos = [];
$error_message = null;

try {
    // consulta SQL para obtener los productos
    // JOIN con categorias y proveedores para obtener sus nombres
$sql = "SELECT 
            p.id_producto,
            p.nombre AS nombre_producto,
            p.cantidad_disponible,
            p.precio AS precio_unitario,
            pr.nombre_proveedor,
            c.nombre_categoria,
            t.fecha_ingreso
        FROM productos p
        LEFT JOIN proveedores pr ON p.id_proveedor = pr.id_proveedor
        LEFT JOIN categorias c ON p.id_categoria = c.id_categorias
        LEFT JOIN (
            SELECT id_producto, MAX(fecha) AS fecha_ingreso
            FROM transacciones
            WHERE tipo_transaccion = 'entrada'
            GROUP BY id_producto
        ) t ON p.id_producto = t.id_producto
        ORDER BY p.id_producto ASC";


    $stmt = $pdo->query($sql);
    $productos = $stmt->fetchAll();

} catch (\PDOException $e) {
    // Capturamos cualquier error de la base de datos
    $error_message = "Error al obtener los productos: " . $e->getMessage();
    // En un entorno real, registrarías este error en un archivo de log
    // y mostrarías un mensaje más amigable al usuario.
}

// Obtener categorías
$stmtCat = $pdo->query("SELECT id_categorias, nombre_categoria FROM categorias");
$categorias = $stmtCat->fetchAll();

// Obtener proveedores
$stmtProv = $pdo->query("SELECT id_proveedor, nombre_proveedor FROM proveedores");
$proveedores = $stmtProv->fetchAll();

?>


<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Productos</title>

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
<link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
<link rel="stylesheet" href="css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/separate/main.css">

    <!-- React montado desde carpeta build -->
<script defer src="react/static/js/main.8d89954c.js"></script>

</head>


<body class="with-side-menu theme-side-madison-caribbean">


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

				<li class="magenta opened">
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

		<!---------------        PAGE CONTENT              --------------------------->


	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Productos</h2>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">

				<button type="button" class="btn btn-success mb-3 glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAgregar"> Añadir producto
</button>

                    <div id="buscador-react"></div>
                    <div id="tabla-react"></div>

					<table id="tabla-productos" class="display table table-bordered" cellspacing="0" width="100%">



                                        <!----Modal editar--->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <form id="formEditarProducto" action="controllers/actualizar-modal-form.php" method="POST" class="modal-content">
                                                <form id="formEditarProducto" action="actualizar-modal-form.php" method="POST" class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Editar Producto</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="edit-id">

                                                <label>Nombre</label>
                                                <input type="text" name="nombre" id="edit-nombre" class="form-control mb-2" required>

                                                <label>Cantidad</label>
                                                <input type="number" name="cantidad" id="edit-cantidad" class="form-control mb-2" required>

                                                <label>Precio</label>
                                                <input type="number" name="precio" id="edit-precio" class="form-control mb-2" required>

												<div class="form-group">
    												<label for="proveedorProducto">Proveedor</label>
    												<select class="form-control" name="proveedor" id="edit-proveedor">
        												<?php foreach ($proveedores as $prov): ?>
            												<option value="<?= $prov['id_proveedor']; ?>"><?= $prov['nombre_proveedor']; ?></option>
        												<?php endforeach; ?>
    												</select>
												</div>


												<div class="form-group">
    												<label for="categoriaProducto">Categoría</label>
    												<select class="form-control" name="categoria" id="edit-categoria">
        												<?php foreach ($categorias as $cat): ?>
            												<option value="<?= $cat['id_categorias']; ?>"><?= $cat['nombre_categoria']; ?></option>
        												<?php endforeach; ?>
    												</select>
												</div>

                                            </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>


                                        <!----Modal Eliminar--->
                                        
                                        <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <form id="formEliminar" action="controllers/eliminar-productos.php" method="GET" class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Confirmar Eliminación</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" id="delete-id">
                                                        <p>¿Estás seguro de eliminar este producto?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        
                                        </td>
                                </tr>
                        </tbody>
					</table>

                                                            <!----Modal crear producto--->

<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <form id="formAgregarProducto" action="controllers/crear-producto.php" method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control mb-2" required>

        <label>Cantidad</label>
        <input type="number" name="cantidad" class="form-control mb-2" required>

        <label>Precio</label>
        <input type="number" name="precio" class="form-control mb-2" required>

        <label>Categoría</label>
        <select name="categoria" class="form-control mb-2">
          <?php foreach ($categorias as $cat): ?>
            <option value="<?= $cat['id_categorias']; ?>"><?= $cat['nombre_categoria']; ?></option>
          <?php endforeach; ?>
        </select>

        <label>Proveedor</label>
        <select name="proveedor" class="form-control mb-2">
          <?php foreach ($proveedores as $prov): ?>
            <option value="<?= $prov['id_proveedor']; ?>"><?= $prov['nombre_proveedor']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
  </div>
</div>

				</div>
				
			</section>
		</div><!--.container-fluid-->
	</div>


	<!---------------        PAGE CONTENT              --------------------------->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/datatables-net/datatables.min.js"></script>

	<script>
		$(function() {
			$('#example').DataTable({
				responsive: true
			});
		});
	</script>
<script src="js/app.js"></script>

<script>
$(document).ready(function () {
  $('.btn-editar').on('click', function () {
    $('#edit-id').val($(this).data('id'));
    $('#edit-nombre').val($(this).data('nombre'));
    $('#edit-cantidad').val($(this).data('cantidad'));
    $('#edit-precio').val($(this).data('precio'));


    $('#edit-proveedor').val($(this).data('id_proveedor'));
    $('#edit-categoria').val($(this).data('id_categoria'));
  });
});
</script>




<script>
$(document).ready(function () {
    $('.btn-eliminar').click(function () {
        const id = $(this).data('id');
        $('#delete-id').val(id); 
    });
});
</script>






</body>
</html>