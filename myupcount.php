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
$postid=urldecode($_POST["postid"]);

$emailid=urldecode($_POST["emailid"]);
  
$postid=(int)$postid;

$sql = "select postid,emailid from counttable where  registerid= '1' ";
//$sql = "INSERT INTO uuidtable(uuid,date,rigisterid)
//VALUES ('$id','$date','0')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
//$c=1;

//$d = $result->fetch_object();

//$d = $d->date;

$sl="UPDATE mynewpost SET count=count-1 WHERE postid='$postid' ";

if ($conn->query($sl) === TRUE) {
echo "sucessfully";
$s="DELETE FROM counttable WHERE postid='$postid' AND emailid='$emailid' ";
 if ($conn->query($s) === TRUE) {
echo "delete";

}

}           
 
}
else
{
echo "notsucessfully";
} 


}


 else {
    

echo "Norecord";


 $msql = "INSERT INTO counttable(postid, emailid,registerid)

 VALUES ('$postid', '$emailid','1')";

if ($conn->query($msql) === TRUE) {
echo "sucessfully";

}
else
{
echo "notsucesstableinsert"
}

}
	$conn->close();
	exit;
?>	