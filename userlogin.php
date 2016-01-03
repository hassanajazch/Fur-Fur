<?php
$servername = "54.169.152.134";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email=urldecode($_POST["email"]);
$password=urldecode($_POST["password"]);
   //$postid=(int)$postid;

$sql="SELECT * FROM logintable where pasword='$password' and email='$email' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
//echo "successfully";

$uni = $result->fetch_object();
$uni = $uni->university;
echo $uni;
}
else
{
echo "Notsuccessfully";
}
	$conn->close();
	exit();
?>	