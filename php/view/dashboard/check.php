<?php
include $_SERVER["APP"];
include WEB_ROOT . 'php/view/admin/includes/text.php';
include WEB_ROOT . 'php/model/config.php';
include WEB_ROOT . 'php/model/user.php';
User::authenticate();
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
	<title><?= $companyName ?> - User Dashboard</title>


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
		<?php include (WEB_ROOT . '/php/view/dashboard/includes/sidebar.php') ?>
		<!-- Sidebar wrapper end -->

		<!-- *************
				************ Main container start *************
			************* -->
		<div class="main-container">

			<!-- Page header starts -->
			<?php include (WEB_ROOT . '/php/view/dashboard/includes/header.php') ?>
			<!-- Page header ends -->

			<!-- Content wrapper scroll start -->
			<div class="content-wrapper-scroll">

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row">
						<div class="col-sm-12 col-12">
							<div class="card">
								<small class="text-danger">

									<?php 
									if (isset($_SESSION['condition_error'])) {
										echo $_SESSION['condition_error'];
										unset($_SESSION['condition_error']);
									}
									
									?>
								</small>
								<div class="card-body">
									<p class="text-center text-bold fs-3">Medical Diagnosis</p>
									<form action="<?= WEB_URL ?>/php/controller/diagnosis.php" method="post"
										enctype="multipart/form-data">
										<div class="" id="scrollable" data-bs-backdrop="static" data-bs-keyboard="false"
											tabindex="-1" aria-labelledby="scrollableLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-scrollable">
												<div class="modal-content">
													<div class="modal-body">

														<div class="content-wrapper-scroll">

															<!-- Content wrapper start -->
															<div class="content-wrapper" style="height:auto">
																
																<!-- Row start -->
																<div class="row">
																	<div class="col-md-4 offset-md-4">
																		
																		<div class="col-12">
																			<div class="card">
																				<div class="m-0">
																					<label class="form-label">Temperature Level </label>
																					<select name="temperature" id="" class="form-control">
																						<option value="normal">Normal</option>
																						<option value="hot">Hot</option>
																						<option value="veryhot">Very Hot</option>
																					</select>
																				</div>
																		
																			</div>
																		</div>
																		<div class="col-12">
																			<div class="card">
																				<div class="m-0">
																					<label class="form-label">Symptoms</label>
																					<input type="text"
																						class="form-control" name="symptoms"
																						placeholder="Vomit, Headache, cold, e.t.c">
																				</div>
																				
																			</div>
																		</div>
																		<div class="col-12">
																			<div class="card">
																				<div class="m-0">
																					<label class="form-label">Medical History</label>
																					<input type="text"
																						class="form-control" name="medicalHistory"
																						placeholder="Pregnancy, Diabetes, Urinary tract infection, e.t.c">
																				</div>
																				
																			</div>
																		</div>
																		<div class="col-12">
																			<div class="card">
																				<div class="m-0">
																					<label class="form-label">Social History</label>
																					<input type="text"
																						class="form-control" name="socialHistory"
																						placeholder="substance use, e.t.c">
																				</div>
																				
																			</div>
																		</div>
																		<button type="submit" class="btn btn-success w-100">Check</button>
																	</div>
																	
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</form>


								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->

				<!-- App Footer start -->
				<div class="app-footer">
					<span>©  <?=$companyName?>, 2024</span>
				</div>
				<!-- App footer end -->

			</div>
			<!-- Content wrapper scroll end -->

			<!-- Modal View Row -->

			<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="verticallyCenteredLabel" aria-hidden="true" style="background-color: #0000003b">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="d-flex justify-content-center">
								<i class="bi bi-journal-check" style="font-size:50px; color:green"></i>
							</div>
							<p class="text-center">A request for an appointment with a doctor has been sent</p>
							<p class="text-center text-warning py-2"><i class="bi bi-hourglass"></i>Awaiting approval</p>
						</div>
						<!-- <div class="modal-footer">
							<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-success" data-bs-dismiss="modal">Delete</button>
						</div> -->
					</div>
				</div>
			</div>


		</div>
		<!-- *************
				************ Main container end *************
			************* -->

	</div>
	<!-- Page wrapper end -->
	<div id="details">

	</div>
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
	<!-- <script>
			var editbuttons = document.getElementsByClassName('viewRow');
			[...editbuttons].forEach(function(button) {
				button.addEventListener('click', function(){
					var buttonValue = button.getAttribute('data-staff-value');
					console.log(buttonValue);
				})
			});
			
		</script> -->
	<script>
		function closecontrol() {
			document.getElementById('scrollable').setAttribute('class', 'modal fade');
		}
		function openmodalcontrol() {
			document.getElementById('scrollable').setAttribute('class', 'modal fade show d-block');
		}
	</script>
	<!-- <script>
			function showdetails(id) {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("details").innerHTML = this.responseText;
					// console.log(this.responseText);
				}
				};
				xmlhttp.open("GET", "http://localhost/housekeeping/php/controller/showstaffdetails.php?id=" + id, true);
				xmlhttp.send();
			}
			function closemodal() {
				document.getElementById('viewRow').setAttribute('class', 'modal');
			}
			function changestatus(id) {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var statusbutton =document.getElementById('status_'+id);
					statusbutton.innerHTML =this.responseText;
					// console.log(this.responseText);
				}
				};
				xmlhttp.open("GET", "http://localhost/housekeeping/php/controller/changestatus.php?id=" + id, true);
				xmlhttp.send();
			}
		</script> -->
		<script>
			 window.addEventListener('load', function() {
            const params = new URLSearchParams(window.location.search);
            const keepModalOpen = params.get('success_modal');

            // If the query parameter is present, keep the modal open
            if (keepModalOpen === 'true') {
                $('#successModal').modal('show'); // Show your Bootstrap modal
            }
        });
		</script>

</body>

</html>