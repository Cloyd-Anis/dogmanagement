<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $staff_id = $_POST['staff_id'];
        $firstname = $_POST['firstname'];
        $middleinitial =  $_POST['middleinitial'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $employment_status = $_POST['employment_status'];
        $staff_status = $_POST['staff_status'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "update staff set FName='$firstname', MI='$middleinitial', LName='$lastname', email='$email', 
            address='$address', contact='$contact', employment_status='$employment_status', staff_status='$staff_status' where staffID='$staff_id' ";
            
            if(mysqli_query($conn, $sql)){
                header('Location: ../staff.php');
            }else{
                echo "Error";
            }
        }
    }

?>