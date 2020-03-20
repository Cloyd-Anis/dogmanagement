<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $dog = $_POST['dog'];
        $vet = $_POST['vet'];
        $vaccine_name = $_POST['vaccine_name'];
        $vaccine_description = $_POST['vaccine_description'];
        $vaccine_dosage = $_POST['vaccine_dosage'];
        $vaccine_cost = $_POST['vaccine_cost'];
        $vaccine_date = $_POST['vaccine_date'];
        $vaccine_nextVisit = $_POST['vaccine_nextVisit'];

        $sql = "insert into vaccined_dogs(dogID, vetID, vaccName, vacc_desc, vacc_dosage, vacc_ave_cost, date_of_vaccination, next_visit) 
        VALUES('$dog', '$vet', '$vaccine_name', '$vaccine_description', '$vaccine_dosage', '$vaccine_cost', '$vaccine_date', '$vaccine_nextVisit')";

        if(mysqli_query($conn, $sql)){
            header('Location: ../vaccined.php');
        }
    }
?>