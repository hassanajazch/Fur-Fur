<?php
$servername = "54.169.152.134";
$username = "root";
$password = "hassan";

//$dbname = "a3214356_yikyak";
$dbname = "Bilal";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Id = $_POST["Id"];
$Name = $_POST["Name"];
//$Id='1001';
//$Name='asd';
$sql = "INSERT INTO person (ID,Name)

VALUES ('$Id','$Name');

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
//$ok=1;
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//exit();

$conn->close();


?>		