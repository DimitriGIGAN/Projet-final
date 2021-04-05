<?php 
 // Récuperation de l'id et du champ correspondant //

 $id=$_GET['id'];
$champ=$_GET['champ'];

?>



<!DOCTYPE html>
<html lang="en">
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
    <h1>Modifier la <?php echo $champ; ?></h1>



    <form action="update.php?id=<?php echo $id.'&champ='.$champ; ?>" method="post">
        <input type="text" name="nouvelle_valeur" value="" placeholder="Entrer une nouvelle <?php echo $champ; ?>">
        <input type="submit" value="update">
    </form>


</body>
</html>

                           