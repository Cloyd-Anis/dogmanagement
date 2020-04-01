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

    if(isset($_POST['add'])){
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
                header('Location: ../views/vet/vet.php');
            }else{
                echo "error";
            }
        }
    }


    //delete
    if(isset($_POST['delete'])){
        $vetID = $_POST['vetID'];
        $sql = "delete from veterinarian where vetID='$vetID' ";
        if(mysqli_query($conn, $sql)){
            header('Location: ../views/vet/vet.php');
        }else{
            echo "This vet is used in other tables";
        }
    }
    
    //update
    if(isset($_POST['update'])){
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
                header('Location: ../views/vet/vet.php');
            }else{
                echo "Error";
            }
        }
    }

?>