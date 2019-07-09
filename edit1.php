
<?php

session_start();

require 'connection.php';
$conn    = Connect();

if (isset($_GET['id'])){
$id = $_GET["id"];	

    echo "$id";
    

  
$name    = $conn->real_escape_string($_POST['name']);

$sex   = $conn->real_escape_string($_POST['sex']);
$address    = $conn->real_escape_string($_POST['Address']);
$age = $conn->real_escape_string($_POST['age']);
$dates = $conn->real_escape_string($_POST['dates']);



    

    $query   = "UPDATE student SET Name='$name', Sex = '$sex', Address= '$address' , Age = '$age', Date= '$dates'  WHERE Id=$id  ";
    $success = $conn->query($query);
    
    
    
  
if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

    if($success)
    {
        
        header("Location:retrieve.php");

    }

    
    
    
    
    
}
?>