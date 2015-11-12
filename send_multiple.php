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

	//$api_key = "AIzaSyAYnU5jKqyzD2l1J9NqA6sODgpZP_LGJbs";
        $regid = $_POST["regid"];
        //$message = array("name" => $name, "deal" => $deal, "valid" => $valid, "address" => $address);

//$registrationIDs= array($regid);
$name="zzzzz";
$address="fsd";
///////////////////
$arr = array();
	$sql = "select gcmid from mynewpost ORDER BY id DESC" ;
//$sql="SELECT * FROM mynewpost ORDER BY id DESC";
	$result = $conn->query($sql);
	$userData = array();
$c=0;
if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
$api_key = "AIzaSyAYnU5jKqyzD2l1J9NqA6sODgpZP_LGJbs";	
//		$tmp = array('gcmid' => $row["gcmid"]);
//echo $tmp;			
//array_push($userData, $tmp);
 //json_encode($userData);
			//$registrationIDs= array($userData);

$id = $result->fetch_object();
$id = $id->gcmid;
//echo $id;
$arr[$c]=$id;
$c++;
$registrationIDs= array($id);

}
}
$n=0;
for($i=0;$i<$c;$i++)
{
//echo $arr[$i];

////////////////////		


	
        $regid = $arr[$i];
$registrationIDs= array($regid);
//$registrationIDs= array($userdata);
  
      $message = array("name" => $name, "deal" => $deal, "valid" => $valid, "address" => $address);
	
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
//echo $result;
//}
//}

//if ($conn->query($sql) === TRUE) {
  //  echo "successfully";
//} else {
  //  echo "nosuccessfully";
//}

$conn->close();
exit();


?>

/////////////////////
