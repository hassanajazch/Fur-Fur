<?php

$servername = "54.169.152.134";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$postid=urldecode($_POST["postid"]);
  
 $postid=(int)$postid;

$sql = "select count from mynewpost where  id='$postid' " ;
$result1 = $conn->query($sql);

if ($conn->query($sql) === TRUE) {

//echo "count";

$count = $result1->fetch_object();

$count = $count->count;
 
echo count;

}
else
{
echo "not";
}
////////

	$conn->close();
	exit;
?>	