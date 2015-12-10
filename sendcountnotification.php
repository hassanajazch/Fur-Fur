<?php
$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// please enter the api_key you received from google console
	$api_key = "AIzaSyAYnU5jKqyzD2l1J9NqA6sODgpZP_LGJbs";
        $regid = $_POST["regid"];
  $imgurl = $_POST["imgurl"];
        $text = $_POST["posttext"];
        $postid = $_POST["postid"];
        
$registrationIDs= array($regid);
//$name="ss";
//$address="kkkk";
		
//$message = "disLike your Post";
$Like='1';
$message = array("imgurl" => $imgurl, "text" => $text, "postid" => $postid, "Like" => $Like);
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

//if ($conn->query($sql) === TRUE) {
  //  echo "successfully";
//} else {
  //  echo "nosuccessfully";
//}

$conn->close();
exit();


?>

/////////////////////
