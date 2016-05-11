<?php

$servername = "54.169.152.134";
$username = "root";
$password = "hassan";

$dbname = "a3214356_yikyak";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$mydate= date("Y-m-d H:i:s");
$uuid=urldecode($_POST["postid"]);
$email=urldecode($_POST["email"]);
//$posttext=urldecode($_POST["posttext"]);
  //$postid=(int)$postid;
//$email='12019020027@umt.edu.pk';
	//$sql = "select * from newpost " ;
$sql="SELECT * FROM mynewpost where email='$email' order by id desc";
	$result = $conn->query($sql);
	$userData = array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
				$tmp = array('id' => $row["id"],'uuid' => $row["uuid"],'email' => $row["email"], 'posttext' => $row["posttext"], 'imageurl' => $row["imageurl"],'count' => $row["count"],'gcmid' => $row["gcmid"],'orientation' => $row["orientation"]

                                                    , 'myuni' => $row["myuni"], 'olddate' => $row["olddate"], 'cdate' => $mydate);
			array_push($userData, $tmp);
		
		}
	}
//$userData = array_reverse($userData,true);
	echo json_encode($userData);
	$conn->close();
	exit();
?>	