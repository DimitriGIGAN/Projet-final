<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "gigan", "Simplon974@", "question");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);

 
// attempt insert query execution
$sql = "INSERT INTO employees (name) VALUES ('$name')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection

mysqli_close($link);

?>