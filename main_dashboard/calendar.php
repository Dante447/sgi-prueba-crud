<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Calendario</title>

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
<link rel="stylesheet" href="css/separate/vendor/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="css/lib/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="css/separate/pages/calendar.min.css">
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


			<li class="magenta opened">
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
			<div class="tbl-cell">
				<h2>Calendario</h2>
			</div>
			<div class="box-typical">
				<div class="calendar-page">
					<div class="calendar-page-content">
						<div class="calendar-page-title">Calendar</div>
						<div class="calendar-page-content-in">
							<div id='calendar'></div>
						</div><!--.calendar-page-content-in-->
					</div><!--.calendar-page-content-->

					<div class="calendar-page-side">
						<section class="calendar-page-side-section">
							<div class="calendar-page-side-section-in">
								<div id="side-datetimepicker"></div>
							</div>
						</section>

						<section class="calendar-page-side-section">
							<header class="box-typical-header-sm">Surgery on march 18</header>
							<div class="calendar-page-side-section-in">
								<ul class="exp-timeline">
									<li class="exp-timeline-item">
										<div class="dot"></div>
										<div>10:00</div>
										<div class="color-blue-grey">Name Surname Patient Surgey ACL left knee</div>
									</li>
									<li class="exp-timeline-item">
										<div class="dot"></div>
										<div>10:00</div>
										<div class="color-blue-grey">Name Surname Patient Surgey ACL left knee</div>
									</li>
								</ul>
							</div>
						</section>

						<section class="calendar-page-side-section">
							<header class="box-typical-header-sm">Filters</header>
							<div class="calendar-page-side-section-in">
								<ul class="colors-guide-list">
									<li>
										<div class="color-double green"><div></div></div>
										Appointments
									</li>
									<li>
										<div class="color-double"><div></div></div>
										Meetings
									</li>
									<li>
										<div class="color-double orange"><div></div></div>
										Supervision
									</li>
									<li>
										<div class="color-double red"><div></div></div>
										Surgey
									</li>
									<li>
										<div class="color-double coral"><div></div></div>
										Training
									</li>
								</ul>
							</div>
						</section>
					</div><!--.calendar-page-side-->
				</div><!--.calendar-page-->
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
	                    <i class="font-icon-close-2"></i>
	                </button>
	                <h4 class="modal-title" id="myModalLabel">Upload File</h4>
	            </div>
	            <div class="modal-upload">
	                <div class="modal-upload-cont">
	                    <div class="modal-upload-cont-in">
	                        <div class="tab-content">
	                            <div role="tabpanel" class="tab-pane active" id="tab-upload">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="uploading-container">
	                                        <div class="uploading-container-left">
	                                            <div class="drop-zone">
	                                                <!--
	                                                при перетаскиваении добавляем класс .dragover
	                                                <div class="drop-zone dragover">
	                                                -->
	                                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                                <div class="drop-zone-caption">Drag file to upload</div>
	                                                <span class="btn btn-rounded btn-file">
	                                                    <span>Choose file</span>
	                                                    <input type="file" name="files[]" multiple>
	                                                </span>
	                                            </div>
	                                        </div><!--.uploading-container-left-->
	                                        <div class="uploading-container-right">
	                                            <div class="uploading-container-right-in">
	                                                <h6 class="uploading-list-title">Uploading</h6>
	                                                <ul class="uploading-list">
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                photo.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="25" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 25%;">25%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-page"></i>
	                                                                task.doc
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="50" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 50%;">50%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                dashboard.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="100" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 100%;">100%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">Completed</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                        </div><!--.uploading-container-right-->
	                                    </div><!--.uploading-container-->
	                                </div><!--.modal-upload-body-->
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                    <button type="button" class="btn btn-rounded">Done</button>
	                                </div><!--.modal-upload-bottom-->
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-dropbox">
	                                <div class="upload-dropbox">
	                                    <h3>Upload a file from Dropbox</h3>
	                                    <p>
	                                        Get files your Dropbox account.<br/>
	                                        We play nice. You just need to login.
	                                    </p>
	                                    <button type="button" class="btn btn-rounded">Connect to Dropbox</button>
	                                    <div class="text-muted">We will open a new page to connect your Dropbox account.</div>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-google-drive">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="upload-gd-header">
	                                        <div class="tbl-row">
	                                            <div class="tbl-cell">
	                                                <input type="text" class="form-control form-control-rounded" placeholder="Search"/>
	                                            </div>
	                                            <div class="tbl-cell tbl-cell-btns">
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-photo"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-video"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-sound"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-page"></i>
	                                                </button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="gd-doc-grid">
	                                        <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded">Select</button>
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-yandex-disk">
	                                Yandex Disk
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-box">
	                                Box
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-one-drive">
	                                One drive
	                            </div><!--.tab-pane-->
	                        </div><!--.tab-content-->
	                    </div><!--.modal-upload-cont-in-->
	                </div><!--.modal-upload-cont-->
	                <div class="modal-upload-side">
	                    <ul class="upload-list" role="tablist">
	                        <li class="nav-item">
	                            <a href="#tab-upload" role="tab" data-toggle="tab" class="active">
	                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                <span>Upload</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-dropbox" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-dropbox"></i>
	                                <span>Dropbox</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-google-drive" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-google-drive"></i>
	                                <span>Google Drive</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-yandex-disk" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-yandex-disk"></i>
	                                <span>Yandex Disk</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-box" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-box"></i>
	                                <span>Box</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-one-drive" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-one-drive"></i>
	                                <span>One Drive</span>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><!--.modal-->

	<div class="modal fade" id="upload2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
	                    <i class="font-icon-close-2"></i>
	                </button>
	                <h4 class="modal-title" id="myModalLabel">Upload File</h4>
	            </div>
	            <div class="modal-upload menu-bottom">
	                <div class="modal-upload-cont">
	                    <div class="modal-upload-cont-in">
	                        <div class="tab-content">
	                            <div role="tabpanel" class="tab-pane active" id="tab-upload-2">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="uploading-container">
	                                        <div class="uploading-container-left">
	                                            <div class="drop-zone">
	                                                <!--
	                                                при перетаскиваении добавляем класс .dragover
	                                                <div class="drop-zone dragover">
	                                                -->
	                                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                                <div class="drop-zone-caption">Drag file to upload</div>
	                                                <span class="btn btn-rounded btn-file">
	                                                    <span>Choose file</span>
	                                                    <input type="file" name="files[]" multiple>
	                                                </span>
	                                            </div>
	                                        </div><!--.uploading-container-left-->
	                                        <div class="uploading-container-right">
	                                            <div class="uploading-container-right-in">
	                                                <h6 class="uploading-list-title">Uploading</h6>
	                                                <ul class="uploading-list">
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                photo.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="25" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 25%;">25%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-page"></i>
	                                                                task.doc
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="50" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 50%;">50%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">37% done</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                    <li class="uploading-list-item">
	                                                        <div class="uploading-list-item-wrapper">
	                                                            <div class="uploading-list-item-name">
	                                                                <i class="font-icon font-icon-cam-photo"></i>
	                                                                dashboard.png
	                                                            </div>
	                                                            <div class="uploading-list-item-size">7,5 mb</div>
	                                                            <button type="button" class="uploading-list-item-close">
	                                                                <i class="font-icon-close-2"></i>
	                                                            </button>
	                                                        </div>
	                                                        <progress class="progress" value="100" max="100">
	                                                            <div class="progress">
	                                                                <span class="progress-bar" style="width: 100%;">100%</span>
	                                                            </div>
	                                                        </progress>
	                                                        <div class="uploading-list-item-progress">Completed</div>
	                                                        <div class="uploading-list-item-speed">90KB/sec</div>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                        </div><!--.uploading-container-right-->
	                                    </div><!--.uploading-container-->
	                                </div><!--.modal-upload-body-->
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                    <button type="button" class="btn btn-rounded">Done</button>
	                                </div><!--.modal-upload-bottom-->
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-dropbox-2">
	                                <div class="upload-dropbox">
	                                    <h3>Upload a file from Dropbox</h3>
	                                    <p>
	                                        Get files your Dropbox account.<br/>
	                                        We play nice. You just need to login.
	                                    </p>
	                                    <button type="button" class="btn btn-rounded">Connect to Dropbox</button>
	                                    <div class="text-muted">We will open a new page to connect your Dropbox account.</div>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-google-drive-2">
	                                <div class="modal-upload-body scrollable-block">
	                                    <div class="upload-gd-header">
	                                        <div class="tbl-row">
	                                            <div class="tbl-cell">
	                                                <input type="text" class="form-control form-control-rounded" placeholder="Search"/>
	                                            </div>
	                                            <div class="tbl-cell tbl-cell-btns">
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-photo"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-cam-video"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-sound"></i>
	                                                </button>
	                                                <button type="button">
	                                                    <i class="font-icon font-icon-page"></i>
	                                                </button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="gd-doc-grid">
	                                        <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                         <div class="gd-doc-col">
	                                            <div class="gd-doc">
	                                                <div class="gd-doc-preview">
	                                                    <a href="#">
	                                                        <img src="img/doc.jpg" alt="">
	                                                    </a>
	                                                </div>
	                                                <div class="gd-doc-title">History Class Final</div>
	                                                <div class="gd-doc-date">05/30/2014</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal-upload-bottom">
	                                    <button type="button" class="btn btn-rounded">Select</button>
	                                    <button type="button" class="btn btn-rounded btn-default">Cancel</button>
	                                </div>
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-yandex-disk-2">
	                                Yandex Disk
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-box-2">
	                                Box
	                            </div><!--.tab-pane-->
	                            <div role="tabpanel" class="tab-pane" id="tab-one-drive-2">
	                                One drive
	                            </div><!--.tab-pane-->
	                        </div><!--.tab-content-->
	                    </div><!--.modal-upload-cont-in-->
	                </div><!--.modal-upload-cont-->
	                <div class="modal-upload-side">
	                    <ul class="upload-list" role="tablist">
	                        <li class="nav-item">
	                            <a href="#tab-upload-2" role="tab" data-toggle="tab" class="active">
	                                <i class="font-icon font-icon-cloud-upload-2"></i>
	                                <span>Upload</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-dropbox-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-dropbox"></i>
	                                <span>Dropbox</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-google-drive-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-google-drive"></i>
	                                <span>Google Drive</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-yandex-disk-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-yandex-disk"></i>
	                                <span>Yandex Disk</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-box-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-box"></i>
	                                <span>Box</span>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#tab-one-drive-2" role="tab" data-toggle="tab">
	                                <i class="font-icon font-icon-one-drive"></i>
	                                <span>One Drive</span>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><!--.modal-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="js/lib/moment/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="js/lib/eonasdan-bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="js/lib/fullcalendar/fullcalendar.min.js"></script>
	<script src="js/lib/fullcalendar/fullcalendar-init.js"></script>

<script src="js/app.js"></script>
</body>
</html>