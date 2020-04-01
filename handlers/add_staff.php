<?php

    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $employment_status = $_POST['employment_status'];
        $staff_status = $_POST['staff_status'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "insert into staff(FName, LName, MI, contact, email, address, employment_status, staff_status, employ_date)
            VALUES('$firstname', '$lastname', '$middlename', '$contact', '$email', '$address', '$employment_status', '$staff_status',now()) ";
            
            if(mysqli_query($conn, $sql)){
                header('Location: ../staff.php');
            }else{
                echo "error";
            }
        }
        
    }

?>