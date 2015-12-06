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
 
//$ok=0;

$comemail = $_POST["comemail"];
$imgurl = $_POST["imgurl"];
$comuuid = $_POST["comuuid"];
$postid = $_POST["postid"];
$userid = $_POST["userid"];
//$emailid = $_POST["emailid"];
$postid=(int)$postid;
$commenttext = $_POST["commenttext"];
$email=urldecode($_POST["email"]);
$regno=urldecode($_POST["regno"]);
$o=urldecode($_POST["o"]);
// $postid = "444";
// $userid = "357503050188210";
// $emailid = "aaaa";
// $postid=(int)$postid;
// $commenttext = "dddddddddd";
// $comuuid='357503050188210';
// $comemail='222';
$ok=0;
$sql = "INSERT INTO commenttable (postid,commenttext,userid,emailid,imgurl,orientation)
VALUES ('$postid','$commenttext','$comuuid','$comemail','$imgurl','$o')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
$ok=1;
} else {
    echo "nosuccessfully";
}

if($ok==1)
{
	if($regno=='0')
{
$sl="UPDATE totalmarks SET count=count+2 WHERE uuid='$comuuid' ";
}
else
{
$sl="UPDATE totalmarks SET count=count+2 WHERE emailid='$email' ";	
}
if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}


}

if($ok==1)
{
	$ok=0;
//if($regno=='0')
//{
//$sl="UPDATE totalmarks SET count=count+1 WHERE uuid='$comuuid' ";
//}
//else
//{
$sl="UPDATE totalmarks SET count=count+1 WHERE emailid='$userid' ";	
//}
if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}


}


$conn->close();
exit();
?>
