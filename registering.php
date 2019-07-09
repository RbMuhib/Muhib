<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$id    = $conn->real_escape_string($_POST['Id']);
$sex   = $conn->real_escape_string($_POST['sex']);
$address    = $conn->real_escape_string($_POST['Address']);
$age = $conn->real_escape_string($_POST['age']);
$dates = $conn->real_escape_string($_POST['dates']);


$query   = "INSERT into student (Id,Name,Sex,Address,Age,Date) VALUES('" . $id . "','" . $name . "','" . $sex . "','" . $address . "','" . $age . "','" . $dates . "')";







    
    $success = $conn->query($query);
 


if (!$success) {
    die("".$conn->error);

}






echo "Thank You For Contacting Us <br>";


$conn->close();

?>