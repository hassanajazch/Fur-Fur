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
$email=urldecode($_POST["email"]);
//$posttext=urldecode($_POST["posttext"]);
  //$postid=(int)$postid;
//$postid='357503050188210';
	//$sql = "select * from newpost " ;
$sql="SELECT * FROM commenttable where emailid='$email' || userid='$postid' ";
	$result = $conn->query($sql);
	$userData = array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			$tmp = array('postid' => $row["postid"],  'commenttext' => $row["commenttext"],    'imgurl' => $row["imgurl"],  'orientation' => $row["orientation"],    'otheruuid' => $row["otheruuid"],    'otheremail' => $row["otheremail"],    'othergcm' => $row["othergcm"]);
			array_push($userData, $tmp);
			
		}
	}
//$userData = array_reverse($userData,true);
	echo json_encode($userData);
	$conn->close();
	exit();
?>	