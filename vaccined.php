<?php
    $dbname = 'dogshelter';

    $conn = mysqli_connect('localhost', 'root', '', $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "select * from vaccined_dogs ";
    $result = mysqli_query($conn, $sql);

    $sql = "select count(*) as count from vaccined_dogs";
    $count = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($count);

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
                            <i class="fas fa-dog"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu2">Dogs</span>
                        </div>
                    </div>                    
                </a></li>
                <li><a href="vaccined.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-syringe active_span"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item active_span" id="menu3">Vaccined</span>
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
                
        <table class="table table-hover">
            <thead>
                <th scope="col"><a href="vacc_add.php">NEW VACCINATION</a></th>
                <th scope="col">Number of vaccinated dogs: <?php echo $count['count'];?></th>
            </thead>
        </table>
        <table class="table table-hover">
            <thead>            
            <tr>
                <th scope="col">Dog ID</th>
                <th scope="col">Dog Name</th>
                <th scope="col">Vet Name</th>
                <th scope="col">Vaccine</th>      
                <th scope="col">Date of Vaccination</th>
                <th scope="col">Next Visit</th>                
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                
            </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result) > 0) : ?>
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <th scope="row">
                                <form action="dog.profile.php" method='POST'>
                                    <input type="hidden" value='<?php echo $row['dogID'];?>' name='dog_id'>
                                    <button class='btn btn-primary btn-sm' type='submit' name='submit'><?php echo $row['dogID']; ?></button>
                                </form>
                            </th>
                            <td>
                                <?php 
                                    $dogID = $row['dogID'];
                                    $sql = "select dog_name as name from dog where dogID='$dogID' "; 
                                    $dog_name = mysqli_query($conn, $sql);
                                    $dog_name = mysqli_fetch_assoc($dog_name);                             
                                ?>
                                <form action="dog.profile.php" method='POST'>
                                    <input type="hidden" value='<?php echo $row['dogID'];?>' name='dog_id'>
                                    <button class='btn btn-primary btn-sm' type='submit' name='submit'><?php echo $dog_name['name']; ?></button>
                                </form>
                            </td>
                            <td>
                                <?php 
                                    $vetID= $row['vetID'];
                                    $sql = "select fname as name from veterinarian where vetID='$vetID' "; 
                                    $name = mysqli_query($conn, $sql);
                                    $name = mysqli_fetch_assoc($name);                             
                                ?>
                                <form action="dog.profile.php" method='POST'>
                                    <input type="hidden" value='<?php echo $row['vetID'];?>' name='vet_id'>
                                    <button class='btn btn-primary btn-sm' type='submit' name='submit'><?php echo $name['name']; ?></button>
                                </form>
                            </td>
                            <td><?php echo $row['vaccName'] ; ?></td>
                            <td><?php echo $row['date_of_vaccination'] ; ?></td>
                            <td><?php echo $row['next_visit'] ; ?></td>
                            <td>
                                <form action="#" method='POST'>
                                    <input type="hidden" value='<?php echo $row['vetID'];?>' name='vet_id'>
                                    <button class='btn btn-primary btn-sm' type='submit' name='submit'>Vaccine Details</button>
                                </form>
                            </td>
                            <td>
                                <form action="./vacc_update.php" method='POST'>
                                    <input type="hidden" value='<?php echo $row['vacc_id'];?>' name='vacc_id'>
                                    <button class='btn btn-primary btn-sm' type='submit' name='submit'>Update</button>
                                </form>
                            </td>
                            <td>
                                <form action="./handlers/delete_vac.php" method='POST'>
                                    <input type="hidden" value='<?php echo $row['vacc_id'];?>' name='vacc_id'>
                                    <button class='btn btn-primary btn-sm' type='submit' name='submit'>Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile ?>
                <?php endif ?>
            </tbody>
        </table>                              
    </div>    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>