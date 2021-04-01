
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
  <div class="reunion p-4 p-md-5 text-white rounded">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Garde enfant .png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Repassage .png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Menage .png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row">
      <div class="col-6">
        <img src="img/Garde d'enfant (1).png" class="img-fluid" alt="Responsive image">
    
  </div>
  <div class="col-6">
    <img src="img/Garde d'enfant.png" class="img-fluid" alt="Responsive image">
  </div>
</div>








    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 mt-5">
        <H1>NOUS RECRUTONS </H1>
      </div>
      <div class="col-4"></div>
    </div>
    <!--formulaire debut -->
    <form action="recrute.php" method="post">
    <div class="row m-5">
      <div class="col-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="nom" placeholder="">
          <label for="floatingInput">Nom</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="prenom" placeholder="">
          <label for="floatingInput">Prenom</label>
        </div>
        
      </div>

    </div>
    
    <div class="row m-5">
      <div class="col-6">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" name="num" placeholder="+262">
          <label for="floatingInput">Numéro </label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
      </div>
    </div>
  
    <div class="row m-5">
      <div class="col-6">
        <div class="form-floating mb-3">
          <input type="address" class="form-control" name="adress" placeholder="3 allez des zinnias">
          <label for="floatingInput">Adresse </label>
        </div>
        
      </div>
      <div class="col-3">
      
            <div class="form-floating mb-3">
              <input type="postal" class="form-control" name="postal" placeholder="97490">
              <label for="floatingInput">Code postal</label>
            </div>
          </div>

          <div class="col-3">
            <div class="form-floating mb-3">
              <input type="ville" class="form-control" name="ville" placeholder="vile">
              <label for="floatingInput">Ville</label>
            </div>
          </div>
        </div>
         
        <input type="submit" value="Submit">
</form>
 <!--formulaire fin -->
      </div>




      
</div>

    </div>

    </div>
   

</body>

</html>