<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - Secbyte Technologies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    /* Navbar */
    .navbar-brand img {
      height:90px;
    }

    .navbar .nav-link {
      color: #000;
      font-weight: 500;
      margin: 0 10px;
    }

    .navbar .nav-link:hover, .navbar .nav-link.active {
      color: #f77c00;
    }

    .navbar .btn-outline-warning {
      border: 1px solid #f77c00;
      color: #f77c00;
    }

    .navbar .btn-outline-warning:hover {
      background-color: #f77c00;
      color: #fff;
    }
    .hero-section {
      background-image: url('https://secbytetechnologies.com/wp-content/uploads/2025/05/pexels-photo-607812.jpeg'); /* Replace with your hero background image */
      background-size: cover;
      background-position: center;
      color: white;
      padding: 150px 0;
      text-align: center;
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .service-card {
      transition: all 0.3s ease-in-out;
      border: none;
    }
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    
    @media (min-width: 768px) {
      .service-box img {
        height: 180px;
      }
    }
    
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f6fb;
    }

    .navbar {
      background: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .navbar-brand img {
      height: 90px;
    }

    .nav-link {
      color: #333;
      font-weight: 500;
    }

    .nav-link.active,
    .nav-link:hover {
      color: #f77c00;
    }

    .hero {
      background: url('https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg') no-repeat center center/cover;
      height: 70vh;
      position: relative;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.6);
    }

    .hero .content {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }

    .about-section {
      background: #f9f6fb;
      padding: 60px 0;
    }

    .about-title {
      color: #888;
      font-size: 14px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .about-heading {
      font-weight: 700;
      font-size: 2rem;
    }

    .about-text p {
      color: #333;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 1.8rem;
      }
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f6fb;
    }

    .navbar {
      background: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .navbar-brand img {
      height: 90px;
    }

    .nav-link {
      color: #333;
      font-weight: 500;
    }

    .nav-link.active,
    .nav-link:hover {
      color: #f77c00;
    }

    .hero {
      background: url('https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg') no-repeat center center/cover;
      height: 70vh;
      position: relative;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.6);
    }

    .hero .content {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }

    .about-section {
      background: #f9f6fb;
      padding: 60px 0;
    }

    .about-title {
      color: #888;
      font-size: 14px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .about-heading {
      font-weight: 700;
      font-size: 2rem;
    }

    .about-text p {
      color: #333;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 1.8rem;
      }
    }



    .about-section {
      padding: 60px 0;
    }

    .about-title {
      color: #888;
      font-size: 14px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .about-heading {
      font-weight: 700;
      font-size: 2rem;
    }

    .about-text p {
      color: #333;
      font-size: 16px;
    }

    .join-section {
      background-color: #f4ebf8;
      padding: 60px 20px;
      text-align: center;
    }

    .avatars img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin: 0 5px;
      object-fit: cover;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .join-section h4 {
      font-weight: 600;
      margin-top: 20px;
    }

    .btn-orange {
      background-color: #ff884d;
      border: none;
      color: #fff;
      font-weight: bold;
      padding: 10px 30px;
      margin-top: 20px;
      border-radius: 6px;
    }

    .btn-orange:hover {
      background-color: #e4703b;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 1.8rem;
      }
    }


    .mission-section {
      padding: 60px 0;
    }

    .mission-title {
      color: #888;
      font-size: 14px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .mission-heading {
      font-size: 2rem;
      font-weight: bold;
    }

    .mission-text p {
      color: #333;
    }

    .join-section {
      background-color: #f4ebf8;
      padding: 60px 20px;
      text-align: center;
    }

    .avatars img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin: 0 5px;
      object-fit: cover;
    }

    .btn-orange {
      background-color: #ff884d;
      border: none;
      color: #fff;
      padding: 10px 30px;
      margin-top: 20px;
      border-radius: 6px;
      font-weight: 600;
    }

    .btn-orange:hover {
      background-color: #e4703b;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 1.8rem;
      }

      .mission-heading {
        text-align: center;
      }

      .mission-image {
        margin-top: 30px;
      }
    }

    body {
            font-family: 'Segoe UI', sans-serif;
        }
        .section-heading {
            font-weight: bold;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .sub-heading {
            text-transform: uppercase;
            font-size: 0.9rem;
            color: #333;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .content-text {
            color: #292929;
            line-height: 1.7;
            margin-top: 10px;
        }
        .vision-img {
            border-radius: 10px;
            max-width: 90%;
            height: auto;
        }

         body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }
        .about-section {
            padding: 60px 20px;
            text-align: center;
        }
        .about-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .about-text {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #333;
        }
        .btn-learn {
            margin-top: 20px;
        }
        .image-section {
            padding: 60px 20px;
        }
        .image-section img {
            max-width: 100%;
            border-radius: 10px;
        }




        .section-light {
      background-color: #fff;
      color: #000;
      border-radius: 30px;
      padding: 60px 30px;
    }

    .highlight-button {
      background-color: #ff9040;
      color: #fff;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-weight: 600;
    }

    .highlight-button:hover {
      background-color: #ff7a1e;
    }
    .footer {
      padding: 60px 0;
      background-color: #16091a;
      text-align: center;
      color: #fff;
    }

    .footer h5 {
      font-weight: 600;
      margin-bottom: 20px;
    }

    .footer a {
      color: #fff;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .mission-heading {
      font-size: 38px;
      font-weight: 700;
      color: #000;
    }

    .subheading {
      font-weight: 600;
      color: #000;
    }

    .footer-bottom {
      margin-top: 30px;
      font-size: 14px;
      color: #bbb;
    }

    img.rounded-img {
      border-radius: 25px;
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    
  </style>
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top px-4">
  <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
    <img src="img./Logo.png" alt="" class="me-2">
    Secbyte Technologies Pvt Ltd
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link  fs-5" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active fs-5" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  fs-5" href="service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  fs-5" href="Blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-5" href="contact.php">Contact</a>
      </li>
    </ul>
    <a href="#" class="btn btn-outline-warning ms-3">GET STARTED</a>
  </div>
</nav>


<!-- Hero Section -->
<div class="hero-section">
  <div class="hero-overlay"></div>
  <div class="hero-content px-3">
    <h1>Discover the Story Behind<br>Secbyte Technologies</h1>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
 <!-- Bootstrap Framework CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- ABOUT SECTION -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-lg-6 about-text">
        <div class="about-title">About Us</div>
        <div class="about-heading">Our Company</div>
        <p>Secbyte Technologies has consistently helped clients enhance their digital presence, streamline operations, and safeguard their information, resulting in measurable growth and success.</p>
        <p>With a dedicated team of experts, Secbyte Technologies specializes in delivering innovative solutions tailored to meet our clients’ unique needs and objectives.</p>
      </div>
      <!-- Image -->
      <div class="col-lg-6 text-center">
        <img src="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg" class="img-fluid rounded shadow" alt="Company Work">
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- JOIN SECTION -->
<section class="join-section">
  <div class="avatars mb-3">
    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User1">
    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="User2">
    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User3">
    <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="User4">
  </div>
  <h4>Join us in transforming your digital landscape today!</h4>
  <a href="contact.php" class="btn btn-orange">GET STARTED</a>
</section>
</head>        
</head>
<body>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>  
</head>
<body>

<!-- Image Section -->
<section class="image-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
              <p class="sub-heading">Mission& Vision
                <h3 class="fw-bold mb-3">Our Commitment to Excellence</h3>
                <p class="mb-3 fw-bold">Driving Innovation</p>
                <p>Our mission is to empower businesses through innovative technology solutions, enhancing efficiency and ensuring security while delivering exceptional results for our clients.</p>
                <p class="mt-4 fw-bold">Fostering Digital Trust</p>
                <p>We envision a world where technology enhances business success and security, becoming trusted partners in our clients’ journeys to digital transformation.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?auto=format&fit=crop&w=900&q=80" alt="Teamwork Image">
            </div>
            </p>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</head>
<body>

<!-- Footer Section -->
<footer class="footer">
  <div class="container">
    <div class="row">
      
      <!-- About -->
       <!-- Call To Action Section -->
<section class="section-light container my-5">
  <div class="row align-items-center">
    <div class="col-md-9">
      <h3 class="fw-bold">Ready to Elevate Your Business?</h3>
    </div>
    <div class="col-md-3 text-end">
      <a href="contact.php" class="highlight-button">Get Started</a>
    </div>
  </div>
</section>

      <div class="col-md-4">
        <h5>About Us</h5>
        <p>At Secbyte Technologies, we are committed to driving your success through innovative digital solutions tailored to your needs.</p>
        <p class="footer-bottom">Copyright © 2025 Secbyte Technologies Pvt Ltd</p>
      </div>

      <!-- Links -->
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="Home.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="Blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4">
        <h5>Contact Info</h5>
        <p>Email: <a href="mailto:secbytetechnologies@gmail.com">secbytetechnologies@gmail.com</a></p>
        <p>Phone: 9373890640</p>
        <p>Address: 4th floor, Parabrahmha Society, near santoshi mata mandir, Katraj, Pune – 411046</p>
      </div>
    </div>
  </div>
</footer>


</body>
</html>
