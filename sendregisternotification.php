<?php
// please enter the api_key you received from google console
	$api_key = "AIzaSyAYnU5jKqyzD2l1J9NqA6sODgpZP_LGJbs";
        $regid = $_POST["regid"];
        
$registrationIDs= array($regid);
		
$message = "sucessfully registiration";//array("name" => $name, "deal" => $deal, "valid" => $valid, "address" => $address);
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
?>