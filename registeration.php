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
 
//$email = $_POST["email"];

$id=urldecode($_POST["id"]);


   $id=(int)$id;


//$sql = "select * from logint where email='yyy'";

//if ($conn->query($sql) === TRUE) {
  //$em="yyy@gmail.com";

$sql="SELECT * FROM registertable where uuid='$id'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {

 // echo "AlreadyRecord";
$userData = array();
  while($row = $result->fetch_assoc()) {
			$tmp = array('uuid' => $row["uuid"],  'gcmid' => $row["gcmid"],  'date' => $row["data"],  'regemailid' => $row["regemailid"]);
			array_push($userData, $tmp);
			
		}
	

	echo json_encode($userData);


}

 else {
//echo "notfound"; 

}

$conn->close();
exit();
?>
