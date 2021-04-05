

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
        <a class="navbar-brand" href="index.php">
          <img src="img/Service Pro.png" alt="" width="30" height="24" class="d-inline-block align-top">
          SERVICE PRO
        </a>
      </div>
    </nav>
    
  </header>
 
<div class="row">
  <div class="col-2"> 
  <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px;">

  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="index.php" class="nav-link active">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="xvx.php"/></svg>
        Page d'accueil 
      </a>
    </li>
    <li>
      <a href="logout.php" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
       Deconnexion
      </a>
    </li>
   
  </ul>

  </div>
  <hr>
</div>
  <div class="col-10">
  <div class="row">

    <div class="col-12">
      <H1 class="bg-dark text-white text-center" >AJOUT DE QUESTION </H1>
    </div>

  </div>
  <div class="row m-5">

    <div class="col-4">

      <div class="col-sm-12">
        <h2 class=" text-white text-center">Ajouter une question </h2>
      </div>

      <form action="insert.php" method="post">
    
      <textarea name="question" class="form-control <?php echo (!empty($question_err)) ? 'is-invalid' : ''; ?>"><?php echo $question; ?></textarea>
                            <span class="invalid-feedback"><?php echo $question_err;?></span>
      
          <button type="submit" class="btn btn-primary mt-2 col-12" value="Submit">Valider</button>
     
      </form>

     
    </div>



    <div class="col-8">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Liste de questions</h2>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table  table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Question</th>";

                                        echo "<th></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<th>".$row['question']."<a href=\"modifier.php?id=".$row['id']."&" . "champ=question\">🖊</a></th>\n";

                                        echo "<td>";
                                          
                                        echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
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