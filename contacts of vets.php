
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "livestock diseases";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

 $sql = "SELECT * FROM registration";
 $result = mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Livestock Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style1.css">
    </head >
    <body>  
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">LIVESTOCK MANAGEMENT SYSTEM</label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="registervet.html">Register as Vet</a></li>
                <li><a class="active" href="contacts of vets.php">Contacts of Vets</a></li>
                <li><a href="index.php">Chat</a></li>
            </ul>    
        </nav>
        <h1>Contact details of Veterinary Doctors</h1><br>

        <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
        <table class="table table-bordered">
        <thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Telephone number</th>
<th>Email</th>
<th>Town</th>
</tr>
</thead>
<?php
$conn = mysqli_connect("localhost", "root", "", "livestock diseases");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT firstname, lastname, telephoneNumber, email, town FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"] . "</td><td>"
. $row["telephoneNumber"]. "</td><td>" . $row["email"]. "</td><td>" . $row["town"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>        
</div>       
</div>
    </body>
</html>