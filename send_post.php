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
//$uuid = $_POST["uuid"];
$gcmid = $_POST["gcmid"];
//$myuni = $_POST["uni"];
$email = $_POST["email"];
$count = $_POST["count"];
$imageurl = $_POST["imageurl"];
$o = $_POST["orientation"];
$count=(int) $count;
$uuid='357503050188210';
$myuni='AAA';
// $posttext = "posttext";
// $uuid = "uuid";
// $gcmid = "333";
// $myuni = "UMT";
// $email = "email";
// $count = "count";
// $imageurl = "imageurl";
// $o = "orientation";
// $count=(int) $count;
$sql = "INSERT INTO mynewpost (uuid,posttext,email,imageurl, count,gcmid,orientation,myuni)

VALUES ('$uuid','$posttext','$email', '$imageurl', '$count','$gcmid','$o','$myuni')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
$ok=0;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/////////////////////
if($ok==1)
{
$ok=0;
$sl="UPDATE totalmarks SET count=count+2 WHERE uuid='357503050188210' ";

if ($conn->query($sl) === TRUE) {
echo "sucessfully";

}
else {

    echo "nosuccessfully";
}

}

$conn->close();
?>