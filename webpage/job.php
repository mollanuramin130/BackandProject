<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Job Registration</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Custom CSS -->
  
  <link rel="stylesheet" href="../css/job.css">
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
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
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

  <!-- Page Content -->
  <div class="container mt-5">
    <h1 style="color: yellow;">Welcome to Your Job Registration Page!</h1>
    <p style="color: yellow;">This is a more responsive homepage with an enhanced navigation bar.</p>
    
  </div>

<div>
    <form action="" method="POST">
        <label for="">Enter your name: </label>
        <input type="text" name="name" required><br>
        <label for="">Enter your Qualification: </label>
        <input type="text" name="degree" required><br>
        <label for="">Enter your mobile number: </label>
        <input type="text" name="mobile" required><br>
        <label for="">Enter your Email ID: </label>
        <input type="email" name="email" required><br>
        <label for="">Any Reference ?: </label>
        <input type="text" name="refer" required><br>
        <label for="">Enter your post: </label>
        <input type="text" name="post2" required><br>
        <input type="submit" value="submit" name="submit">

        <br><br>
        <center>
        <button class="btn btn-warning" onclick = "window.location.href='display.php';">
            <span class="spinner-grow spinner-grow-sm"></span>
            Check Form Data
        </button>
        </center>
        
        
    </form>
</div>

<?php 

include '../connectionFile/connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $post2=$_POST['post2'];
    
    $insertquery= " insert into JobRegistration (name,degree,mobile,email,refer,post) values ('$name','$degree','$mobile','$email','$refer','$post2')";

    $result=mysqli_query($connectionStatus, $insertquery);

    if($result){
        ?>
        <script>
            alert("Data insert successfully..");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Something Wrong Try Again");
        </script>
        <?php
    }
}

?>

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
