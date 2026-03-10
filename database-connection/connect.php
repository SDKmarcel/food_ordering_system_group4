
<?php

    $DBhostName = "localhost";
    $DBuser_name = "root";
    $DBpasswd = "";
    $DBname = "food-order";
    $DBport = "3307";

    $conn = mysqli_connect($DBhostName, $DBuser_name, $DBpasswd, $DBname, $DBport);

    if(!$conn){
        die(mysqli_connect_error());
    }

?>


