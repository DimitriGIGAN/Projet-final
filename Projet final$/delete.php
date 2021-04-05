<?php
$id=$_GET['id'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("185.98.131.148", "servi1617577", "Simplon974", "servicepro");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM employees WHERE id=".$id."";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
    header("location:question.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>