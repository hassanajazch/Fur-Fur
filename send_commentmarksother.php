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
 
$email=urldecode($_POST["email"]);
//$email='12019020027@umt.edu.pk';
$sl="UPDATE totalmarks SET count=count+1 WHERE emailid='$email' ";	
//}
if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}





$conn->close();
exit();
?>
