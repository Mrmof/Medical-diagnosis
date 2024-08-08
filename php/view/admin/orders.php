<?php
	include '../../../app/app.php';
	include PROJECT_ROOT.'/php/view/admin/includes/text.php';
	include PROJECT_ROOT.'/php/model/function.php';
	signinvalitdation();
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
		<title>Vivo Admin Template - Admin Dashboard</title>


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
			<nav class="sidebar-wrapper">

				<!-- Sidebar brand starts -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="assets/images/logo.svg" alt="Vivo Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand starts -->

				<!-- Sidebar menu starts -->
					<?php include(PROJECT_ROOT.'/php/view/admin/includes/sidebar.php') ?>
				<!-- Sidebar menu ends -->

			</nav>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
					<?php include(PROJECT_ROOT.'/php/view/admin/includes/header.php') ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Service List</div>
										<!-- <div class="ml-auto">
											<a href="view-cart.html" class="btn btn-dark"><span class="badge shade-red me-2">2</span>View
												Cart</a>
										</div> -->
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<?=viewappliedservice();?>
											<!-- <div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img1.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Nicoise Salad</h5>
														<div class="product-price">
															<span class="disount-price">$19</span>
															<span class="actucal-price">$27</span>
															<span class="off-price">30% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate1 rating-stars"></div>
															<div class="total-ratings">2750</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img8.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Augustin Salad</h5>
														<div class="product-price">
															<span class="disount-price">$18</span>
															<span class="actucal-price">$22</span>
															<span class="off-price">27% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate2 rating-stars"></div>
															<div class="total-ratings">3629</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img9.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Bagatelle Salad</h5>
														<div class="product-price">
															<span class="disount-price">$15</span>
															<span class="actucal-price">$20</span>
															<span class="off-price">10% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate3 rating-stars"></div>
															<div class="total-ratings">5329</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img2.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Salade Lyonnaise</h5>
														<div class="product-price">
															<span class="disount-price">$21</span>
															<span class="actucal-price">$30</span>
															<span class="off-price">15% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate4 rating-stars"></div>
															<div class="total-ratings">240</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img3.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Cendrillon Salad</h5>
														<div class="product-price">
															<span class="disount-price">$9</span>
															<span class="actucal-price">$12</span>
															<span class="off-price">20% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate3 rating-stars"></div>
															<div class="total-ratings">7632</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img4.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Espagnole Salad</h5>
														<div class="product-price">
															<span class="disount-price">$27</span>
															<span class="actucal-price">$32</span>
															<span class="off-price">33% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate4 rating-stars"></div>
															<div class="total-ratings">4587</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
												<div class="product-card">
													<img class="product-card-img-top" src="assets/images/food/img5.jpg" alt="Bootstrap Gallery">
													<div class="product-card-body">
														<h5 class="product-title">Grande Duchesse</h5>
														<div class="product-price">
															<span class="disount-price">$25</span>
															<span class="actucal-price">$35</span>
															<span class="off-price">33% Off</span>
														</div>
														<div class="product-rating">
															<div class="rate6 rating-stars"></div>
															<div class="total-ratings">35</div>
														</div>
														<div class="product-description">
															Xuartz movement, manufactured by Zitizen watch co., ltd.
														</div>
														<div class="product-actions">
															<button class="btn btn-success addToCart">Add to Cart</button>
														</div>
													</div>
												</div>
											</div> -->
										</div>
										<!-- Row end -->

									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">
						<span>© Bootstrap Gallery 2023</span>
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

		<!-- Rating JS -->
		<script src="assets/vendor/rating/raty.js"></script>
		<script src="assets/vendor/rating/raty-custom.js"></script>

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

		<!-- Product Js -->
		<script src="assets/js/product.js"></script>

	</body>

</html>