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
$posttext = $_POST["posttext"];
$uuid = $_POST["uuid"];
$gcmid = $_POST["gcmid"];
$myuni = $_POST["uni"];
$email = $_POST["email"];
$count = $_POST["count"];

$regno=urldecode($_POST["regno"]);
$imageurl = $_POST["imageurl"];
$o = $_POST["orientation"];
$count=(int) $count;
$mydate= date("Y-m-d H:i:s");
$mydate=(string) $mydate;
$ok=0;
// $uuid='357503050188210';
// $myuni='AAA';
// $posttext = "posttext";
// $uuid = "uuid";
// $gcmid = "333";
// $myuni = "UMT";
// $email = "email";
// $count = "count";
// $imageurl = "imageurl";
// $o = "orientation";
// $count=(int) $count;
// $ok=0;
// $mydate= date("Y-m-d H:i:s");
// $mydate=(string) $mydate;
$sql = "INSERT INTO mynewpost (uuid,posttext,email,imageurl, count,gcmid,orientation,myuni,olddate)

VALUES ('$uuid','$posttext','$email', '$imageurl', '$count','$gcmid','$o','$myuni','$mydate')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
$ok=1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/////////////////////
if($ok==1)
{
$ok=0;
if($regno=='0')
{
$sl="UPDATE totalmarks SET count=count+2 WHERE uuid='$uuid' ";
}
else
{
$sl="UPDATE totalmarks SET count=count+2 WHERE uuid='$email' ";
}
if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}

}

$conn->close();
?>