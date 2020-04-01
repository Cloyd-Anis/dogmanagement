<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./includes/styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./includes/styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="index.php">Dashboard</a>
            <a class="nav-item nav-link" href="dogs.php">Dogs</a>
            <a class="nav-item nav-link" href="staff.php">Staff</a>            
            <a class="nav-item nav-link" href="vet.php">Veterinarians</a>
            <a class="nav-item nav-link active" href="#">Procedures <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="vaccine.php">Vaccines</a>
            <a class="nav-item nav-link" href="consult.php">Consults</a>
            <a class="nav-item nav-link" href="presc.php">Prescription</a>
          </div>
        </div>
    </nav>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="#">Add Procedure</a></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Procedure</th>
                <th scope="col">Average Cost</th>        
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Tooth extraction</td>
                <td>2000</td>
                <td><a href="#">Info</a></td>
                <td><a href="#">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Teeth Cleaning</td>
                <td>15000</td>
                <td><a href="#">Info</a></td>
                <td><a href="#">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Fracture repair</td>
                <td>null</td>
                <td><a href="#">Info</a></td>
                <td><a href="#">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>