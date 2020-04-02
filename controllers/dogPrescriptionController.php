<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogshelter";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST["add"])){
    $genericName=$_POST["genericName"];
    $brandName=$_POST["brandName"];
    $vet=$_POST["vet"];
    $description=$_POST["prescDescription"];
    $consult=$_POST["dog"];
    $query="INSERT INTO prescription(consultID,vetID,generic_name,brand_name,presc_desc) VALUES('$consult','$vet','$genericName','$brandName','$description')";
    if(mysqli_query($conn,$query)){
        header('Location:../../presc.php');
    }else{
        echo '<script type="text/javascript">
                alert("Error in  adding prescription!");
                    location="../../presc.php";
                    </script>';
    }
}

if(isset($_POST["updateExisting"])){    //not finished
    $genericName=$_POST["genericName"];
    $brandName=$_POST["brandName"];
    $vet=$_POST["vet"];
    $description=$_POST["prescDescription"];
    $consult=$_POST["dog"];
    $query="UPDATE prescription SET generic_name='$genericName',brand_name='$brandName',presc_desc='$description',consultID='$consult',vetID='$vet' WHERE consultID='$ref'";
    if(mysqli_query($conn,$query)){
        header('Location:../../presc.php');
    }else{
        echo '<script type="text/javascript">
                alert("Error updating in prescription!");';
    }
}

if(isset($_POST["delete"])){
    $ref=$_POST["ref"];
    $query="DELETE FROM prescription WHERE prescID='$ref'";
    if(mysqli_query($conn,$query)){
        header('Location:../../presc.php');
    }
    else{
        echo '<script type="text/javascript">
        alert("Error in  deletion prescription!");
        location="../presc.php";
                    </script>';
        
    }
}
?>