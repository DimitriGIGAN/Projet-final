<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "gigan", "Simplon974@", "servicepro");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$num = mysqli_real_escape_string($link, $_REQUEST['num']);
$adress = mysqli_real_escape_string($link, $_REQUEST['adress']);
$postal = mysqli_real_escape_string($link, $_REQUEST['postal']);
$ville = mysqli_real_escape_string($link, $_REQUEST['ville']);
 
// Attempt insert query execution
$sql = "INSERT INTO recrute (nom, prenom, email,num,adress,postal,ville) VALUES ('$nom', '$prenom', '$email','$num', '$adress', '$postal','$ville')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:questionnaire.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "INSERT INTO reponse  (solve) VALUES ('$solve')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>