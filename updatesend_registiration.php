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
$gcmid = $_POST["gcmid"];

$sl="UPDATE registertable SET gcmid='$gcmid' WHERE uuid='$id' ";
if ($conn->query($sl) === TRUE) {
 echo "successfully";
}
else {
    echo "nosuccessfully";
}

$conn->close();
exit();
?>
