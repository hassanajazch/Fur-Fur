<?php

$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=urldecode($_POST["id"]);

   $id=(int)$id;

//	$sql = "select * from mynewpost where id>'$id' order by id " ;
$sql="SELECT * FROM mynewpost ORDER BY count desc";
	$result = $conn->query($sql);
	$userData = array();
	if ($result->num_rows > 0) {
	    // output data of each row
	 
	    while($row = $result->fetch_assoc()) {
			$tmp = array('id' => $row["id"],'uuid' => $row["uuid"],'email' => $row["email"], 'posttext' => $row["posttext"], 'imageurl' => $row["imageurl"],'count' => $row["count"],'gcmid' => $row["gcmid"],'orientation' => $row["orientation"]

                                                    , 'myuni' => $row["myuni"]);
			array_push($userData, $tmp);
			
		}
	}
//$userData = array_reverse($userData,true);
	echo json_encode($userData);
	$conn->close();
	exit;
?>	