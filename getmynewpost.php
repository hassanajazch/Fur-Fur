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
//$cdate = new DateTime($mydate);
//$id=urldecode($_POST["id"]);
////
//$uni=urldecode($_POST["uni"])
  // $id=(int)$id;

	//$sql = "select * from mynewpost where id>'$id' order by id " ;
$sql ="SELECT * FROM mynewpost  order by id";
	//$sql = "select * from mynewpost where id>'1' order by id";

	$result = $conn->query($sql);
	//echo "hello";
	$userData = array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    	//echo "world";
	    while($row = $result->fetch_assoc()) {
			$tmp = array('id' => $row["id"],'uuid' => $row["uuid"],'email' => $row["email"], 'posttext' => $row["posttext"], 'imageurl' => $row["imageurl"],'count' => $row["count"],'gcmid' => $row["gcmid"],'orientation' => $row["orientation"]

                                                    , 'myuni' => $row["myuni"], 'olddate' => $row["olddate"], 'cdate' => $mydate);
			array_push($userData, $tmp);
			//echo $row["id"];
			//echo $row["email"];
			// 	$tmp = array('id' => $row["id"],'uuid' => $row["uuid"],'email' => $row["email"], 'posttext' => $row["posttext"], 'imageurl' => $row["imageurl"],'count' => $row["count"],'gcmid' => $row["gcmid"],'orientation' => $row["orientation"]

   //                                                  , 'myuni' => "OOOOO");
			// array_push($userData, $tmp);
		
		}
	}
	//else
	//{
			//echo "NOT";
	//}
//$userData = array_reverse($userData,true);
//echo "\n";
//echo count($userData);
//	echo json_encode($userData);
echo json_encode($userData);
	$conn->close();
	exit;
?>	