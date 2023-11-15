<!DOCTYPE html>
<html lang="en">
<head>
  <title>Server Connection</title>
  <?php include 'links.php' ?>
  <?php include 'css/style.css' ?>
</head>
<body>

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
        <a href="display.php">check Form</a>
        
    </form>
</div>

</body>
</html>

<?php 

include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $post2=$_POST['post2'];
    
    $insertquery= " insert into jobregistration (name,degree,mobile,email,refer,post) values ('$name','$degree','$mobile','$email','$refer','$post2')";

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