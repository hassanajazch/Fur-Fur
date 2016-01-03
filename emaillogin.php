<?php

$servername = "54.169.152.134";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$id = $_POST["uuid"];

$sql="UPDATE registertable SET regemailid='1' WHERE uuid='$id' ";
$result = $conn->query($sql);
echo $id;
//if ($result->num_rows > 0) {
if ($conn->query($sql) === TRUE) {
 echo "successfully";
}
else {
    echo "nosuccessfully";
}
 


$conn->close();
exit();
?>

