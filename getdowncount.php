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
$uuid=urldecode($_POST["uuid"]);
$ok=0;
//$id='53';
//$uuid='357503050188210';
$sql="UPDATE mynewpost SET count=count-1 WHERE id='$id'";
	
//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "sucessfully";
$ok=1;
} else {
    echo "nosucessfully";
}

if($ok==1)
{
$ok=0;
$sl="UPDATE totalmarks SET count=count-2 WHERE uuid='$uuid' ";

if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}

}

	$conn->close();
	exit;
?>	