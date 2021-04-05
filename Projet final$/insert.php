<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("185.98.131.148", "servi1617577", "Simplon974", "servi1617577");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$question = mysqli_real_escape_string($link, $_REQUEST['question']);

 
// attempt insert query execution
$sql = "INSERT INTO employees (question) VALUES ('$question')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
header('Location: question.php');
mysqli_close($link);

?>