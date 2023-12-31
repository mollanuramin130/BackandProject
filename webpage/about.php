<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Your Website</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/indexstyles.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="http://nuramin.liveblog365.com">Live Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactUs.php">Contact</a>
        </li>
        <!-- Example Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Project Members Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Nur Amin Molla</a>
            <a class="dropdown-item" href="#">Varsha Rani</a>
            <a class="dropdown-item" href="#">Manish Singh Rawat</a>
            <a class="dropdown-item" href="#">Vikash Bachety</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="jobRegistration.php" style="color: rgb(231, 14, 14);">Apply for Join Us</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <!-- About Section -->
  <div class="container mt-5">
    <h1>About Us</h1>
    <p>Welcome to our company! Here's a bit about who we are and what we do.</p>

    <h2>Our Story</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at urna eu augue posuere rutrum. Nullam consectetur sagittis quam, sit amet fringilla mi posuere id.</p>

    <h2>Our Mission</h2>
    <p>Our mission is to provide high-quality products/services to our customers and create a positive impact on the communities we serve.</p>

    <h2>Our Team</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../css/Back2.jpg" class="card-img-top" alt="Team Member 1">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Co-Founder</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../css/Back2.jpg" class="card-img-top" alt="Team Member 2">
          <div class="card-body">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">CEO</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="team-member3.jpg" class="card-img-top" alt="Team Member 3">
          <div class="card-body">
            <h5 class="card-title">Robert Johnson</h5>
            <p class="card-text">CTO</p>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Footer Section -->
 <footer>
        <div class="footer-class">
            <div class="footer-first">
                <a href="" class="footer-link">Conditions of Use</a>
                <a href="" class="footer-link">Privacy Notice</a>
                <a href="" class="footer-link">Your Ads Privacy Choices</a>
            </div>
            <div class="footer-copy">  © 2023, http://nuramin.liveblog365.com, Inc. or its affiliates made by <a href="http://nuramin.liveblog365.com" class="owner"> Nur Amin Molla</a></div>
        </div>
    </footer>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>