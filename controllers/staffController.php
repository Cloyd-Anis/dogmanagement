<?php

    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    


    //add 
    if(isset($_POST['add'])){
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
                header('Location: ../views/staff/staff.php');
            }else{
                echo "error";
            }
        }
        
    }

    //update function
    if(isset($_POST['update'])){
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
                header('Location: ../views/staff/staff.php');
            }else{
                echo "Error";
            }
        }
    }

    //delete staff
    if(isset($_POST['delete'])){
        $staff_id = $_POST['staff_id'];
        $sql = "delete from staff where staffID='$staff_id' ";
        if(mysqli_query($conn, $sql)){
            header('Location: ../views/staff/staff.php');
        }else{
            echo "Error";
        }
    }

?>