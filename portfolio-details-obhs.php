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
                  <img src="assets/img/projects/obhs/Screenshot (774).png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/obhs/Screenshot (775).png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/obhs/Screenshot (798).png" alt="">
                </div>


                <div class="swiper-slide">
                  <img src="assets/img/projects/obhs/Screenshot (799).png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/obhs/Screenshot (800).png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/obhs/Screenshot (801).png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/projects/obhs/Screenshot (802).png" alt="">
                </div>





              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Project</strong>: OBHS (On board housekeeping service)</li>
                <li><strong>Client</strong>: Indian Railway</li>
                <li><strong>Admin URL</strong>: <a href="https://obhsfb.beatleme.co.in/">Admin</a></li>
                <li><strong>App URL</strong>: <a
                    href="https://play.google.com/store/apps/details?id=com.beatleOBHSFeedback&hl=en_IN">APP</a></li>


            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>OBHS Admin Panel & Mobile App</h2>
              <p>
                The OBHS (On Board Housekeeping Service) Admin Panel and Mobile App is a specialized digital solution
                developed for the Indian Railways to streamline sanitation service monitoring and ensure cleanliness
                onboard trains. This platform enables real-time tracking of housekeeping activities through an intuitive
                admin panel and a mobile application used by onboard staff.
                <br><br>
                Key features of the system include:
              <ul>
                <li><strong>Attendance Tracking:</strong> Housekeeping staff mark attendance directly via the app, with
                  geolocation and timestamp verification to ensure accuracy and authenticity.</li>
                <li><strong>Photo-Based Reporting:</strong> Staff upload before-and-after photos of cleaned areas to
                  provide visual proof of work completed. These reports are accessible to admins for review and quality
                  checks.</li>
                <li><strong>Passenger Feedback:</strong> Passengers can rate cleanliness, provide comments, and share
                  their onboard experience through the app, ensuring continuous service evaluation and improvement.</li>
              </ul>
              <br>
              <strong>Technologies Used:</strong> The platform is developed using <strong>PHP</strong>,
              <strong>Laravel</strong>, <strong>MySQL</strong>, and <strong>Tailwind CSS</strong> to ensure scalable
              backend performance and a clean, responsive user interface.
              <br><br>
              I was responsible for developing backend logic and APIs to support daily attendance logging, photo report
              handling, and feedback collection, including user role management and real-time data synchronization
              between the admin panel and mobile app.
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