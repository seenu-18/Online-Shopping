<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$mobile=$_POST["mobile"];
$age=$_POST["age"];

$sql = "INSERT INTO l (name, email, password, mobile, age)
VALUES ('$name','$email','$password',$mobile,'$age')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successfull";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?><br><br><br><br>
<center><pre><h1> THANKS FOR REGISTERING</h1><br><br> <br><b>Please Visit Once again<b><a href="clothing.html"><h3>Return Back</h3></a><br><br><br><br>
