<?php
$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$c=0;
$postid=urldecode($_POST["postid"]);

$uuid=urldecode($_POST["uuid"]);
  
$postid=(int)$postid;

$sql = "select registerid from uuidcounttable where  postid='$postid' AND uuid='$uuid'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

//echo "fff";



$sl="UPDATE mynewpost SET count=count-1 WHERE id='$postid' ";

if ($conn->query($sl) === TRUE) {
//echo "sucessfullyeeeeeee";
$s="DELETE FROM uuidcounttable WHERE postid='$postid' AND uuid='$uuid' ";
 if ($conn->query($s) === TRUE) {
echo "delete";

}

}           
 



}


 else {
    

//echo "Norecord";


 $msql = "INSERT INTO uuidcounttable(postid, uuid,registerid)

 VALUES ('$postid', '$uuid','1')";


if ($conn->query($msql) === TRUE) {

$sqlup="UPDATE mynewpost SET count=count+1 WHERE id='$postid' ";

if ($conn->query($sqlup) === TRUE) {
echo "update";
}


}
else
{
//echo "notsucesstableinsert";
}

}

	$conn->close();
	exit;
?>	