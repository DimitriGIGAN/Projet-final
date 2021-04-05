
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Accueil</title>

</head>

<body>
  <header>
    <!-- Image and text -->
    <nav class="navbar ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/Service Pro.png" alt="" width="30" height="24" class="d-inline-block align-top">
          SERVICE PRO
        </a>
      </div>
    </nav>
  </header>
  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "gigan", "Simplon974@", "servicepro");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM recrute";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>nom</th>";
            echo "<th>prenom</th>";
            echo "<th>email</th>"; 
            echo "<th>num/th>";
            echo "<th>adress</th>";
            echo "<th>postal</th>";
            echo "<th>ville</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prenom'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";               
            echo "<td>" . $row['num'] . "</td>";
            echo "<td>" . $row['adress'] . "</td>";
            echo "<td>" . $row['postal'] . "</td>";
            echo "<td>" . $row['ville'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>



      
</div>

    </div>

    </div>
   
<!-- Footer -->
<footer class="bg-light  text-lg-start">
 
  <div class="container">
  
    <div class="row">
    

      
      </div>
     
    </div>
   
  </div>


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © Service Pro 2021 Copyright
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

</html>