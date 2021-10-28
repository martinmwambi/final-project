<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registration of vets";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$telephoneNumber=$_POST['telephoneNumber'];
$email=$_POST['email'];
$town=$_POST['town'];


$sql = "INSERT INTO `registration`(`firstname`, `lastname`, `telephoneNumber`, `email`, `town`) VALUES ('$firstname','$lastname','$telephoneNumber','$email','$town')";

$insert = mysqli_query($conn, $sql);
if (!$insert){
echo "Error";
}
else{
echo "Registration successful";
}
?>