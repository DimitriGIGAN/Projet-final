

<?php 
 // Récuperation de l'id //
 $id=$_GET['id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Simple Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
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
 




  <div class="row">




    <div class="col-12">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Liste de questions</h2>
                        
                    </div>
                    <form action="réponse.php" method="post">
          <div class="row">
       
          <div class="col-12 ">
          <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table  ">';
                                echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>#</th>";
                                        echo "<th>Name</th>";

                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['question'] . "</td>";

                                        echo "<td>";
                                           
                                        

                                            echo "<div class=\"form-check\">\n";
                                            echo "  <input class=\"form-check-input\" type=\"radio\" name=\"q[".$row['id']."]\" id=\"flexRadioDefault1\">\n";
                                            echo "  <label class=\"form-check-label\" for=\"flexRadioDefault1\">\n";
                                            echo "   oui\n";
                                            echo "  </label>\n";
                                            echo "</div>\n";
                                            echo "<div class=\"form-check\">\n";
                                            echo "  <input class=\"form-check-input\" type=\"radio\" name=\"q[".$row['id']."]\"  id=\"flexRadioDefault2\" >\n";
                                            echo "  <label class=\"form-check-label\" for=\"flexRadioDefault2\">\n";
                                            echo "    non\n";
                                            echo "  </label>\n";
                                            echo "</div>";
                                            
                                         
                                        echo  "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                   
                    // Close connection
                    mysqli_close($link);
                    
                    ?>
          </div>
         
        <!--fin question-->
        <input type="submit" value="Submit">
</form>
 <!--formulaire fin -->
      </div>




      
</div>

    </div>

    </div>
        </div>
      </div>




    </div>

    </form>
  </div>
  </div>
  </div>


  </div>
  </div>


  </div>

  </div>
</div>
 

<!-- Footer -->
<footer class="bg-light  text-lg-start">
 
  <div class="container">
  
    <div class="row">
    
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Service Pro</h5>

        <p>
        Toutes les activités de services à la personne restent éligibles au crédit d’impôt Services à la personne, y compris les activités réalisées hors du domicile dès lors que ces prestations sont comprises dans une offre globale de services incluant des activités effectuées à domicile.
        </p>
      </div>
      
      </div>
     
    </div>
   
  </div>


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
      
</body>

</html>