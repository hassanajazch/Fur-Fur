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
$postid = $_POST["postid"];
$userid = $_POST["userid"];

$postid=(int)$postid;
$commenttext = $_POST["commenttext"];

$sql = "INSERT INTO comment (postid,commenttext,userid)
VALUES ('$postid','$commenttext','$userid')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
$ok=1;
} else {
    echo "nosuccessfully";
}
$conn->close();
exit();
?>
