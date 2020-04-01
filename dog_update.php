<?php
    $conn = mysqli_connect("localhost","root","","dogshelter");
    if(!$conn){
        die('Could not connect:' . mysql_error());
    }
    if(isset($_POST['update'])){
        $dogID = $_POST['dogID'];
        $name = $_POST['name'];
        $age = $_POST['selectAgeGroup'];
        $breed = $_POST['breed'];
        $color = $_POST['color'];
        $mark = $_POST['marking'];
        $sex = $_POST['sex'];
        $length = $_POST['length'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bday = $_POST['bday'];
        $date = $_POST['date'];
        $image = $_POST['image'];
        $status = $_POST['status'];
        echo $name;
        echo $age;
        echo $breed;
        echo $color;
        echo $mark;
        echo $sex;
        echo $length;
        echo $height;
        echo $weight;
        echo $bday;
        echo $date;
        echo $image;
        echo $status;
        echo $dogID;
    
        // if(mysqli_query($conn,"UPDATE `dog` SET `dog_name` = '$name' , `age_group` = '$age' , `breed` = '$breed' , `color` = '$color' , `marking` = '$mark',
        //                  `sex` = '$sex', `length` = '$length', `height` = '$height', `weight` = '$weight', `birthdate` = '$bday', `created_at` = '$date',
        //                  WHERE `dogID`='$dogID'" )){  
        //      echo "<script>alert(\"Data Updated!\");</script>";
        // }else{
        //     echo "<script>alert(\"Failed to Update!\");</script>";
        // }
    }

?>





<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./includes/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./includes/assets/styles/styles.css">    
    <link href="./includes/assets/icons/css/all.css" rel="stylesheet">
    <script>
        function openSlideMenu(){
            document.getElementById('menu').style.width = '280px';
            document.getElementById('content').style.marginLeft = '280px';
            document.getElementById('menu1').style.display = 'block';
            document.getElementById('menu2').style.display = 'block';
            document.getElementById('menu3').style.display = 'block';
            document.getElementById('menu4').style.display = 'block';
            document.getElementById('menu5').style.display = 'block';
            document.getElementById('menu6').style.display = 'block';
        }

        function closeSlideMenu(){
            document.getElementById('menu').style.width = '85px';
            document.getElementById('content').style.marginLeft = '85px';
            document.getElementById('menu1').style.display = 'none';
            document.getElementById('menu2').style.display = 'none';
            document.getElementById('menu3').style.display = 'none';
            document.getElementById('menu4').style.display = 'none';
            document.getElementById('menu5').style.display = 'none';
            document.getElementById('menu6').style.display = 'none';
        }       
    </script>
</head>
<body>        
    <div id="content">
        <span class="slide">
            <a href="#" onclick="openSlideMenu()">
                <i class="fas fa-bars"></i> 
            </a>
        </span>

        <div id="menu" class="nav">
            <a href="#" class="close" onclick="closeSlideMenu()">
                <i class="fas fa-times"></i>
            </a>
            <ul class="mt-5 pt-3">
                <li ><a href="index.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu1">Dashboard</span>
                        </div>
                    </div>
                </a></li>
                <li><a href="dogs.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-dog active_span"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item active_span" id="menu2">Dogs</span>
                        </div>
                    </div>                    
                </a></li>
                <li><a href="vaccined.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu3">Vaccined</span>
                        </div>
                    </div>                    
                </a></li>
                <li><a href="adopted.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-paw"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu4">Adopted</span>
                        </div>
                    </div>                    
                </a></li>
                <li ><a href="staff.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu5">Staffs</span>
                        </div>
                    </div>
                </a></li>
                <li ><a href="vet.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu6">Vets</span>
                        </div>
                    </div>
                </a></li>                
                            
            </ul>
        </div>
        <div class="container mt-3">
            <form action="dog_update.php" method="POST">
                <input type="hidden"  name="dogID" value = "<?php echo $dogID;?>">
                <h2>UPDATE DOG</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name"  id="first">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-4">
                        <label for="selectAgeGroup">Age Group</label>
                        <select class="form-control" id='selectAgeGroup' name='selectAgeGroup'>
                            <option value='Less than 6 months'>Less than 6 months</option>
                            <option value='6-18 months'>6-18 months</option>
                            <option value='1-3 years'>1-3 years</option>
                            <option value='6-10+ years'>6-10+ years</option>
                        </select><br>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first">Breed</label>
                            <input type="text" class="form-control" placeholder="Breed" name="breed" id="sec">
                        </div>
                    </div>

                    <!--  col-md-6   -->
                </div>
                <!--End of 1stRow-->
                <div class="row">
                    <div class="col-md-4">
                        <label for="Color">Color</label>
                        <select class="form-control" id='color' name='color'>
                            <option value='Brown'>Brown</option>
                            <option value='Red'>Red</option>
                            <option value='Black'>Black</option>
                            <option value='White'>White</option>
                            <option value='Gold'>Gold</option>
                            <option value='Yellow'>Yellow</option>
                            <option value='Cream'>Cream</option>
                            <option value='Blue'>Blue</option>
                            <option value='Grey'>Grey</option>
                        </select><br>
                    </div>
                    <div class="col-md-4">
                        <label for="Marking">Marking</label>
                        <select class="form-control" id='marking' name='marking'>
                            <option value='None'selected>None</option>
                            <option value='Color and Tan'>Color and Tan</option>
                            <option value='BiColor'>BiColor</option>
                            <option value='TriColor'>TriColor</option>
                            <option value='Merle'>Merle</option>
                            <option value='Tuxedo'>Tuxedo</option>
                            <option value='Spotted'>Spotted</option>
                            <option value='Flecked/Ticked/Speckled'>Flecked/Ticked/Speckled</option>
                            <option value='Brindle'>Brindle</option>
                            <option value='Saddle/Blanket'>Saddle/Blanket</option>
                            <option value='Sable'>Sable</option>
                        </select><br>
                    </div>
                    <div class="col-md-4">
                        <p>Sex</p>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="Male" name='sex' id='sex' checked>
                            <label for="male" class='form-check-label'>Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="Female" name='sex' id='sex'>
                            <label for="female" class='form-check-label'>Female</label>
                        </div>
                    </div>
                </div> <!-- End of 2nd row -->

                <div class="row">
                    <!--  col-md-6   -->
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="length">Length</label>
                            <input type="number" class="form-control" name="length" id="length" placeholder="Length(cm)">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="height">Height</label>
                            <input type="number" class="form-control" name="height" placeholder="Height(cm)" id="height">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight(kg)">
                        </div>
                    </div>
                </div> <!-- End of 3rd row-->

                <div class="row">
                <div class="col-md-4">
                         <div class="form-group">
                            <label for="weight">Birthdate</label>
                            <input type="date" class="form-control" id="create" name="bday" placeholder="Birthdate">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" class="form-control" name="image" id="image" >
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="weight">Created at</label>
                            <input type="date" class="form-control" id="create" name="date" placeholder="Created at">
                        </div>
                    </div>
                    <div class="col-md-4">
                    <p>Status</p>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name='status' value="Active" id='status' checked>
                    <label for="active" class='form-check-label'>Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name='status' value="Inactive" id='status'>
                    <label for="inactive" class='form-check-label'>Inactive</label>
                </div>
                </div>
            
                <buttony type="submit" class="btn btn-primary" name="update" >Update</button>
                </div>
    </div>
            </form>
        </div>
    </div>
     

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>