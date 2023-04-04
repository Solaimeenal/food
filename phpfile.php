<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mysql");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name= mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone= mysqli_real_escape_string($link, $_POST['phone']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$food = mysqli_real_escape_string($link, $_POST['food']);

// Attempt insert query execution
$sql = "INSERT INTO foodsystem(name,email,phone,address,food) VALUES ('$name','$email','$phone','$address','$food')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

