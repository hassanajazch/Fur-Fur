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
$id=urldecode($_POST["uuid"]);
//$posttext=urldecode($_POST["posttext"]);
  //$id=(int)$id;
//echo $id;
//echo $id;
   // echo "Errorhhhhhhh: " . $sql . "<br>" . $conn->error;
$date = date('Y-m-d');
$sql = "select uuid,rigisterid,date from uidtable where  uuid= '$id' ";
//$sql = "INSERT INTO uuidtable(uuid,date,rigisterid)
//VALUES ('$id','$date','0')";
$result = $conn->query($sql);

//if ($conn->query($sql) === TRUE) {

if ($result->num_rows > 0) {
$c=1;
//echo "New record created successfully";
  //  echo "New record created successfully";
	//$result = $conn->query($sql);

//$obj=mysqli_fetch_object($result);
$d = $result->fetch_object();
$d = $d->date;
$rigister = $result->fetch_object();
$rigister = $rigister->rigisterid;
//$d=rigister->date;
//echo  $d; 
//echo  $rigister; 
if($rigister==="1")
{
$value="rigisterok";
echo $value;
}

///////

else
{
//$sql = "select date from uuidtable where  uuid='$id' "
$olddate = $result->fetch_object();
$olddate = $olddate->date;


$cdate = date('Y-m-d');
//echo $cdate;
//echo "hhhhh";
//echo $d;
//echo "$olddate";
//$diff=date_diff($d,$cdate);
//echo $diff;

//$date1=date_create("2013-03-15");
//$date2=date_create("2013-12-12");
function date_diff($date1, $date2) { 
    $current = $date1; 
    $datetime2 = date_create($date2); 
    $count = 0; 
    while(date_create($current) < $datetime2){ 
        $current = gmdate("Y-m-d", strtotime("+1 day", strtotime($current))); 
        $count++; 
    } 
    return $count; 
} 
//echo "Total diff";
//echo (date_diff('2010-3-9', '2010-3-9')." days <br \>");

//echo (date_diff($d, $cdate)." days <br \>");

$res=date_diff($d, $cdate);
//echo" total is:";
//echo $res;

if($res>=2)
{
echo "Notregister";
}
else
{

$s="notexpire";
echo $s;

}

}
/////////

}

 else {
    

echo "Norecord";

//echo $id;
//$date = date('Y-m-d');
$sql = "INSERT INTO uidtable(uuid, date,rigisterid)
VALUES ('$id', '$date','0')";
//$sql = "INSERT INTO myuuidtable(uuid,date,rigisterid)
//VALUES ('$id','$date','0')";


}
if($c==0)
{
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "no record";


}

}
 //$response["message"] = "notexpire";

        // echoing JSON response
        //echo json_encode($response);
	$conn->close();
	exit;
?>	