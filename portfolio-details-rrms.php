<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="portfolio-details-page">

  <?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Project Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Project Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 400,
                  "autoplay": {
                    "delay": 4000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/6.png" alt="">
                </div>



                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/8.png" alt="">
                </div>



                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/rrms/11.png" alt="">
                </div>



              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Project</strong>: RRMS (Running Room Management System)</li>
                <li><strong>Client</strong>: Indian Railways</li>
                <li><strong>Admin URL</strong>: <a href="https://rrms.beatlebuddy.com/">Web</a></li>
                <li><strong>App URL</strong>: <a
                    href="https://play.google.com/store/apps/details?id=com.runningroomsnew&hl=en_IN">Web</a></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Railway Review Management System (RRMS)</h2>
              <p>
                The Railway Review Management System (RRMS) is a comprehensive platform developed to enhance the
                operational efficiency and passenger experience across Indian Railways. The web-based portal is
                primarily used by Division Managers and Location Managers to monitor station-level performance and
                analyze feedback data. It allows passengers to share real-time reviews on cleanliness, electric
                services, staff behavior, and more—ensuring transparency and accountability across departments.
                <br><br>
                In addition to the web system, RRMS also includes a feature-rich mobile application designed
                specifically for railway crew members. The app provides functionalities such as crew booking, meal
                ordering, feedback collection, complaint registration, wakeup call scheduling, meal menu viewing, and
                many more utilities to simplify daily operations and improve service delivery.
                <br><br>
                <strong>Technologies Used:</strong> The system is built using <strong>PHP</strong>,
                <strong>Laravel</strong>, and <strong>MySQL</strong>, ensuring robust backend performance, secure data
                handling, and scalable architecture.
                <br><br>
                I was responsible for writing the backend APIs that power the RRMS mobile app, enabling smooth
                communication between the app and server, and ensuring reliable data synchronization across all modules.
              </p>
            </div>



          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>