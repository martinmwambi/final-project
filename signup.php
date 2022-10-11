<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "livestock diseases";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$username=$_POST['username'];
$email=$_POST['email'];
$telephoneNumber=$_POST['telephoneNumber'];
$password=$_POST['password'];



$sql = "INSERT INTO `login`(`username`, `email`, `telephoneNumber`, `password`) VALUES ('$username','$email','$telephoneNumber','$password')";

$insert = mysqli_query($conn, $sql);
if (!$insert){
echo "Error";
}
else{
echo "<h1>Sign up successful <br> Click below to go to login page <br> <a href=\"login.html\">Go back to Login page</a><h1>";
}
?>

