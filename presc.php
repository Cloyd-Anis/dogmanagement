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
            <a class="nav-item nav-link " href="index.php">Dashboard <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="dogs.php">Dogs</a>
            <a class="nav-item nav-link" href="staff.php">Staff</a>            
            <a class="nav-item nav-link" href="vet.php">Veterinarians</a>
            <a class="nav-item nav-link" href="procedure.php">Procedures</a>
            <a class="nav-item nav-link" href="vaccine.php">Vaccines</a>
            <a class="nav-item nav-link " href="consult.php">Consults</a>
            <a class="nav-item nav-link active" href="presc.php">Prescription</a>
          </div>
        </div>
    </nav>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="#">Add Prescription</a></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">Prescription ID</th>
                <th scope="col">Generic Name</th>
                <th scope="col">Brand Name</th>        
                <th scope="col">Dosage</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rabies Vaccine</td>
                <td>Imovax</td>
                <td>1mL</td>
                <td>Rabies vaccine is an immunization used to prevent rabies in people who have been bitten by an animal or otherwise exposed to the rabies virus.</td>
                <td><a href="#">Info</a></td>
                <td><a href="#">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>HEARTGARD Plus</td>
                <td>Ivermectin/Pyrantel</td>
                <td>1 chewable</td>
                <td>For use in dogs to prevent canine heartworm disease by eliminating the tissue stage of heartworm larvae (Dirofilaria immitis) for a month (30 days) after infection and for the treatment and control of ascarids (Toxocara canis, Toxascaris leonina) and hookworms (Ancylostoma caninum, Uncinaria stenocephala, Ancylostoma braziliense).</td>
                <td><a href="#">Info</a></td>
                <td><a href="#">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>NexGard</td>
                <td>Afoxolaner</td>
                <td>1 chewable</td>
                <td>NexGard® (afoxolaner) is available in four sizes of beef-flavored, soft chewables for oral administration to dogs and puppies according to their weight. Each chewable is formulated to provide a minimum afoxolaner dosage of 1.14 mg/lb (2.5 mg/kg). Afoxolaner has the chemical composition 1-Naphthalenecarboxamide, 4-[5-[3-chloro-5-(trifluoromethyl)-phenyl]-4, 5-dihydro-5-(trifluoromethyl)-3-isoxazolyl]-N-[2-oxo-2-[(2,2,2-trifluoroethyl)amino]ethyl.</td>
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