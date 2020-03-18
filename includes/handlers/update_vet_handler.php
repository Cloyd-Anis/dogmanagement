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


if(isset($_POST['vet_update'])){    
    $id = $_POST['id'];
    $FName = $_POST["FName"];
    $MI = $_POST["MI"];
    $LName = $_POST["LName"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $clinic = $_POST["clinic"];

    if(!empty($_POST["FName"])){
        $FName = $_POST["FName"];
        $sql = "UPDATE veterinarian SET FName='$FName' WHERE vetID='$id'";
        if (!$conn->query($sql) === TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    if(!empty($_POST["MI"])){
        $MI = $_POST["MI"];
        $sql = "UPDATE veterinarian SET MI='$MI' WHERE vetID='$id'";
        if (!$conn->query($sql) === TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    if(!empty($_POST["LName"])){
        $LName = $_POST["LName"];
        $sql = "UPDATE veterinarian SET LName='$LName' WHERE vetID='$id'";
        if (!$conn->query($sql) === TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    if(!empty($_POST["contact"])){
        $contact = $_POST["contact"];
        $sql = "UPDATE veterinarian SET contact='$contact' WHERE vetID='$id'";
        if (!$conn->query($sql) === TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    if(!empty($_POST["email"])){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
            $sql = "UPDATE veterinarian SET email='$email' WHERE vetID='$id'";
            if (!$conn->query($sql) === TRUE) {
                echo "Error updating record: " . $conn->error;
            }   
        }else{
            echo("$email is not a valid email address");
        }
    }
    if(!empty($_POST["clinic"])){
        $clinic = $_POST["clinic"];
        $sql = "UPDATE veterinarian SET clinic='$clinic' WHERE vetID='$id'";
        if (!$conn->query($sql) === TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
  
    $conn->close();
}
?>