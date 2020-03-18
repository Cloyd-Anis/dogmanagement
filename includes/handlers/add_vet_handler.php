<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogshelter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo '<script>alert("Connected successfully")</script>';

if(isset($_POST['vet_add'])){
    $FName = $_POST["FName"];
    $MI = $_POST["MI"];
    $LName = $_POST["LName"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $clinic = $_POST["clinic"];

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is not a valid email address");
    }

    $sql = "INSERT INTO veterinarian (FName, MI, LName, contact, email, clinic) 
            VALUES ( '$FName', '$MI', '$LName', '$contact', '$email', '$clinic')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New record created successfully")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>