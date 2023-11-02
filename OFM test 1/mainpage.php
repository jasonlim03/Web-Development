<!DOCTYPE html>
<html>
<head>
	<title>Online Fishery Market</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>
	<header>
		<div class="container">
      <div class="logo">
        <img width="250" height="100" src="images/logo.jpg" alt="logo">
      </div>
			<nav>
				<ul>
          <li></li>
					<li><a href="#">Home</a></li>
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="register.php">Products</a></li>
					<li><a href="#contact-us">Contact Us</a></li>
          <div class="login">
            <ul>
              <li><a href="adminlogin.php">Admin</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Sign Up</a></li>
            </ul>
          </div>
				</ul>
			</nav>
		</div>
	</header> 

  <section class="hero-section">
    <div class="container">
      <h1>Welcome to Online Fishery Market</h1>
      <p>Get fresh and delicious seafood delivered straight to your doorstep.</p>
      <a href="login.php" class="cta-btn">Shop Now</a>
    </div>
  </section>
  
  <section class="features">
		<h2>Why Choose Us?</h2>
		<div class="feature">
			<img src="images/fish6.jpg" alt="Fresh Seafood">
			<h3>Fresh Seafood</h3>
			<p>Our seafood is caught and prepared daily to ensure the freshest taste possible.</p>
		</div>
		<div class="feature">
			<img src="images/delivery.jpg" alt="Fast Delivery">
			<h3>Fast Delivery</h3>
			<p>We offer quick and reliable delivery services to get your seafood to you as soon as possible.</p>
		</div>
		<div class="feature">
			<img src="images/cert2.jpg" alt="Wide Selection">
			<h3>Wide Selection</h3>
			<p>Choose from a wide variety of seafood options, including fish, shellfish, and more.</p>
		</div>
	</section>

  <section class="about-us-section">
    <div class="container">
      <h2>About Us</h2>
      <p>We are a team of seafood enthusiasts who are passionate about bringing the best quality seafood to your plate. We work directly with fishermen and local suppliers to ensure that our customers receive the freshest and most delicious seafood available.</p>
      <p>Our goal is to provide a convenient and hassle-free way for our customers to enjoy seafood, without having to leave their homes. We offer a wide range of products, from fresh fish and shellfish to prepared dishes and sauces.</p>
      <a href="aboutus.html" class="cta-btn">Learn More</a>
    </div>
  </section>

  <section class="product-section">
    <div class="container">
      <h2>Best Seller</h2>
      <div class="product-grid">
        <div class="product-item">
          <img src="images/fish5.jpg" alt="Fish1">
          <h3>Red Snapper</h3>
          <p>$12.99/lb</p>
          <a href="register.php" class="buy-btn">Buy Now</a>
        </div>
        <div class="product-item">
          <img src="images/fish2.webp" alt="Fish2">
          <h3>Salmon</h3>
          <p>$14.99/lb</p>
          <a href="register.php" class="buy-btn">Buy Now</a>
        </div>
        <div class="product-item">
          <img src="images/fish3.webp" alt="Fish3">
          <h3>Tilapia</h3>
          <p>$9.99/lb</p>
          <a href="register.php" class="buy-btn">Buy Now</a>
        </div>
        <div class="product-item">
          <img src="images/fish4.jpg" alt="Fish4">
          <h3>Shrimp</h3>
          <p>$16.99/lb</p>
          <a href="register.php" class="buy-btn">Buy Now</a>
        </div>
      </div>
      <a href="register.php" class="cta-btn">Register Now</a>
    </div>
  </section>
  
  <section class="contact-us-section" id="contact-us">
    <div class="container">
      <h1>Contact Us</h1>
      <form action="#" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit" class="cta-btn">Send</button>
      </form>
        <div class="contact-info">
          <p><strong>Phone:</strong> 555-1234</p>
          <p><strong>Email:</strong> AsiaPacificUniversityinfo@onlinefisherymarket.com</p>
          <p><strong>Address:</strong> Jalan Teknologi 5, Taman Teknologi Malaysia, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
        </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <p>&copy; 2023 Online Fishery Market</p>
      <nav>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
      </nav>
    </div>
  </footer>
</body>
</html> 