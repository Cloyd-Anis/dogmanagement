<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $vetID = $_POST['vetID'];
        $sql = "delete from veterinarian where vetID='$vetID' ";
        if(mysqli_query($conn, $sql)){
            header('Location: ../vet.php');
        }else{
            echo "This vet is used in other tables";
        }
    }

?>