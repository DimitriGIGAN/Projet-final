
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
        <a class="navbar-brand" href="index.php">
          <img src="img/Service Pro.png" alt="" width="30" height="24" class="d-inline-block align-top">
          SERVICE PRO
        </a>
        <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="select_all.php">Recrutement</a>
  </li>
<li>
<li>
      <a href="logout.php" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
       Deconnexion
      </a>
    </li>
  <!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 4, 2021 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</li>

</ul>
      </div>
    </nav>
  </header>


<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold">VOTRE TEMPS EST PRECIEUX : NE LE GASPILLE PAS</br>
Prenez soin de vous !</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">UNE PRESTATION, UNE AIDE, UN ACCOMPAGNEMENT
SERVICES A LA PERSONNE AUX PARTICULIERS
 AUX AIDANTS, AUX CLIENTS, AUX PERSONNES ÂGÉES</p>

  </div>

</div>
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







<div class="container py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">Nos Services</h2>

  <div class="row row-cols-3 align-items-stretch py-5">
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Entretien de la maison</h3>
          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Préparation de repas à domicile</h3>

        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Soutien scolaire ou cours à domicile</h3>
          
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="row">
    
      <div class="col-12 text-center mt-5">
        <H1>NOUS RECRUTONS </H1>
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
        <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" value="Submit">Valider</button>
 
</form>
 <!--formulaire fin -->
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