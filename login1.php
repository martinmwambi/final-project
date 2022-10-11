<?php
$host="localhost";
$user="root";
$password="";
$db="livestock diseases";

$conn=mysqli_connect($host,$user,$password,$db);

$username = $_POST['username'];
$password = $_POST['password'];

$sql="select * from login where username='".$username."' AND password='".$password."'";

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
header("location: home.php");

exit();
}
else{
echo "ERROR!!. You have entered incorrect  username or password";
exit();
}
?>

