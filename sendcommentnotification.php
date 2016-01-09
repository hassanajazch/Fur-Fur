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
// please enter the api_key you received from google console
	$api_key = "AIzaSyAYnU5jKqyzD2l1J9NqA6sODgpZP_LGJbs";
         $regid = $_POST["regid"];
         $text = $_POST["text"];
        $postid = $_POST["postid"];
        $imgurl = $_POST["imgurl"];
        $or = $_POST["or"];
        
        //$regid = '999';
        //$comtext = 'ppoooo';
       // $postid = '51';
        
        
// $regid = 'APA91bHpdbUajcEpsSoSWeOSHmv3uU9o0mY5wJZCuG5zwjC4dU-1p_0SY-CCIdjvWq3ZJU4yMcqCjSuoHCGV5vkabVzDqYLhlobdYEIo7e8hKgnNoQmEPhfzRigqiGiqKdV97-mquZ1mD3Vi-DMAGHniX4yF4VFFVedkUFk9in4JjjlMl5eJDKk';
//         $comtext = 'hello zee';
//         $postid = '30';
        

$sql = "INSERT INTO notification (uuid,commenttext,postid)
VALUES ($regid,'$text','$postid')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
//$ok=;
} else {
    echo "nosuccessfully";
}
$registrationIDs= array($regid);
//$name="zzzzz";
//$address="fsd";
//$deal="ok";
//$valid="OK";
		//echo "jjjj";
		//echo $comtext;
		//$postid='30';
// 			echo $regid;
$Like='3';
$message = array("postid" => $postid, "text" => $text, "imgurl" => $imgurl,"or" => $or, "Like" => $Like);
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
echo "close";


$conn->close();
exit();


?>
