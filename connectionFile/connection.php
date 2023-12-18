<?php
 $username="root";
 $password= "";
 $server="localhost";
 $db="NurMinorProjectDatabase";


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