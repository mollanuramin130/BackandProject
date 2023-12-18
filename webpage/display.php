<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Your Website</title>    

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/indexstyles.css">
  
  <link rel="stylesheet" href="../css/display.css">

   <!-- Fav icon link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <a class="dropdown-item" href="job.php" style="color: rgb(231, 14, 14);">Apply for Join Us</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container mt-5">
    <h1 style="color :yellow;">Welcome to Your Serverside Data view Web Page!</h1>
    <p>This is a more responsive homepage with an enhanced navigation bar.</p>
  </div>

    <table style="background-color: aqua; border: 2px solid black; text-align:center;">
        <thead>
            <tr>
                <td colspan="10">
                    <h1>Data Retrieved From the Server</h1>
                </td>
            </tr>
            <tr>
                <td>Serial NO.</td>
                <td>ID</td>
                <td>Name</td>
                <td>Degree</td>
                <td>Mobile</td>
                <td>Email</td>
                <td>Refer</td>
                <td>Post</td>
                <td colspan="2" style="center">Operation</td>
            </tr>

        </thead>

        <tbody>
            <?php
            include '../connectionFile/connection.php';
            $selectquery = " select * from JobRegistration";

            $query = mysqli_query($connectionStatus, $selectquery);

            //$result=mysqli_fetch_array($query);
            $serial = 1;

            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $serial++; ?>
                    </td>
                    <td>
                        <?php echo $row["id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["name"]; ?>
                    </td>
                    <td>
                        <?php echo $row["degree"]; ?>
                    </td>
                    <td>
                        <?php echo $row["mobile"]; ?>
                    </td>
                    <td>
                        <?php echo $row["email"]; ?>
                    </td>
                    <td>
                        <?php echo $row["refer"]; ?>
                    </td>
                    <td>
                        <?php echo $row["post"]; ?>
                    </td>
                    <td><a href="dataUpdate.php?id= <?php echo $row["id"]; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                <?php

            }


            ?>
        </tbody>
    </table>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

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
