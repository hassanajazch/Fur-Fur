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

//////////////

$sql = "select * from registertable where  uuid= '$uuid' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo "alreadyrecord";
}
////////////////
else
{
$sq = "INSERT INTO registertable(uuid, gcmid,date,regemailid)
VALUES ('$uuid','$gcmid', '$date','0')";

if ($conn->query($sq) === TRUE) {
    echo "successfully";
} 
else {
    echo "notsucess";


}

}
	$conn->close();
	exit;
?>	