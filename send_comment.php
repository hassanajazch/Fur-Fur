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
 
$ok=0;
$postid = $_POST["postid"];
$userid = $_POST["userid"];
$emailid = $_POST["emailid"];
$postid=(int)$postid;
$commenttext = $_POST["commenttext"];

$sql = "INSERT INTO comment (postid,commenttext,userid,emailid)
VALUES ('$postid','$commenttext','$userid','$emailid')";


if ($conn->query($sql) === TRUE) {
    echo "successfully";
$ok=1;
} else {
    echo "nosuccessfully";
}
if($ok==1)
{
$sl="UPDATE totalmarks SET count=count+2 WHERE uuid='$userid' ";

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
