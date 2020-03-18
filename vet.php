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
                            <i class="fas fa-user-md active_span"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item active_span" id="menu6">Vets</span>
                        </div>
                    </div>
                </a></li>
                            
            </ul>
        </div>

        <table class="table table-hover">
            <thead>
                <th scope="col"><a href="vet_add.php">Add Vet</a></th>
            </thead>
        </table>
        <table class="table table-hover">
            <thead>                
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Austine Demont Demay</td>
                    <td>09957486789</td>
                    <td>austinedemay@gmail.com</td>
                    <td><a href="vet_profile.php">Profile</a></td>
                    <td><a href="vet_update.php">Update</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Hagan Depaul Gagnon</td>
                    <td>09453634789</td>
                    <td>hagangagnon@gmail.com</td>
                    <td><a href="vet_profile.php">Profile</a></td>
                    <td><a href="vet_update.php">Update</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Blanche Jacques Mongeau</td>
                    <td>09961024781</td>
                    <td>blanchemongeau@gmail.com</td>
                    <td><a href="vet_profile.php">Profile</a></td>
                    <td><a href="vet_update.php">Update</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <!-- <?php if(mysqli_num_rows($result) > 0) : ?>                
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <th scope="row"><?php echo $row["vetID"]; ?></th>
                            <td>
                                <?php 
                                    echo $row["FName"]." "; 
                                    echo $row["MI"].". ";
                                    echo $row["LName"];
                                ?>
                            </td>
                            <td><?php echo $row["contact"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["clinic"]; ?></td>
                            <td><form action="vet_profile.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row["vetID"]; ?>">                            
                                <button class ="btn btn-primary" type="submit" name='profile' value="Submit">Profile</button>                     
                            </form></td>
                            <td><form action ="vet_update.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row["vetID"]; ?>">
                                <button class ="btn btn-primary" type="submit" name='update' value="Submit">Update</button> 
                            </form></td>
                            <td><form method="POST">
                                <input type="hidden" name="id" value="<?php echo $row["vetID"]; ?>">                            
                                <button class ="btn btn-primary" type="submit" name='delete' value="Submit">Delete</button>                     
                            </form></td>                    
                        </tr>                
                    <?php endwhile; ?>
                <?php endif; ?>         -->
            </tbody>
        </table>
    </div>    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>