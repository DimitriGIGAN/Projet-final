<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
echo "bienvenue ".$_SESSION["username"]; 
if($_SESSION["username"]=="superadmin")
{
    echo "J'ai vérifié ton identité et tu peux supprimer des films";
}else {
    echo "J'ai vérifié ton identité et tu ne peux pas supprimer des films";

}

?>
