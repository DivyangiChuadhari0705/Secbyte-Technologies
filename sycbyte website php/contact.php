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
      background-image: url('https://secbytetechnologies.com/wp-content/uploads/2025/05/pexels-photo-5380664.jpeg'); /* Replace with your hero background image */
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

  .contact-banner {
      background-image: url('https://images.unsplash.com/photo-1535223289827-42f1e9919769'); /* Replace if needed */
      background-size: cover;
      background-position: center;
      color: white;
      padding: 80px 0;
      text-align: center;
    }
    .form-control, textarea {
      border-radius: 0;
    }
    button.btn-warning {
      background-color: #ff7f50;
      border: none;
    }

    .office-section {
      background-color: #f9f0fb;
      padding: 50px 0;
    }
    .office-card {
      border-left: 2px solid #ff7f50;
      padding-left: 20px;
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
        <a class="nav-link  fs-5" href="service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  fs-5" href="Blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  active fs-5" href="contact.php">Contact</a>
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

<!-- Contact Section -->
<section class="container py-5">
  <div class="row">
    <!-- Contact Form -->
    <div class="col-md-6 mb-4">
      <h6 class="text-uppercase">Reach Out</h6>
      <h2 class="fw-bold mb-4">We’re Here to Answer Your Questions</h2>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name    = htmlspecialchars($_POST['name']);
        $email   = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        echo "<div class='alert alert-success'>Thanks, <b>$name</b>. Your message has been received!</div>";
      }
      ?>

      <form method="post" action="">
        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="John" required />
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="example@mail.com" required />
        </div>
        <div class="mb-3">
          <textarea name="message" rows="5" class="form-control" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" class="btn btn-warning px-4">SUBMIT</button>
      </form>
    </div>
    <!-- Google Map -->
    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d20803.76356314698!2d73.8502050939616!3d18.44964820995174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4th%20floor%2C%20Parabrahmha%20Society%2C%20near%20santoshi%20mata%20mandir%2C%20Katraj%2C%20Pune%20%E2%80%93%20411046!5e0!3m2!1sen!2sin!4v1752065162097!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    

   <div class="col-md-6">
</div>
</section>
<!-- Office Locations Section -->
<section class="office-section">
  <div class="container">
    <div class="row text-dark">
      <div class="col-md-4 mb-4">
        <div class="office-card">
          <h5 class="fw-bold">Pune Office</h5>
          <p style="color:#ff7f50;">info@secbytetechnologies.com</p>
          <p>9373890640</p>
          <p>4th floor, Parabrahmha Society, near Santoshi Mata Mandir, Katraj, Pune – 411046</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="office-card">
          <h5 class="fw-bold">Mumbai Office</h5>
          <p style="color:#ff7f50;">info@secbytetechnologies.com</p>
          <p>9373890640</p>
          <p>2nd floor, Sadgurukrupa Society, near Ranjandevi Mandir, Koparkhairane sector-19, Navi Mumbai – 400709</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="office-card">
          <h5 class="fw-bold">Satara Office</h5>
          <p style="color:#ff7f50;">info@secbytetechnologies.com</p>
          <p>9373890640</p>
          <p>P3/4, IT Park, Old MIDC <em>Satara</em>, Mahindra Automobiles, <em>Satara</em> – 415 004.</p>
        </div>
      </div>
    </div>
  </div>
</section>
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

