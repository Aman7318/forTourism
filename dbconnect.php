<?php
    $server = "localhost";
    $username = "";
    $password = "";
    $database ="";
    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die('Connection not successful.'.mysqli_connect_error());
    }
?>