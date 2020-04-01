<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $vacc_id = $_POST['vacc_id'];
        $dog = $_POST['dog'];
        $vet = $_POST['vet'];
        $vaccName = $_POST['vaccName'];
        $vacc_desc = $_POST['vacc_desc'];
        $vacc_dosage = $_POST['vacc_dosage'];
        $vacc_ave_cost = $_POST['vacc_ave_cost'];
        $date_of_vaccination = $_POST['date_of_vaccination'];
        $next_visit = $_POST['next_visit'];

        $sql = "update vaccined_dogs set dogID='$dog', vetID='$vet', vaccName='$vaccName', vacc_desc='$vacc_desc', vacc_dosage='$vacc_dosage',
        vacc_ave_cost='$vacc_ave_cost',  date_of_vaccination='$date_of_vaccination', next_visit='$next_visit' where vacc_id='$vacc_id'";
        if(mysqli_query($conn, $sql)){
            header('Location: ../vaccined.php');
        }else{
            echo "error";  
        }
    }
?>