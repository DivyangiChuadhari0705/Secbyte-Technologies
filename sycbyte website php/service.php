<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Services - Secbyte Technologies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    /* Navbar */
    .navbar-brand img {
      height: 90px;
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
      background-image: url('https://secbytetechnologies.com/wp-content/uploads/2025/05/pexels-photo-577585.jpeg'); /* Replace with your hero background image */
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
    }

    .section-title {
      text-align: center;
      padding: 40px 20px 10px;
    }

    .section-title small {
      color: #6c757d;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .section-title h2 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    .service-box {
      text-align: center;
      padding: 20px;
    }

    .service-box img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 15px;
    }

    .service-box h5 {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .service-box p {
      color: #343a40;
      font-size: 14px;
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
        <a class="nav-link  fs-5" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active fs-5" href="service.php">Services</a>
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
<section class="hero-section">
  <div class="container">
    <h1>Comprehensive Solutions<br>for Your Business</h1>
  </div>
</section>

<body>

  <!-- Services Section -->
  <div class="container py-5">
    <div class="section-title">
      <small>OUR SERVICES</small>
      <h2>Explore Our Expertise in Digital<br>
        Marketing, Cyber Security, and<br>
        Software Development
      </h2>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">

      <!-- Digital Marketing -->
      <div class="col">
        <div class="service-box">
          <img src="img/digital marketing.jpeg" alt="Digital Marketing" />
          <h5>Digital Marketing</h5>
          <p>Our services include SEO, social media management, and PPC advertising, tailored to drive targeted traffic.</p>
        </div>
      </div>

      <!-- Software Development -->
      <div class="col">
        <div class="service-box">
          <img src="img/software develpment.jpeg" alt="Software Development" />
          <h5>Software Development</h5>
          <p>Custom web and mobile app solutions aligned with your business goals and operational efficiency.</p>
        </div>
      </div>

      <!-- IT Consulting -->
      <div class="col">
        <div class="service-box">
          <img src="img/it consulting.jpeg" alt="IT Consulting" />
          <h5>IT Consulting</h5>
          <p>Helping businesses adopt the best technology strategies for growth and streamlined operations.</p>
        </div>
      </div>

      <!-- Cyber Security -->
      <div class="col">
        <div class="service-box">
          <img src="img/cyber security.jpeg" alt="Cyber Security" />
          <h5>Cyber Security</h5>
          <p>Protect your digital assets with audits, penetration testing, and defense against vulnerabilities.</p>
        </div>
      </div>

      <!-- Cloud Solutions -->
      <div class="col">
        <div class="service-box">
          <img src="img/cloud solution.jpeg" alt="Cloud Solutions" />
          <h5>Cloud Solutions</h5>
          <p>Scalable cloud infrastructure to improve operations, access, and regulatory compliance.</p>
        </div>
      </div>

      <!-- Data Analytics -->
      <div class="col">
        <div class="service-box">
          <img src="img/data Analyitics.jpeg" alt="Data Analytics" />
          <h5>Data Analytics</h5>
          <p>Use powerful insights to make strategic decisions through business intelligence and reporting.</p>
        </div>
      </div>

    </div>
  </div>
</body>

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
