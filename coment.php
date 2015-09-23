<?php
$servername = "mysql10.000webhost.com";
$username = a7983884;
$password = imammehdi0;
$dbname = a7983884_mannan0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$posttext = $_POST["posttext"];
$count = $_POST["count"];
$imageurl = $_POST["imageurl"];
$count=(int) $count;
$sql = "INSERT INTO mynewpost (posttext, imageurl, count)
VALUES ($posttext, $imageurl, $count)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>