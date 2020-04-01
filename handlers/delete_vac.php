<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $vacc_id = $_POST['vacc_id'];
        $sql = "delete from vaccined_dogs where vacc_id='$vacc_id' ";
        if(mysqli_query($conn, $sql)){
            header('Location: ../vaccined.php');
        }else{
            echo "Error";
        }
    }

?>