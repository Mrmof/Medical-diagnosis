<?php
	include $_SERVER["APP"];
	include WEB_ROOT.'php/view/admin/includes/text.php';
	include WEB_ROOT.'php/model/config.php';
	include WEB_ROOT.'php/model/user.php';
	include WEB_ROOT.'php/model/appointment.php';
	User::authenticate();
	$user_id = $_SESSION['userid'];
	$userdetails = new User();
	$appointment = new Appointment();

?>
<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Vivo - Responsive Bootstrap 5 Dashboard Template">
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg">
		<link rel="shortcut icon" href="assets/css/sweetalert2.min.css">

		<!-- Title -->
		<title><?=$companyName?> - User Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Animated css -->
		<link rel="stylesheet" href="assets/css/animate.css">

		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

		<!-- Main css -->
		<link rel="stylesheet" href="assets/css/main.min.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

		<!-- tagsCloud Keywords CSS -->
		<link rel="stylesheet" href="assets/vendor/tagsCloud/tagsCloud.css" />

	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
				<?php include(WEB_ROOT.'php/view/dashboard/includes/sidebar.php') ?>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
					<?php include(WEB_ROOT.'php/view/dashboard/includes/header.php') ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-3 col-sm-4 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="sale-details">
										<h5>Name</h5>
										<h3 class="text-blue"><?=$userdetails->userDetails($user_id)['fullname']?></h3>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-4 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="sale-details">
										<h5>Mat. No</h5>
										<h3 class="text-blue"><?=$userdetails->userDetails($user_id)['matNo']?></h3>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-4 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h5>Appointments</h5>
										<h3 class="text-blue"><?=$appointment->countuserappointment($user_id)?></h3>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-4 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr green">
										<i class="bi bi-handbag"></i>
									</div>
									<div class="sale-details">
										<h5>Approved Appointment</h5>
										<h3 class="text-green"><?=$appointment->countapprovedappointment($user_id)?></h3>
									</div>
								</div>
							</div>
							
							
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							
							<!-- <div class="col-xxl-3 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Logs</div>
									</div>
									<div class="card-body">
										<div class="scroll300">
											<div class="logs">
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">New item sold</div>
													<div class="log-time">10:10</div>
												</div>
												<div class="log-list">
													<div class="log-dot yellow"></div>
													<div class="log-title">Notification from bank</div>
													<div class="log-time">05:25</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">Transaction success alert</div>
													<div class="log-time">09:45</div>
												</div>
												<div class="log-list">
													<div class="log-dot red"></div>
													<div class="log-title">Your item has been updated</div>
													<div class="log-time">06:50</div>
												</div>
												<div class="log-list">
													<div class="log-dot green"></div>
													<div class="log-title">New order</div>
													<div class="log-time">12:30</div>
												</div>
												<div class="log-list">
													<div class="log-dot yellow"></div>
													<div class="log-title">Item bought</div>
													<div class="log-time">04:22</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">New sale: Messi Wills</div>
													<div class="log-time">10:10</div>
												</div>
												<div class="log-list">
													<div class="log-dot red"></div>
													<div class="log-title">Order received</div>
													<div class="log-time">12:55</div>
												</div>
												<div class="log-list">
													<div class="log-dot green"></div>
													<div class="log-title">Service information</div>
													<div class="log-time">09:12</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">Message from Wilson</div>
													<div class="log-time">09:27</div>
												</div>
												<div class="log-list">
													<div class="log-dot red"></div>
													<div class="log-title">New item sale: Joy Root</div>
													<div class="log-time">02:39</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">Product update</div>
													<div class="log-time">08:22</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Keywords</div>
									</div>
									<div class="card-body">
										<div id="tagscloud">
											<a href="analytics.html" class="tagc1">Analytics</a>
											<a href="tasks-html" class="tagc2">Tasks</a>
											<a href="index.html" class="tagc3">Sales</a>
											<a href="#" class="tagc4">Bootstrap</a>
											<a href="#" class="tagc1">Scss</a>
											<a href="#" class="tagc2">Bootstrap</a>
											<a href="index.html" class="tagc3">Admin</a>
											<a href="index.html" class="tagc4">Dashboard</a>
											<a href="#" class="tagc1">Creative</a>
											<a href="#" class="tagc2">Rising Stars</a>
											<a href="analytics.html" class="tagc3">BS Admin</a>
											<a href="#" class="tagc4">Top Rated</a>
											<a href="#" class="tagc1">Admin</a>
											<a href="#" class="tagc2">Creative</a>
											<a href="#" class="tagc3">Best Selling</a>
											<a href="#" class="tagc4">Awesome</a>
											<a href="#" class="tagc1">jQuery</a>
											<a href="#" class="tagc2">Hot Under $19</a>
											<a href="tasks.html" class="tagc3">High</a>
											<a href="#" class="tagc4">Low Price</a>
											<a href="#" class="tagc1">Top Selling</a>
											<a href="index.html" class="tagc2">Best Admin</a>
											<a href="#" class="tagc3">Popular</a>
											<a href="#" class="tagc1">Best Sellers</a>
											<a href="ecommerce.html" class="tagc2">eCommerce</a>
											<a href="analytics.html" class="tagc3">Analytics</a>
											<a href="#" class="tagc4">Rising Stars</a>
											<a href="tasks.html" class="tagc1">Crm</a>
											<a href="#" class="tagc2">Sass</a>
											<a href="#" class="tagc3">Template Monster</a>
											<a href="index.html" class="tagc4">Dashboard</a>
											<a href="#" class="tagc1">Admin</a>
											<a href="analytics.html" class="tagc2">Creative</a>
											<a href="#" class="tagc3">Template Monster</a>
											<a href="#" class="tagc4">Theme</a>
											<a href="#" class="tagc1">Dashboard</a>
											<a href="#" class="tagc2">Rising stars</a>
											<a href="#" class="tagc3">Template</a>
											<a href="ecommerce.html" class="tagc4">Top Rated</a>
										</div>
									</div>
								</div>
							</div> -->
						</div>
						<!-- Row end -->

						<!-- Row start -->
						
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">
						<span>© <?=$companyName?>, 2024</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/modernizr.js"></script>
		<script src="assets/js/moment.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/ecommerce/orders-visits.js"></script>
		<script src="assets/vendor/apex/custom/ecommerce/visitors.js"></script>
		<script src="assets/vendor/apex/custom/ecommerce/customers.js"></script>

		<!-- jQcloud Keywords -->
		<script src="assets/vendor/tagsCloud/tagsCloud.js"></script>

		<!-- Vector Maps -->
		<script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
		<script src="assets/vendor/jvectormap/world-mill-en.js"></script>
		<script src="assets/vendor/jvectormap/gdp-data.js"></script>
		<script src="assets/vendor/jvectormap/custom/world-map-markers2.js"></script>

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>
		<script src="assets/js/sweetalert2.min.js"></script>

	</body>

</html>