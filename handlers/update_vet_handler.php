<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $vetID = $_POST['vetID'];
        $FName = $_POST["FName"];
        $MI = $_POST["MI"];
        $LName = $_POST["LName"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $clinic = $_POST["clinic"];
        $address = $_POST['address'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "update veterinarian set fname='$FName', mi='$MI', lname='$LName', contact='$contact',
            email='$email', clinic_name='$clinic', clinic_address='$address' where vetID='$vetID' ";

            if(mysqli_query($conn, $sql)){
                header('Location: ../vet.php');
            }else{
                echo "Error";
            }
        }
    }

?>