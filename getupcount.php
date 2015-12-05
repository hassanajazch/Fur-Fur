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
$email=urldecode($_POST["email"]);
$regno=urldecode($_POST["regno"]);
$ok=0;
//$id='102';
//$uuid='357503050188210';
//$email='12019020027@umt.edu.pk';
$regno="1";
//$posttext=urldecode($_POST["posttext"]);
   //$id=(int)$id;
//ll
	
$sql="UPDATE mynewpost SET count=count+1 WHERE id='$id' ";
//$sql="SELECT * FROM comment postid='$postid'";
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
if($regno=='0')
{
$sl="UPDATE totalmarks SET count=count+3 WHERE uuid='$uuid' ";
echo 'Hello UUid';
}
else
{
$sl="UPDATE totalmarks SET count=count+3 WHERE emailid='$email' ";	
echo 'Hello Email';
}
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