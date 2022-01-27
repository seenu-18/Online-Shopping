<!DOCTYPE html>
<html>
<body>

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

$sql = "SELECT name, email, password, mobile,age, message FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> <b>name:</b> ". $row["name"]."  <br><br><b>email:</b> ". $row["email"]. " <br><br><b>password:</b> ".$row["password"]. "   <br><br><b>mobile:</b> " . $row["mobile"] . " <br><br>  <b>age:</b> " . $row["age"] . "  <br><br>  <b>message:</b> " . $row["message"] . " 
<br><br><br><br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>