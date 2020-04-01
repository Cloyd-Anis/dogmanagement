<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $staff_id = $_POST['staff_id'];
        $sql = "delete from staff where staffID='$staff_id' ";
        if(mysqli_query($conn, $sql)){
            header('Location: ../staff.php');
        }else{
            echo "Error";
        }
    }

?>