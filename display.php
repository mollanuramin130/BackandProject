<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'links.php' ?>
  <?php include 'css/display.css' ?>
</head>
<body>
    <h1></h1>
    <table style="background-color: aqua; border: 2px solid black; text-align:center;">
        <thead>
            <tr>
                <td colspan="10"><h1>Data Retrieved From the Server</h1></td>
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
include 'connection.php';
$selectquery=" select * from jobregistration";

$query=mysqli_query($connectionStatus,$selectquery);

//$result=mysqli_fetch_array($query);
$serial=1;

while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $serial++; ?></td>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["degree"]; ?></td>
        <td><?php echo $row["mobile"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["refer"]; ?></td>
        <td><?php echo $row["post"]; ?></td>
        <td><i class="fa-solid fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>
    </tr><br>
    <?php

}


?>
  </tbody>
    </table>
</body>
</html>

