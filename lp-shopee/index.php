<!--Landing page-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shopee</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon"> 
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> <!--đổi thành shopee icon-->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0"> 
        <h1>Shopee<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#product">Best Buy</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-login" href="login.php">Login</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Bring the world<br>to You</h2>
          <p data-aos="fade-up" data-aos-delay="100">For You & By You</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="login/login.php" class="btn-login">Shopping Now</a>
            <a href="https://www.youtube.com/watch?v=K98D34HVM9k" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p>
                Shopee is the leading e-commerce platform in Southeast Asia and Taiwan. 
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i>Our Purpose<br> We believe in the transformative power of technology and want to change the world for the better by providing a platform to connect buyers and sellers within one community.</li>
                <li><i class="bi bi-check2-all"></i>Our Positioning<br> To Internet users across the region, Shopee offers a one-stop online shopping experience that provides a wide selection of products, a social community for exploration, and seamless fulfilment services.</li>
                <li><i class="bi bi-check2-all"></i>Our Personality<br> To define who we are - how we talk, behave or react to any given situation - in essence, we are Simple, Happy and Together. These key attributes are visible at every step of the Shopee journey.</li>
              </ul>
              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=K98D34HVM9k" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Shopee?</h3>
              <p>
                Shopee is the leading e-commerce platform in Southeast Asia and Taiwan. Launched in 2015, it is a platform tailored for the region, providing customers with an easy, secure and fast online shopping experience through strong payment and fulfillment support. We believe online shopping should be accessible, easy and enjoyable. This is the vision Shopee aspires to deliver on the platform, every single day.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>We commit</h4>
                  <p>...</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>We stay humble</h4>
                  <p>...</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>We serve</h4>
                  <p>...</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= product ======= -->
    <section id="product" class="product">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Best Buy</h2>
          <p>Check Our <span>Best Buy</span></p>
        </div>

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="product-starters">

            <div class="tab-header text-center">
              <p>Product</p>
              <h3>Electronic</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 product-item">
                <a href="assets/img/product/esp32.png" class="glightbox"><img src="assets/img/product/esp32.png" class="product-img img-fluid" alt=""></a>
                <h4>ESP32</h4>
                <p class="ingredients">
                  
                </p>
                <p class="price">
                  0.000đ
                </p>
              </div><!-- product Item -->

              <div class="col-lg-4 product-item">
                <a href="assets/img/product/esp32.png" class="glightbox"><img src="assets/img/product/esp32.png" class="product-img img-fluid" alt=""></a>
                <h4>ESP32</h4>
                <p class="ingredients">
                  
                </p>
                <p class="price">
                0.000đ
                </p>
              </div><!-- product Item -->

              <div class="col-lg-4 product-item">
                <a href="assets/img/product/esp32.png" class="glightbox"><img src="assets/img/product/esp32.png" class="product-img img-fluid" alt=""></a>
                <h4>ESP32</h4>
                <p class="ingredients">
          
                </p>
                <p class="price">
                0.000đ
                </p>
              </div><!-- product Item -->

            

            </div>
          </div>

   
    <section id="team" class="teams section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Team</h2>
          
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="team-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="team-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Phần nào khó để nghiên cứu sau
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Huỳnh Hoàng Hà</h3>
                      <h4>Master &amp; Teacher</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/team/teacher.png" class="img-fluid team-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End team item -->

            <div class="swiper-slide">
              <div class="team-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="team-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Sáng tạo và học hỏi là chìa khóa của sự thành công
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Lê Quốc Thái</h3>
                      <h4>Student</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/team/student-1.jpg" class="img-fluid team-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End team item -->

            <div class="swiper-slide">
              <div class="team-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="team-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Mục tiêu dự án là thiết kế web bán hàng thân thiện người dùng có giao diện giống Shopee
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Trần Nguyễn Khánh Hoàng</h3>
                      <h4>Student</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/team/student-2.png" class="img-fluid team-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End team item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End teams Section -->


   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.485398611125!2d106.7693381759283!3d10.85063765781868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752763f23816ab%3A0x282f711441b6916f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTxrAgcGjhuqFtIEvhu7kgdGh14bqtdCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1690204414037!5m2!1svi!2s" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Đại học Sư Phạm Kỹ Thuật TPHCM, Võ Văn Ngân, Linh Chiểu, Thủ Đức, Thành phố Hồ Chí Minh</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>ptchc@hcmute.edu.vn</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>(+84 - 028) 38968641</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 7AM - 21PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Đại học Sư Phạm Kỹ Thuật TPHCM, <br>
              Võ Văn Ngân, Linh Chiểu, Thủ Đức, Thành phố Hồ Chí Minh <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> (+84 - 028) 38968641<br>
              <strong>Email:</strong> ptchc@hcmute.edu.vn<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> 7AM - 21PM<br>
              <strong>Sunday:</strong> Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/quocthai.le0310" class="facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SPKT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/quocthai.le0310">Lê Quốc Thái</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>