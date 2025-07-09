 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blog - Secbyte Technologies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
    
    .hero-banner {
      background-image: url('https://secbytetechnologies.com/wp-content/uploads/2025/05/pexels-photo-3183150.jpeg');
      background-size: cover;
      background-position: center;
      height: 425px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .hero-banner h1 {
      font-size: 3rem;
      font-weight: 600;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 768px) {
      .hero-banner h1 {
        font-size: 2rem;
        padding: 0 15px;
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
     .blog-card {
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.08);
      margin-bottom: 30px;
      overflow: hidden;
      transition: all 0.3s;
    }

    .blog-card:hover {
      transform: translateY(-5px);
    }

    .blog-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .blog-card-body {
      padding: 15px 20px;
    }

    .blog-card-body h5 {
      font-weight: 600;
    }

    .blog-date {
      font-size: 0.9rem;
      color: #ff6600;
      margin-bottom: 5px;
    }

    .read-post {
      color: #ff6600;
      font-weight: 500;
      font-size: 0.9rem;
      text-decoration: none;
    }

    .read-post:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .hero-banner h1 {
        font-size: 2rem;
        padding: 0 15px;
      }
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
        <a class="nav-link fs-5" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  fs-5" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  fs-5" href="service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active fs-5" href="Blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-5" href="contact.php">Contact</a>
      </li>
    </ul>
    <a href="#" class="btn btn-outline-warning ms-3">GET STARTED</a>
  </div>
</nav>



<!-- Hero Section -->
<div class="hero-banner">
  <h1>Insights and Trends in Technology</h1>
</div>

<!-- Optional Blog Cards / Articles Section -->
<!-- Add content below if needed -->

<!-- Blog Section -->
<div class="container py-5">
  <div class="row">

    <!-- Blog Post 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <img src="img/Blog 1.jpeg" alt="Blog 1">
        <div class="blog-card-body">
          <div class="blog-date">May 2, 2025</div>
          <h5>Crafting Captivating Headlines: Your awesome post title goes here</h5>
          <p>Engaging Introductions: Capturing Your Audience’s Interest. The initial impression your blog post makes is crucial...</p>
          <a href="#" class="read-post">Read Post »</a>
        </div>
      </div>
    </div>

    <!-- Blog Post 2 -->
    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <img src="img/Blog 2.jpeg" alt="Blog 2">
        <div class="blog-card-body">
          <div class="blog-date">May 2, 2025</div>
          <h5>The Art of Drawing Readers In: Your attractive post title goes here</h5>
          <p>Capture attention with your lead. The first few lines are vital to retaining interest and encouraging reading...</p>
          <a href="#" class="read-post">Read Post »</a>
        </div>
      </div>
    </div>

    <!-- Blog Post 3 -->
    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <img src="img/Blog 3.jpeg" alt="Blog 3">
        <div class="blog-card-body">
          <div class="blog-date">May 2, 2025</div>
          <h5>Mastering the First Impression: Your intriguing post title goes here</h5>
          <p>Learn how to grab attention from the first line and keep the reader scrolling with compelling introductions...</p>
          <a href="#" class="read-post">Read Post »</a>
        </div>
      </div>
    </div>

    <!-- Blog Post 4 -->
    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <img src="img/Blog 4.jpeg" alt="Blog 4">
        <div class="blog-card-body">
          <div class="blog-date">May 2, 2025</div>
          <h5>Hello world!</h5>
          <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
          <a href="#" class="read-post">Read Post »</a>
        </div>
      </div>
    </div>

  </div>
</div>

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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  