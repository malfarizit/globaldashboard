<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cladtek Global Dashboard - Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:wght@300" rel="stylesheet">

  <link href="<?php echo base_url(); ?>asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>asset/bootstrap/css/style.css" rel="stylesheet"> 

  <!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  <script type='text/javascript' src=''></script> -->
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
   
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="<?php echo base_url();?>" style="color:white">Cladtek</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#about">What is Dashboard?</a></li>
          <li><a class="nav-link scrollto" href="#services">Our Services</a></li> 
          <li><a class="nav-link scrollto" href="#dashboard">Our Dashboard</a></li> 
          <li><a class="nav-link" href="<?php echo base_url(); ?>Main/V_Login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="header-social-links d-flex align-items-center">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
        <a href="https://id.linkedin.com/company/cladtek" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

    </div>
  </header>

  <section id="hero">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
      <div>
        <h1>We design Dashboard to Provide All Cladtek Information</h1>
        <h2>Interactive Dashboard, Users Can Eeasly See Information from Any Deptartement</h2>
        <a href="<?php echo base_url(); ?>Main/V_Login" class="btn-get-started scrollto">Explore Dashboard</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
      <img src="<?php echo base_url(); ?>asset/img/cladtek.jpg" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

  <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="<?php echo base_url(); ?>asset/img/hero-img.png" class="img-fluid" width="400" height="100" alt="Chart">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>What is a Dashboard?</h3>
              <p class="fst-italic">
              The main use of a dashboard is to show a comprehensive overview of data from different sources. Dashboards are useful for monitoring, measuring, and analyzing relevant data in key areas.
              </p>
              <p>
              Dashboards are important because they provide a platform for people to make better, more informed, data-driven decisions. Since theyre dynamic, interactive, and show near real-time data, they help you get a more precise, in-the-moment understanding of whats happening in the world around you and navigate rapid, sometimes difficult changes.
              </p>
              <p class="fst-italic">tableau</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Services</h2>
          <!-- <p>We have various dashboards from various departments at Cladtek.</p> -->
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bi bi-lock-fill"></i></div>
              <h4 class="title">Secure System</h4>
              <p class="description">We secure the system with various types, so that we can guarantee that each department's data is safe.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bi bi-database-fill-check"></i></div>
              <h4 class="title">Smart Storing System</h4>
              <p class="description">We provide a system that can automatically collect data from various sources.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bi bi-check2-circle"></i></div>
              <h4 class="title">Automatic System</h4>
              <p class="description">Everything is automated, collecting data, sending emails, refreshing data and more</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bi bi-bar-chart-line-fill"></i></div>
              <h4 class="title">Great Visual</h4>
              <p class="description">We try our best to convey information in as much detail as possible and have a beautiful and user-friendly interface for a wide range of users.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="dashboard" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Dashboard</h2>
          <p>We have various dashboards from various departments at Cladtek.</p>
        <div class="row">
            <div class="text-center">
                <a class="btn btn-primary mt-3 mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="">Previous</i>
                </a>
                <a class="btn btn-primary mt-3 mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="">Next</i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-shield-fill-plus" style="font-size: 100px; color:#DF2E38"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Quality, Healthy, Safety and Environment</h4>
                                            <p class="card-text">
                                              <ul class="list-group">
                                                <li class="list-group-item">Leading & Lagging Indicator</li>
                                                <li class="list-group-item">IMS</li>
                                                <li class="list-group-item">SQD</li>
                                                <li class="list-group-item">Projects Quality</li>
                                                <li class="list-group-item">Operations Quality</li>
                                              </ul>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-check-circle-fill" style="font-size: 100px; color:#539165"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Operation Excellent</h4>
                                            <p class="card-text">
                                            <ul class="list-group">
                                              <li class="list-group-item">In-Shield</li>
                                              <li class="list-group-item">Improvement Tracker</li>
                                              <li class="list-group-item">Automation</li>
                                              <li class="list-group-item">Design</li>
                                            </ul>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-people-fill" style="font-size: 100px; color:#3F497F"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">People and Culture</h4>
                                            <p class="card-text">
                                            <ul class="list-group">
                                              <li class="list-group-item">HR</li>
                                              <li class="list-group-item">L&D</li>
                                              <li class="list-group-item">ESG</li>
                                              <li class="list-group-item">M&B</li>
                                            </ul>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-buildings-fill" style="font-size: 100px; color:#F7C04A"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Operations</h4>
                                            <p class="card-text">
                                            <ul class="list-group">
                                              <li class="list-group-item">Production</li>
                                              <li class="list-group-item">Maintenance</li>
                                            </ul>
                                            </p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-code" style="font-size: 100px; color:#3E54AC"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">IT & Digital</h4>
                                            <p class="card-text">
                                            <ul class="list-group">
                                              <li class="list-group-item">Infrastructure</li>
                                              <li class="list-group-item">EPICOR</li>
                                              <li class="list-group-item">COR</li>
                                              <li class="list-group-item">Programmer</li>
                                            </ul>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-cash" style="font-size: 100px; color:#4E6E81"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Finance</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-gear-fill" style="font-size: 100px; color:#2B3467"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Engineering</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bi bi-wrench" style="font-size: 100px; color:#4D455D"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Projects</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <i class="bx bx-world" style="font-size: 100px; color:#5D9C59"></i>
                                        <div class="card-body">
                                            <h4 class="card-title">Deptartemental KPIS</h4>
                                            <p class="card-text">
                                            <ul class="list-group">
                                              <li class="list-group-item">Cladtek Arab</li>
                                              <li class="list-group-item">Cladtek Batam</li>
                                              <li class="list-group-item">Cladtek Brazil</li>
                                              <li class="list-group-item">Cladtek Singapore</li>
                                              <li class="list-group-item">Cladtek UAE</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CLADTEK GLOBAL</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <script src="<?php echo base_url(); ?>asset/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/php-email-form/validate.js"></script>

  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>

</body>

</html>