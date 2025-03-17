<?php 
//connect to dtabase

$conn = mysqli_connect("localhost", "brian", "brian123", "brian_pizza");

//check connection
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
} 
?>