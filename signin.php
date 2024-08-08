<?php 
 include $_SERVER['APP'];
 include WEB_ROOT.'includes/details.php';
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$companyName?> - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  <?php include WEB_ROOT.'includes/header.php';?>
  <!-- End Header -->


  <main id="main">

  <section id="contact" class="contact mt-5">
      <div class="container">

        <div class="section-title">
          <h2>Sign In</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-lg-4 offset-lg-4 mt-lg-0">
            <small>
                <?php 
                 if (isset($_SESSION['signin_error'])) {
                    echo $_SESSION['signin_error'];
                    unset($_SESSION['signin_error']);
                 }
                ?>
              </small>
            <form action="<?=WEB_URL?>/php/controller/signin.php" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="identity" id="email" placeholder="Your Mat No. or email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Subject" required>
              </div>
              <div class="text-center mt-2"><button type="submit">Sign in</button></div>
            </form>
            <small>Not a member? <a href="signup.php" class="btn fs-6">Sign up</a></small>

          </div>

        </div>

      </div>
    </section>


    

   

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include WEB_ROOT.'includes/footer.php';?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>