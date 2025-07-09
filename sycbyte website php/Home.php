<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home - Secbyte Technologies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
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

    /* Hero Section */
    .hero {
      background: url('https://secbytetechnologies.com/wp-content/uploads/2025/05/pexels-photo-6476245.jpeg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      background-color: rgba(0, 0, 0, 0.6);
      top: 0; left: 0; right: 0; bottom: 0;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .hero p {
      max-width: 700px;
      margin: 20px auto;
      font-size: 1.1rem;
    }

    .btn-orange {
      background-color: #f77c00;
      color: #fff;
      padding: 10px 30px;
      border-radius: 5px;
      text-decoration: none;
      border: none;
    }

    .btn-orange:hover {
      background-color: #d96000;
    }

    /* Services */
    .services {
      padding: 60px 20px;
      background-color: #fff;
    }

    .services h2 {
      font-weight: bold;
    }

    .services .card img {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .services .card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .services .card-title {
      font-weight: bold;
    }

    .services .card-body p {
      font-size: 0.95rem;
    }

    footer {
      background-color: #111;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
   
    .section-title {
      font-weight: bold;
      margin-bottom: 20px;
    }
    .team-img {
      width: 100%;
      max-width: 150px;
      border-radius: 50%;
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

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 1.8rem;
      }
    }






    
        
        .testimonial-bg {
            background-image: url('https://secbytetechnologies.com/wp-content/uploads/2025/05/pexels-photo-4974914.jpeg'); /* Optional background image */
            background-size: cover;
            background-position: center;
            padding: 70px 0;
             
        }
        
        .testimonial-box {
            background-color: #fff;
            border-radius: 20px;
            padding: 50px;
            margin-bottom:20
        }
        .testimonial-quote {
            color: #ff6f00;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .testimonial-text {
            font-size: 1rem;
            margin-bottom: 25px;
        }
        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

    
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .feature-box {
           
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .feature-box:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
        }


.team-section {
            background-color: #f9f9f9;
            padding: 50px 0;
            text-align: center;
        }
        .team-member {
            margin-bottom: 40px;
            transition: transform 0.3s;
        }
        .team-member:hover {
            transform: translateY(-10px);
        }
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .team-role {
            color: #6c757d;
            font-size: 16px;
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
        <a class="nav-link active fs-5" href="Home.php">Home</a>
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
        <a class="nav-link fs-5" href="contact.php">Contact</a>
      </li>
    </ul>
    <a href="#" class="btn btn-outline-warning ms-3">GET STARTED</a>
  </div>
</nav>


<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <h1>Transform Your Digital <br>Presence Today</h1>
    <p>At Secbyte Technologies, we empower your business with innovative digital marketing, cybersecurity, and software development solutions.</p>
    <a href="contact.php" class="btn-orange">GET STARTED</a>
  </div>
</section>

<!-- Services Section -->
<section class="services text-center">
  <div class="container">
    <h2 class="mb-4">Explore Our Expertise</h2>
    <p class="text-muted mb-5">Digital Marketing, Cyber Security, and Software Development</p>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <img src="https://images.pexels.com/photos/6476588/pexels-photo-6476588.jpeg" class="card-img-top" alt="Digital Marketing">
          <div class="card-body">
            <h5 class="card-title">Digital Marketing</h5>
            <p class="card-text">Enhancing your online presence through data-driven strategies and campaigns.</p>
            <a href="#" class="btn btn-sm btn-link text-dark">View More →</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg" class="card-img-top" alt="Cyber Security">
          <div class="card-body">
            <h5 class="card-title">Cyber Security</h5>
            <p class="card-text">Protecting your business from digital threats with our expert solutions.</p>
            <a href="#" class="btn btn-sm btn-link text-dark">View More →</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://images.pexels.com/photos/3861972/pexels-photo-3861972.jpeg" class="card-img-top" alt="Software Development">
          <div class="card-body">
            <h5 class="card-title">Software Development</h5>
            <p class="card-text">Custom web and mobile solutions tailored to your business needs.</p>
            <a href="#" class="btn btn-sm btn-link text-dark">View More →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<br>

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


 <h2 class="text-center fw-bold mb-5" style="font-size: 2.5rem;">What Our Clients Say</h2>

<section class="testimonial-bg">
    <div class="container">
      
       
        <div class="testimonial-box shadow">
            <div class="row g-4">

                <!-- Testimonial 1 -->
                <div class="col-md-4 border-md-end">
                    <div class="testimonial-quote">❝</div>
                    <p class="testimonial-text">Secbyte has transformed our online engagement strategies remarkably.</p>
                    <div class="d-flex align-items-center">
                        <img src="img/Amit patel.png" alt="Amit Patel" class="testimonial-img">
                        <strong>Amit Patel</strong>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4 border-md-end">
                    <div class="testimonial-quote">❝</div>
                    <p class="testimonial-text">Their expertise in cybersecurity gave us peace of mind.</p>
                    <div class="d-flex align-items-center">
                        <img src="img/Neha Singh.png" alt="Neha Singh" class="testimonial-img">
                        <strong>Neha Singh</strong>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4">
                    <div class="testimonial-quote">❝</div>
                    <p class="testimonial-text">Outstanding service and attention to detail; highly recommend!</p>
                    <div class="d-flex align-items-center">
                        <img src="img/Rajesh kumar.png" alt="Rajesh Kumar" class="testimonial-img">
                        <strong>Rajesh Kumar</strong>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

  


<div class="container py-5">
    <h2 class="section-title">Why Choose Us</h2>
    <p class="text-center mb-5">Unique Value Propositions That Set Us Apart</p>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-box text-center">
                <img src="img/partners.png" alt="Expert Team" class="feature-icon">
                <h5>Expert Team</h5>
                <p>Our team comprises industry leaders with extensive experience dedicated to delivering exceptional solutions.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <img src="img/customization.png" alt="Tailored Solutions" class="feature-icon">
                <h5>Tailored Solutions</h5>
                <p>We customize our services to fit your unique business needs, ensuring optimal results.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <img src="img/processor.png" alt="Cutting-edge Technology" class="feature-icon">
                <h5>Cutting-edge Technology</h5>
                <p>Leveraging the latest technology, we innovate and elevate your digital strategies continuously.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <img src="img/headphones.png" alt="Unparalleled Support" class="feature-icon">
                <h5>Unparalleled Support</h5>
                <p>Our client-centric approach offers you unmatched support and responsive service at every stage.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <img src="img/growth.png" alt="Proven Results" class="feature-icon">
                <h5>Proven Results</h5>
                <p>We pride ourselves on delivering measurable outcomes that drive growth and success.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <img src="img/security.png" alt="Integrity & Trust" class="feature-icon">
                <h5>Integrity & Trust</h5>
                <p>We build relationships based on integrity, ensuring transparency and trust in all our dealings.</p>
            </div>
        </div>
    </div>
</div>
<section class="team-section">
    <div class="container">
        <h2 class="mb-4 fw-bold">Meet Our Leadership Team</h2>
        <p class="mb-5 text-muted">Brains Behind the Breakthroughs</p>

        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 team-member">
                <img src="img/Aditya Mohite.png" alt="Aditya Mohite">
                <h5>Aditya Mohite</h5>
                <p class="team-role">CEO &amp; Founder</p>
            </div>
            <div class="col-md-3 col-sm-6 team-member">
                <img src="img/Manthan Pandit.png" alt="Manthan Pandit">
                <h5>Manthan Pandit</h5>
                <p class="team-role">CTO</p>
            </div>
            <div class="col-md-3 col-sm-6 team-member">
                <img src="img/Shreyas Barge.png" alt="Shreyas Barge">
                <h5>Shreyas Barge</h5>
                <p class="team-role">CMO</p>
            </div>
            <div class="col-md-3 col-sm-6 team-member">
                <img src="img/Ankita khandait.png" alt="Ankita Khandait">
                <h5>Ankita Khandait</h5>
                <p class="team-role">COO</p>
            </div>
        </div>

        <div class="mt-5">
            <a href="careers.php" class="btn btn-outline-primary">Join our team</a>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="blog.php">Blog</a></li>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<body>
</body>
</html>





















































</body>
</html>
