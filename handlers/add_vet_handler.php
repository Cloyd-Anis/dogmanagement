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

if(isset($_POST['submit'])){
    $FName = $_POST["FName"];
    $MI = $_POST["MI"];
    $LName = $_POST["LName"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $clinic = $_POST["clinic"];
    $address = $_POST['address'];

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "insert into veterinarian(fname, mi, lname, contact, email, clinic_name, clinic_address)
        values('$FName', '$MI', '$LName', '$contact', '$email', '$clinic', '$address')";
        if(mysqli_query($conn, $sql)){
            header('Location: ../vet.php');
        }else{
            echo "error";
        }
    }
}

?>