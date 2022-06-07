<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
       body
    {background-image:url("com.png");
    position: relative;
	min-height: 100vh;
	background-size: cover;
	background-position: right;
	/* display: flex;
	justify-content: space-between;
	align-items: center; */
    }
             .hero::after { background-color:#17202A  ;
  content: ""; 
             
             display: block; position: absolute;background-size: cover; top: 0px; left: 0px; width: 100%; height: 100%; z-index: -1; opacity: 0.75; }
             .dfg{
    
     background: rgba(255, 255, 255, 0.05);
     box-shadow: 0 15px 35px rgba(0,0,0,0.2);
     border-radius: 15px;
     backdrop-filter: blur(10px);
                 color: white;
                 width: 40%;
             }
             
  </style>
</head>

<body>
<div class="hero">  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-primary " href="index.php">Laiba Akram</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="list.php">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Sign up</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    </div> <!-- Navigation -->

 

    <div class="container dfg">
 

  <!-- Main Content -->

 
      <h1 class="text-center text-white">Students Table</h1>
      <table class="table table-bordered text-center mt-4 ">
        <thead>
          <tr class=" text-primary">
            <th style="width: 10% ;">ID</th>
            <th style="width: 40% ;">Name</th>
            <th style="width: 50% ;">Email</th>
          </tr>
        </thead>
        <tbody class="text-white">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db = "cit";
          // Create connection
          $connection = mysqli_connect($servername, $username, $password, $db);
          if (!$connection) {
            die("Connection failed" . mysqli_connect_error());
          }
          $sql = "SELECT id, name, email from students";
          $result = mysqli_query($connection, $sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr class=''><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
            }
            echo "</table>";
          } else {
            
          }
          $connection->close();
          ?>
        </tbody>
      </table>
    </div>

</div>
      
  <!-- Footer  -->
  <div>
    <hr class="text-white">
    <footer class="container-fluid text-white">
      <div class="text-center">
        <p class="mb-0">&#169; All Rights Reserved by Laiba Akram  <?php echo date('Y'); ?></p>
        <p>Project Of TheCITTeam Design by Laiba Akram</p>
      </div>
    </footer>
  </div>
       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>