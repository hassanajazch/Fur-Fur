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
 
//$ok=0;

$email = $_POST["email"];

$sl="UPDATE totalmarks SET count=count+2 WHERE emailid='$email' ";	

if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}




$conn->close();
exit();
?>
