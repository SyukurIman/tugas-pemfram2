 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<!-- Template Main CSS File -->
<link href="<?php echo base_url(); ?>assets/css/style3.css" rel="stylesheet">

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1><?php echo $nama;?></h1>
    <p>I'm <span class="typed" data-typed-items="<?php echo $passion; ?>, Freelancer"></span></p>
    <div class="social-links">
      <a href="https://www.instagram.com/ataiman30/" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="https://www.linkedin.com/in/syukuriman/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About</h2>
      <p><?php echo $about; ?></p>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <img src="<?php echo base_url(); ?>assets/img/profile-img.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content">
        <h3><?php echo $passion; ?></h3>
        <p class="fst-italic">
          <?php echo $descPasion; ?>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $birthday; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $phone; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $city; ?></span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $age; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $email; ?></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

  <script src="<?php echo base_url(); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
 
  <script src="<?php echo base_url(); ?>assets/js/main3.js"></script>