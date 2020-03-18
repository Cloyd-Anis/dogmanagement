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
            <form>
            <h2>UPDATE DOG PROFILE</h2>
            <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                    <label for="first">Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="first">
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
                    <p>Sex</p>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name='sex' id='male'>
                    <label for="male" class='form-check-label'>Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name='sex' id='female'>
                    <label for="female" class='form-check-label'>Female</label>
                </div>
                </div>
                <!--  col-md-6   -->
            </div>
        
        
            <div class="row">
                <!--  col-md-6   -->
                <div class="col-md-4">
        
                    <div class="form-group">
                    <label for="marking">Marking</label>
                    <input type="text" class="form-control" id="marking" placeholder="Marking">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" placeholder="Height" id="height">
                    </div>
                </div>
        
                <div class="col-md-4">
        
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight" placeholder="Weight">
                </div>
                </div>
                
                <!--  col-md-6   -->
            </div>
            <!--  row   -->

            <div class="row">
                <!--  col-md-6   -->
                <div class="col-md-4">
        
                    <div class="form-group">
                    <label for="length">Length</label>
                    <input type="number" class="form-control" id="length" placeholder="Length">
                    </div>
                </div>

                <div class="col-md-4">
                    <p>Status</p>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name='status' id='active'>
                    <label for="active" class='form-check-label'>Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name='status' id='inactive'>
                    <label for="inactive" class='form-check-label'>Inactive</label>
                </div>
                </div>
                
                <!--  col-md-6   -->
            </div>
        
        
            <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>                            
    </div>    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>