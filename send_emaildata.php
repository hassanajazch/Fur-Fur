<?php

$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$c=0;
$uuid=$_POST["uuid"];
$gcmid=$_POST["gcmid"];
$regemailid=$_POST["regemailid"];

$date = date('Y-m-d');

$sql = "INSERT INTO registertable(uuid, gcmid,date,regemailid)
VALUES ('$uuid','$gcmid', '$date','0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "norecord";


}


	$conn->close();
	exit;
?>	