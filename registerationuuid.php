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
  //$id='357503050188210';
//$id='351746053193630';
$date = date("Y-m-d");
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
$ndate = new DateTime($d);

//echo $r;
//echo "ggggg";
//echo $d;
if($r==="1")
{
  //aa
$value="registerok";
echo $value;
}

///////

else
{
//$sql = "select date from uuidtable where  uuid='$id' "
//$olddate = $result->fetch_object();
//$olddate = $olddate->date;


$cdate = new DateTime($date);

//echo $cdate;
//$date1=date_create("2013-03-15");
//$date2=date_create("2013-12-12");

//$diff=date_diff($d,$cdate);
//$diff=date_diff($date1,$d);

//echo $diff->format("%R%a days");
//$dStart = new DateTime('2013-03-15');
//$dEnd = new DateTime('2015-04-18');
$dDiff = $cdate->diff($ndate);
//echo $dDiff->format('%d days');
$res=$dDiff->format('%d');
$y=$dDiff->format('%y');
$month=$dDiff->format('%m');
//$day=$dDiff->format('%d');
// if($rr>=2)
// {
//   echo "nnn";
// }
//if($dDiff>2)
//{

//}
//if (!function_exists("date_diff"))
//{
//echo "string is ok";
// function date_diff($date1, $date2) { 
//     $current = $date1; 
//     $datetime2 = date_create($date2); 
//     $count = 0; 
//     while(date_create($current) < $datetime2){ 
//         $current = gmdate("Y-m-d", strtotime("+1 day", strtotime($current))); 
//         $count++; 
//   echo "string is";
//   echo $count;
//     } 
//     return $count; 
// }
// } 

//$res=date_diff($d, $cdate);
//$res=1;

if($res>=2||$month>0||$y>0||$res<0)
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