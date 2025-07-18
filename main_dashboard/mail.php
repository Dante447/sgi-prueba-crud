<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Mail</title>

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
<link rel="stylesheet" href="css/lib/summernote/summernote.css">
<link rel="stylesheet" href="css/separate/pages/editor.min.css">
<link rel="stylesheet" href="css/separate/pages/mail.min.css">
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


			<li class="magenta opened">
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
			<section class="box-typical mail-box">
				<header class="mail-box-header">
					<div class="mail-box-header-left">
						<button type="button" class="btn write">Write</button>
						<div class="btns-icon">
							<button type="button" class="btn-icon"><i class="font-icon font-icon-refresh-2"></i></button>
							<button type="button" class="btn-icon"><i class="font-icon font-icon-check-circle"></i></button>
							<button type="button" class="btn-icon"><i class="font-icon font-icon-folder"></i></button>
						</div>
					</div>
					<div class="mail-box-header-right">
						<ul class="mail-box-header-nav">
							<li><a href="#" class="active">Mails</a></li>
							<li><a href="#">Contacts</a></li>
							<li><a href="#">Files</a></li>
						</ul>
						<div class="search">
							<input type="text" class="form-control form-control-rounded" placeholder="Search"/>
							<button type="submit" class="btn-icon"><i class="font-icon font-icon-search"></i></button>
						</div>
					</div>
				</header><!--.mail-box-header-->

				<section class="mail-box-list  scrollable-block">
					<div class="mail-box-item selected-line">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-1.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Dropbox</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">294</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">4 reasons to upgrade to Dropbox Pro</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item selected-line red">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-3.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Naomi Gibson</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item selected">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-2.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Oakley Bradford</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/avatar-1-64.png" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Сегодня, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/avatar-2-64.png" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Timothy Cooke</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-4.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Savanna Carney</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/avatar-3-64.png" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-3.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Elena Hogan</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-2.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Samson Bowen</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/avatar-1-64.png" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/avatar-2-64.png" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Micah West</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">11</span></div>
												<div class="tbl-cell tbl-cell-status">
													<div class="online"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/photo-64-4.jpg" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Abril Delaney</div>
												<div class="tbl-cell tbl-cell-new"><span class="label label-pill label-danger">3</span></div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents</div>
						</div>
						<div class="mail-box-item-content">
							<div class="attach">
								<i class="font-icon-clip"></i>
							</div>
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->

					<div class="mail-box-item">
						<div class="mail-box-item-header">
							<div class="mail-box-item-photo">
								<img src="img/avatar-3-64.png" alt="">
							</div>
							<div class="tbl mail-box-item-head-tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="tbl mail-box-item-user-tbl">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Facebook</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
								</div>
							</div>
							<div class="mail-box-item-title">Required documents an example of a long message subjects that did not fit the full width</div>
						</div>
						<div class="mail-box-item-content">
							<div class="txt">Hi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more conHi Bakanovsky, Get more space – and more con</div>
						</div>
					</div><!--.mail-box-item-->
				</section><!--.mail-box-list-->

				<section class="mail-box-work-area">
					<div class="mail-box-work-area-in">
						<header class="mail-box-work-area-header">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="img/photo-64-2.jpg" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name">Matt McGill</div>
													<span class="letters-num">3 mails</span>
													<a href="#">Jaeden Gates</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-btns">
										<button type="button" class="btn-icon"><i class="font-icon font-icon-fire"></i></button>
										<button type="button" class="btn-icon"><i class="font-icon font-icon-folder"></i></button>
										<button type="button" class="btn-icon"><i class="font-icon font-icon-trash"></i></button>
										<button type="button" class="btn-icon"><i class="font-icon font-icon-star"></i></button>
									</div>
								</div>
							</div>
						</header><!--.mail-box-work-area-header-->

						<div class="mail-box-work-area-cont  scrollable-block">
							<div class="mail-box-letter-item">
								<div class="mail-box-letter-item-in">
									<div class="mail-box-letter-item-photo">
										<img src="img/photo-64-2.jpg" alt="">
									</div>
									<div class="mail-box-letter-item-header tbl">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-name">Matt McGill</div>
											<div class="tbl-cell tbl-cell-date">04.07.15</div>
										</div>
									</div>
									<div class="mail-box-letter-item-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio</div>
								</div>
							</div><!--.mail-box-letter-item-->
							<div class="mail-box-letter-item">
								<div class="mail-box-letter-item-in">
									<div class="mail-box-letter-item-photo">
										<img src="img/photo-64-2.jpg" alt="">
									</div>
									<div class="mail-box-letter-item-header tbl">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-name">Matt McGill</div>
											<div class="tbl-cell tbl-cell-date">04.07.15</div>
										</div>
									</div>
									<div class="mail-box-letter-item-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio</div>
								</div>
							</div><!--.mail-box-letter-item-->

							<div class="mail-box-letter-opened">
								<div class="mail-box-letter-opened-header tbl">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Maximo Ochoa</div>
										<div class="tbl-cell tbl-cell-date">Today, 14:55</div>
										<div class="tbl-cell tbl-cell-action">
											<button type="button"><i class="font-icon-answer"></i></button>
										</div>
									</div>
								</div><!--.mail-box-letter-opened-header-->
								<div class="text-block text-block-typical">
									<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
									<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
								</div>

								<div class="mail-box-letter-files">
									<div class="mail-file pdf">
										<p><a href="#">document.pdf</a></p>
										<p>230 Kb</p>
									</div>
									<div class="mail-file doc">
										<p><a href="#">document.doc</a></p>
										<p>230 Kb</p>
									</div>
									<div class="mail-file xls">
										<p><a href="#">document.xls</a></p>
										<p>230 Kb</p>
									</div>
									<div class="mail-file img">
										<p><a href="#">document.jpg</a></p>
										<p>230 Kb</p>
									</div>
								</div><!--.mail-box-letter-files-->

								<div class="summernote-theme-1">
									<div class="summernote">
										<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
										<p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
									</div>
								</div>
								<div class="chat-area-bottom">
									<button type="submit" class="btn btn-rounded float-left">Send</button>
									<button type="reset" class="btn btn-rounded btn-default float-left">Clear</button>
									<div class="dropdown dropdown-typical dropup attach">
										<a class="dropdown-toggle dropdown-toggle-txt"
										   id="dd-chat-attach"
										   data-target="#"
										   data-toggle="dropdown"
										   aria-haspopup="true"
										   aria-expanded="false">
											<span class="lbl">Attach</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-photo"></i>Photo</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-video"></i>Video</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-sound"></i>Audio</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Document</a>
											<a class="dropdown-item" href="#"><i class="font-icon font-icon-earth"></i>Map</a>
										</div>
									</div>
								</div><!--.chat-area-bottom-->
							</div><!--.mail-box-letter-opened-->
						</div><!--.mail-box-work-area-cont-->
					</div><!--.main-box-work-area-in-->
				</section><!--.mail-box-work-area-->
			</section><!--.mail-box-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->


			<!---------------        PAGE CONTENT              --------------------------->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/summernote/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.summernote').summernote();
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>