<?php

$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$id = $_POST["regid"];
$sql = "INSERT INTO gcmtable (postid,commenttext)
VALUES ('$id','$commenttext')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "nosuccessfully";
}

$conn->close();
exit();
?>
