<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dogshelter";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 $query="SELECT vetID,CONCAT('Dr ',fname,' ',lname)as name FROM veterinarian";
 $query2="SELECT consultID, CONCAT(dog_condition,' - ',consult_date)as identifier FROM consult";
 $consult=mysqli_query($conn,$query2);
 $doctors=mysqli_query($conn,$query);
?> 
<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./includes/styles/bootstrap.min.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jcOqqMsYHJ-rDHCS8_tMwP4g-rrckerz9NgIpcULgLY3ZMdB9MEk5a-EQ8ThsmOXsQophzlp42Y1YQmTaNwVGkkYEiGQMpNbsgED2XHul4tctGAFmxxmSronMlcAiozMM-1lvtx-KlOxA032NhfLb4MtD7nT5qqsvL6sRreFL-iJaOucq1G-W7lHqBFHiHI2XkXhYZsf8oSuWz25VAKqgRvYgrTYbjLWzYgI0WHs9dMW97iFOszq8LZm-s2GWaVaQl6Xid-ssI7fK29a3KHrwx--chyVit3tQRw-BJ2gw9o8OkIBRx3CMUHIiXSXCXyyzv3R8Jv-0GJ5_EypLUTONMwJsjUVHlgXPZInnEjG8XgNkHNithAYM6Px-y1YnmnINYufyb93yoxqmD7kE3J4P5NEYIiOXD0ghbujFtVHnV4" charset="UTF-8"></script></head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Dashboard <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="dogs.php">Dogs</a>
            <a class="nav-item nav-link" href="staff.php">Staff</a>            
            <a class="nav-item nav-link" href="vet.php">Veterinarians</a>
            <a class="nav-item nav-link" href="procedure.php">Procedures</a>
            <a class="nav-item nav-link" href="vaccine.php">Vaccines</a>
            <a class="nav-item nav-link active" href="consult.php">Consults</a>
            <a class="nav-item nav-link" href="presc.php">Prescription</a>
          </div>
        </div>
    </nav>

    <div class="container mt-3">
        <form action="includes/handlers/dogPrescriptionHandler.php" method="POST">
          <h2>Add Prescription</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="first">Generic Name</label>
                <input type="text" name="genericName" class="form-control" placeholder="" id="first">
              </div>
            </div>
            <!--  col-md-6   -->

            
            <div class="col-md-4">
            <label for="next">Brand Name</label>
                <input type="text" name="brandName" class="form-control" placeholder="" id="next">
            </div>
      
            
            <!--  col-md-6   -->
          </div>
      
      
          <div class="row">
            <!--  col-md-6   -->
           

            
      


            <div class="col-md-4">
            <label for="cost">Veterinarian</label>
                <select name="vet" class="form-control">
                  <?php
                    if($doctors){
                      while($row=mysqli_fetch_assoc($doctors)){
                        printf("<option value='%d'>%s</option>",$row["vetID"],$row["name"]);
                      }
                    }
                  ?>

                </select>
            </div>
            <div class="col-md-4">
            <label for="cost">Prescription Description</label>
                <input type="text" name="prescDescription" class="form-control" placeholder="" id="cost">
            </div>
            
            <!--  col-md-6   -->
          </div>
          <!--  row   -->

          <div class="row">
            <!--  col-md-6   -->

            <div class="col-md-4">
            <label for="cost">Consult</label>
                <select name="dog" class="form-control">
                  <?php
                    if($consult){
                      while($row=mysqli_fetch_assoc($consult)){
                        printf("<option value='%d'>%s</option>",$row["consultID"],$row["identifier"]);
                      }
                    }
                  ?>

                </select>
            </div>
            
            
            
            <!--  col-md-6   -->

            

          </div>
      
      
          <button type="submit" name="add" class="btn btn-primary">Add</button>
        </form>
      </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>