<?php
$servername = "54.169.152.134";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$c=0;
$uuid=$_POST["uuid"];
$gcmid=$_POST["gcmid"];
$regemailid=$_POST["regemailid"];

$date = date('Y-m-d');
//$cdate = new DateTime($date);

//////////////

//$uuid='357503050188210';
//$gcmid='APA91bEienM1EORGtD1D5mn8M-T0PM6_d6FB_eGCYjZ3DvUxI-yy1zwGRk57_Z-qWtwtlfvj8ejIy3AM1DuwyKBLz6TZXINpsW54Gn-noTKOmRZWrGb2QDI4QNN-96ZU2wIz2jhVyBru8zGMvN9H7pse0KGhtNCQpvtmQksHM_z4o9BBECeu1Xs';
//$regemailid='0';
$sql = "select * from registertable where  uuid= '$uuid' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo "alreadyrecord";
}
////////////////
else
{
$sq = "INSERT INTO registertable(uuid, gcmid,date,regemailid)
VALUES ('$uuid','$gcmid', '$date','0')";

if ($conn->query($sq) === TRUE) {
    echo "successfully";
} 
else {
    echo "notsucess";


}

}
	$conn->close();
	exit;
?>	