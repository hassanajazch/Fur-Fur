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
 
$ok=0;
$uuid = $_POST["uuid"];
$count = $_POST["count"];
////$emailid = $_POST["emailid"];
$count=(int)$count;
$email="No";
$sql = "INSERT INTO totalmarks (emailid,uuid,count)
VALUES ('$email','$uuid','$count')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
$ok=1;
} else {
    echo "nosuccessfully";
}
$conn->close();
exit();
?>
