<?php
$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$uuid=urldecode($_POST["uuid"]);
//$posttext=urldecode($_POST["posttext"]);
 //  $postid=(int)$postid;

	//$sql = "select * from newpost " ;
$sql="SELECT * FROM totalmarks where uuid='$uuid'";
	$result = $conn->query($sql);
	$userData = array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			$tmp = array('emailid' => $row["emailid"],  'uuid' => $row["uuid"],  'count' => $row["count"]);
			array_push($userData, $tmp);
			
		}
	}
//$userData = array_reverse($userData,true);
	echo json_encode($userData);
	$conn->close();
	exit();
?>	