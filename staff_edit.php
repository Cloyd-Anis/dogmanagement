<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./includes/styles/bootstrap.min.css">
</head>
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
            <a class="nav-item nav-link" href="consult.php">Consults</a>
            <a class="nav-item nav-link" href="presc.php">Prescription</a>
          </div>
        </div>
    </nav>

    <div class="container mt-3">
        <form action='staff.php' method='POST'>
          <h2>Add Staff</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="first">First Name</label>
                <input type="text" class="form-control" placeholder="" value='John Downey Doe' id="first">
              </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-4">
                <div class="form-group">
                  <label for="middle">Middle Name</label>
                  <input type="text" class="form-control" placeholder="" value='Downy' id="middle">
                </div>
              </div>
      
            <div class="col-md-4">
              <div class="form-group">
                <label for="last">Last Name</label>
                <input type="text" class="form-control" placeholder="" value='Doe' id="last">
              </div>
            </div>
            <!--  col-md-6   -->
          </div>
      
      
          <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-4">
      
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" value='johndoe@gmail.com' placeholder="E-mail">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" placeholder="Address" value='Talamban' id="address">
                </div>
              </div>
      
            <div class="col-md-4">
      
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" value='6942069' placeholder="phone">
              </div>
            </div>
            
            <!--  col-md-6   -->
          </div>
          <!--  row   -->
      
      
      
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>