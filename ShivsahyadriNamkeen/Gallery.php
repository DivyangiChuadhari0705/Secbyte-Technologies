<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Shivsahyadri Namkeen</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<style>

body {
  font-family: system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  line-height: 1.5;
  color: #333;
}

/* Navbar Custom Style */
.navbar {
    background: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.navbar-brand img {
    width: 80px;
    height: auto;
}

.navbar-brand span {
    font-size: 20px;
    font-weight: bold;
    color: #d35400; /* Attractive orange */
}

.navbar-nav .nav-link {
    color: #333;
    font-weight: 500;
    margin: 0 8px;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #d35400; /* Orange hover effect */
    text-decoration: underline;
}

/* Active link styling */
.navbar-nav .nav-link.active {
    color: #d35400;
    font-weight: bold;
}

/* Responsive Toggler Icon */
.navbar-toggler {
    border: none;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.bg-hero {
  background: url('About Us.jpg') center/cover no-repeat; /* TEMP demo bg */
  min-height: 60vh;
  position: relative;
}
.hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,.55);
}
.hero-content {
  position: relative;
  z-index: 2;
  max-width: 1000px;
  margin-inline: auto;
  padding: 2rem;
}

#gallery-page h2 {
    font-weight: 700;
    font-size: 1.8rem;
  }
  #gallery-page .card img {
    height: 420px;
    object-fit: cover;
    border-radius: 8px;
  }
 body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .dealer-section {
            background: #ffc400;
            text-align: center;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        .dealer-section h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #b30000;
        }
        .dealer-section h3 {
            font-size: 2rem;
            font-style: italic;
            margin-bottom: 20px;
        }
        .dealer-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            color: #333;
        }
        .dealer-form .form-control {
            border-radius: 8px;
            padding: 12px;
        }
        .dealer-btn {
            background: #3b179d;
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px 30px;
            transition: 0.3s ease;
        }
        .dealer-btn:hover {
            background: #250d65;
        }
        .left-hand, .right-hand {
            position: absolute;
            width: 350px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }
        .left-hand {
            left: 0;
        }
        .right-hand {
            right: 10px;
        }
 body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
    }

    .footer {
        background-color: #fff;
        padding: 40px 0;
        position: relative;
    }

    .footer .insta-banner {
        background: linear-gradient(90deg, #833ab4, #fd1d1d, #fcb045);
        border-radius: 15px;
        color: #fff;
        text-align: center;
        padding: 30px;
        margin-bottom: 30px;
    }

    .footer .insta-banner i {
        font-size: 50px;
        margin-bottom: 15px;
    }

    .footer h5 {
        color: #d80000;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .footer ul {
        padding: 0;
        list-style: none;
    }

    .footer ul li a {
        color: #333;
        text-decoration: none;
        font-size: 15px;
        line-height: 28px;
    }

    .footer ul li a:hover {
        color: #fd1d1d;
    }

    .footer .social-icons a {
        color:blue ;
        font-size: 20px;
        margin-right: 15px;
    }

    .footer .social-icons a:hover {
        color: #fd1d1d;
    }

    .footer-bottom {
        font-size: 14px;
        color: #666;
        margin-top: 15px;
    }


</style>
<body>
<!-- Navbar -->

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo & Brand Name -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="logo 2.jpg" alt="Logo">
            <span class="ms-2">Shivsahyadri Namkeen</span>
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
<!-- Menu Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link " href="Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php">Our Products</a></li>
                <li class="nav-item"><a class="nav-link" href="Why Choose Us .php">Why Choose Us?</a></li>
                <li class="nav-item"><a class="nav-link active" href="Gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="Distributors.php">Distributors</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero position-relative text-center text-white bg-hero d-flex align-items-center justify-content-center">
  <div class="hero-overlay"></div>
  <div class="hero-content position-relative">
    <h1 class="display-5 fw-bold mb-3">Gallery</h1>
    <p class="lead mb-4">Welcome to Shivsahyadri Namkeen – where taste meets tradition! 
                    We are passionate about crafting authentic and flavorful snacks that bring joy to every bite..</p>
   
  </div>
</section>




<main id="gallery-page" class="py-5 bg-light">
  <div class="container">

    <!-- Page Header -->
    <header class="text-center mb-5">
      <h1 class="display-5 fw-bold text-primary">Gallery</h1>
      <p class="lead text-muted">Take a look at our products, preparation process, and events.</p>
    </header>

    <!-- Product Packs Section -->
    <section class="mb-5">
      <h2 class="text-center text-secondary mb-4">Product Packs</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card shadow-sm">
            <img src="product 1.jpg" class="card-img-top" alt="Bhadang Classic">
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="product 2.jpg" class="card-img-top" alt="Bhadang Masala">
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="product 1.jpg" class="card-img-top" alt="Placeholder Product">
          </div>
        </div>
      </div>
    </section>

    <!-- Preparation Process Section -->
    <section class="mb-5">
      <h2 class="text-center text-secondary mb-4">Preparation Process</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://m.media-amazon.com/images/I/81UhxKnDNyL._UF1000,1000_QL80_.jpg" class="card-img-top" alt="Preparation Step 1">
            <div class="card-body text-center">
              <p class="card-text">Mixing premium ingredients for authentic taste.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://5.imimg.com/data5/SELLER/Default/2022/11/FX/ZO/XW/1744767/snacks-making-machine-500x500.jpg" class="card-img-top" alt="Preparation Step 2">
            <div class="card-body text-center">
              <p class="card-text">Fresh batches prepared daily with care.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://www.dozuki.com/hs-fs/hubfs/Imported_Blog_Media/Good%20Manufacturing%20Practices%20To%20Maintain%20Food%20Hygiene%20Standards.png?width=592&name=Good%20Manufacturing%20Practices%20To%20Maintain%20Food%20Hygiene%20Standards.png" class="card-img-top" alt="Preparation Step 3">
            <div class="card-body text-center">
              <p class="card-text">Ensuring hygiene and quality at every step.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Happy Customers Section -->
    <section class="mb-5">
      <h2 class="text-center text-secondary mb-4">Happy Customers</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://media.gettyimages.com/id/1213523286/photo/multi-generation-family-shopping-at-supermarket.jpg?s=612x612&w=gi&k=20&c=Rd_FEBR2uJKUo_QgXxgew29usjpZeFlSXXSh4ZSOobg=" class="card-img-top" alt="Happy Customer 1">
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://media.gettyimages.com/id/1213540968/photo/woman-paying-by-credit-card-at-the-supermarket.jpg?s=612x612&w=gi&k=20&c=XbMuTWjwpHNq3ZsH_IUWEkeY-tAZ6wvYe2cA93ILafs=" class="card-img-top" alt="Happy Customer 2">
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://www.silkrute.com/images/detailed/4216/71-BGim_4GL_1xfo-vv.jpg" class="card-img-top" alt="Happy Customer 3">
          </div>
        </div>
      </div>
    </section>

    <!-- Events & Stalls Section -->
    <section class="mb-5">
      <h2 class="text-center text-secondary mb-4">Events & Stalls</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://i.ytimg.com/vi/OWZkVtguOOQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCWkIafDFKV_5T-xOEPYaV1wtbWow" class="card-img-top" alt="Event 1">
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://cdn.hisurat.com/business/bhavna-khakhra-adajan-branch/AF1QipMzwI9pJcpgoL4uBVKjYzGXTeYpQNaOSb_VBYyc.jpeg.webp" class="card-img-top" alt="Event 2">
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://content3.jdmagicbox.com/comp/ahmedabad/n1/079pxx79.xx79.140110132319.f8n1/catalogue/falguni-jain-gruh-udhyog-naranpura-vistar-ahmedabad-namkeen-manufacturers-yu38moplqh.jpg" class="card-img-top" alt="Event 3">
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<section class="dealer-section">
    <img src="https://anandnamkeen.com/ast/themes/anand-namkeen/images/hand-left-bottom.webp" class="left-hand" alt="Left Hand">
    <img src="https://anandnamkeen.com/ast/themes/anand-namkeen/images/hand-right-top.webp" class="right-hand" alt="Right Hand">

    <div class="container">
        <h2>Let’s walk together</h2>
        <h3><em>Together, let’s move forward</em></h3>
        <p>Let’s join hands in giving the best quality and incredible taste to snack lovers. Connect with us now to become the dealer of Gujarat’s reputed brand.</p>
        

           <form action="submit_contact.php" method="POST">
        
            <div class="row g-3 justify-content-center">
                <div class="col-md-4">
                    <input type="text"  name="name" placeholder="Name" required class="form-control mb-4" >
                </div>
                <br>
                <div class="col-md-4">
                    <input type="email"  name="email" placeholder="Email address" required class="form-control mb-4">
                </div>
                <div class="col-md-4">
                    <input type="text"  name="phone" placeholder=" phone number" required class="form-control mb-4">
                    
                </div>
                <div class="col-md-4">
                    <input type="text"  name="location" placeholder="Location" required class="form-control mb-4">
                </div>
                <div class="col-md-8">
                    <textarea name="message" rows="3" placeholder="Message" required class="form-control mb-8"></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn dealer-btn">Become a Dealer</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Footer Section -->
<section class="footer">
    <div class="container">
        <!-- Instagram Banner -->
        <div class="insta-banner">
            <i class="fab fa-instagram"></i>
            <h3>Show us <br><small>some insta love</small></h3>
            <button class="btn btn-outline-light btn-sm mt-2">Follow</button>
        </div>

        <!-- Footer Links -->
        <div class="row text-start">
            <div class="col-md-4">
                <h5>Useful Links</h5>
                <ul>
                    <li class="nav-item"><a class="nav-link " href="Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php">Our Products</a></li>
                <li class="nav-item"><a class="nav-link" href="Why Choose Us .php">Why Choose Us?</a></li>
                <li class="nav-item"><a class="nav-link active" href="Gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact Us.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="Distributors.php">Distributors</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Corporate Office</h5>
                <p>
                    RS. No. - 1020/4p2, Ahmedabad - Palanpur Highway Road,<br>
                    Opp. Flora Hotel, Dharevada, Banaskantha, Gujarat - 385210.
                </p>
                <p><strong>P:</strong> +91 9825907450, +91 9825907410</p>
                <p><strong>E:</strong> info@anandnamkeen.com<br>
                support@anandnamkeen.com</p>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="facebook.png"><i class="fab fa-facebook-f"></i></a>
                    <a href="instagram.png"><i class="fab fa-instagram"></i></a>
                    <a href="linkedin.png"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="footer-bottom mt-3">
                    © 2025 Shivsahyadri Namkeen Pvt. Ltd.<br>
                    All Rights Reserved.<br>
                    Designed & Developed by <b>Divyangi Chaudhari</b>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Optional main JS -->
<script src="/assets/js/main.js"></script>
</body>
</html>



