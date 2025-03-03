<?php
    $servername = "localhost";
    $db_name = "ipt2_midterm_project";
    $username = "root";
    $password = "1234";

    //Create connection 
    $conn=  new mysqli($servername, $username, $password, $db_name);

    //Check connection 
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_server);
    }
    echo "Connected";

?>