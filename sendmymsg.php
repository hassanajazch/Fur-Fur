<?php
$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$api_key = "AIzaSyAYnU5jKqyzD2l1J9NqA6sODgpZP_LGJbs";
$postid=urldecode($_POST["postid"]);
   
$postid=(int)$postid;

	$sql = "select gcmid from mynewpost where postid='$postid'";

	$result = $conn->query($sql);
	$userData = array();
	if ($result->num_rows > 0) {
	
$regid = $result->fetch_object();
$regid = $regid->gcmid;
    
	$registrationIDs= array($regid);


	$message = "sucessfully result";//array("name" => $name, "deal" => $deal, "valid" => $valid, "address" => $address);
	$url = 'https://android.googleapis.com/gcm/send';
	$fields = array(
                'registration_ids'  => $registrationIDs,
                'data'              => array( "message" => $message ),
                );

	$headers = array(
					'Authorization: key=' . $api_key,
					'Content-Type: application/json');
					
					
					
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
	$result = curl_exec($ch);
	curl_close($ch);
	
echo $result;
}
	$conn->close();
	exit();



	


?>	
