<?php
 $username="root";
 $password= "";
 $server="localhost";
 $db="crudyoutube";


 $connectionStatus=mysqli_connect($server, $username, $password, $db);

if($connectionStatus){
    ?>
    <!-- <script>
        alert("Connection successful...");
    </script> -->
    
    <?php 
    //echo"Connection Successful";
}
else{
    echo "Connection fail";
    die("connection fail".mysqli_connect_error());
}

?>