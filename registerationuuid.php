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
//$id=urldecode($_POST["uuid"]);
//$posttext=urldecode($_POST["posttext"]);
  $id='357503050188210';

$date = date('Y-m-d');
$sql = "select uuid,regemailid,date from registertable where  uuid= '$id' ";

$result = $conn->query($sql);
$result1 = $conn->query($sql);

if ($result->num_rows > 0) {
$c=1;
$d = $result->fetch_object();
$d = $d->date;
$r = $result1->fetch_object();
$r = $r->regemailid;

//echo "ans is:";
//echo $r;
//echo "ggggg";
//echo $d;
if($r==="1")
{
$value="registerok";
echo $value;
}

///////

else
{
//$sql = "select date from uuidtable where  uuid='$id' "
//$olddate = $result->fetch_object();
//$olddate = $olddate->date;


$cdate = date('Y-m-d');
if (!function_exists("date_diff"))
{

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
} 

$res=date_diff($d, $cdate);


if($res>=2)
{
//echo
echo "dateexpire";
}
else
{
//echo $res;
$s="datenotexpire";
echo $s;

}

}
/////////

}

 else {
    

echo "Norecordfind";

//echo $id;
//$date = date('Y-m-d');
//$sql = "INSERT INTO uidtable(uuid, date,rigisterid)
//VALUES ('$id', '$date','0')";
//$sql = "INSERT INTO myuuidtable(uuid,date,rigisterid)
//VALUES ('$id','$date','0')";


}
//if($c==0)
//{
//if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
//} else {
  //  echo "no record";


//}

//}
	
$conn->close();
	exit;
?>	