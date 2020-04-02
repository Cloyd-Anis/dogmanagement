<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogshelter";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST["add"])){
    $vetID=$_POST["vet"];
    $dogID=$_POST["dog"];
    $cost=$_POST["cost"];
    $condition=$_POST["dogCondition"];
    $temp2=strtotime($_POST["nextVisit"]);
    $next=date('Y-m-d',$temp2);
    $temp=strtotime($_POST["consultDate"]);
    $consultdate=date('Y-m-d',$temp);
    $query="INSERT INTO consult(dogID,vetID,dog_condition,total_cost,consult_date,next_visit) VALUES('$dogID','$vetID','$condition','$cost','$next','$consultdate')";
    if(mysqli_query($conn,$query)){
        header('Location:../../consultation.php');
    }else{
        echo '<script type="text/javascript">
                alert("Error in  adding consultation!");
                    location="../consultation.php";
                    </script>';
    }
}

if(isset($_POST["updateExisting"])){ 
    $ref=$_POST["ref"];
    $vetID=$_POST["vet"];
    $dogID=$_POST["dog"];
    $cost=$_POST["cost"];
    $condition=$_POST["dogCondition"];
    $temp2=strtotime($_POST["nextVisit"]);
    $next=date('Y-m-d',$temp2);
    $temp=strtotime($_POST["consultDate"]);
    $consultdate=date('Y-m-d',$temp);
    $query="UPDATE consult SET vet='$vetID',dogID='$dogID',cost='$cost',dogCondition='$condition',nextVisit='$next',consultDate='$consultdate' WHERE consultID='$ref'";
    if(mysqli_query($conn,$query)){
        header('Location:../../consultation.php');
    }else{
        echo '<script type="text/javascript">
                alert("Error in  adding consultation!");';
    }
}

if(isset($_POST["delete"])){
    $ref=$_POST["ref"];
    $query="DELETE FROM consult WHERE consultID='$ref'";
    if(mysqli_query($conn,$query)){
        header('Location:../../consultation.php');
    }
    else{
        echo '<script type="text/javascript">
        alert("Error in  deletion consultation!");';
    }
}
?>