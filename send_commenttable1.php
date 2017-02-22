<?php

$servername = "54.169.152.134";
$username = "root";as
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}as
 
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
//$o=urldecode($_POST["o"]);
$gcm=urldecode($_POST["gcm"]);
$o=urldecode($_POST["o"]);
$mydate= date("Y-m-d H:i:s");
$mydate=(string) $mydate;

$sql = "INSERT INTO commenttable (postid,commenttext,userid,emailid,imgurl,orientation,olddate,otheruuid,otheremail,othergcm)
VALUES ('$postid','$commenttext','$comuuid','$comemail','$imgurl','$o','$mydate','$userid','$email','$gcm')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
//$ok=1;
} else {
    echo "nosuccessfully";
}



$conn->close();
exit();
?>
