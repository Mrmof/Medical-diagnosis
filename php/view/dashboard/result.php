<?php
	include $_SERVER["APP"];
	include WEB_ROOT.'php/view/admin/includes/text.php';
	include WEB_ROOT.'php/model/config.php';
	include WEB_ROOT.'php/model/user.php';
	include WEB_ROOT.'php/model/condition.php';
	User::authenticate();
	$condition = new Condition();
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

	</head>

	<body>

		<!-- Loading wrapper start -->
		<!-- <div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div> -->
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<?php include(WEB_ROOT.'/php/view/dashboard/includes/sidebar.php') ?>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<?php include(WEB_ROOT.'/php/view/dashboard/includes/header.php') ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-md-6 offset-md-3 col-12">
								<div class="card">
									
									<div class="mt-3">
										<h1 class="text-center">Medical Result</h1>
									</div>
										<?php 
											if(isset($_SESSION['medicalCondition']) && $_SESSION['medicalCondition'] != 'No medical conditions found'){
											?>
										<div class="card-body">
											<h2 class="text-success ">
												<?php echo $_SESSION['medicalCondition']['conditionName'];?>
											</h2>
											<div class="card-title">Treatment</div>
											<p><?php 
												echo nl2br($_SESSION['medicalCondition']['treatment']);
											?></p>
										</div>
									<?php }else{?>
										<div class="card-body ">
											<h4 class="text-success">
													<?php echo $_SESSION['medicalCondition'];?>
											</h4>
											<div class="card-title text-center mt-3">Request an Appointment</div>
											<a href="appointment.php" class="btn btn-primary mx-auto d-block w-50 mt-3">Cick to book an appointment</a>
										</div>
									<?php }?>
								</div>
							</div>
						</div>
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
				
				<!-- Modal View Row -->
				<div class="modal modal-dark fade" id="viewRow" tabindex="-1" aria-labelledby="viewRowLabel"
					style="display: none;" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="viewRowLabel">View Details</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<!-- Row start -->
								<div class="row">
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Customer Name</h6>
											<h5>Garrett Winters</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Customer ID</h6>
											<h5>#VIVO00763</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Contact</h6>
											<h5>067-676-98320</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Amount Spent</h6>
											<h5>$2570.00</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Last Login</h6>
											<h5>21/11/2021</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Coupons Used</h6>
											<h5>7</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Total Orders</h6>
											<h5>95</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Cancelled Orders</h6>
											<h5>2</h5>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-6">
										<div class="customer-card">
											<h6>Reviews</h6>
											<h5>21</h5>
										</div>
									</div>
								</div>
								<!-- Row end -->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="viewDelete" tabindex="-1" aria-labelledby="verticallyCenteredLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="verticallyCenteredLabel">Delete User</h5>
									
								</div>
								<div class="modal-body">
									<p>Do you wish to delete this user?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
									<a href=""  class="btn btn-success">Delete</a>
								</div>
							</div>
						</div>
					</div>

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

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

		<!-- Product Js -->
		<script src="assets/js/product.js"></script>
		<script>
			function collectid(id){
				var deletebutton = document.getElementById('deletebutton');
				deletebutton.setAttribute('href', 'http://localhost/medical diagnosis/php/controller/deletecondition.php?id='+id);
			}
		</script>

	</body>

</html>