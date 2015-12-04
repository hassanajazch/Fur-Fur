<?php

//echo "ans is:";
//$date = date("Y-m-d");
//$ndate = new DateTime($d);


//$cdate = new DateTime($date);
$mydate= date("Y-m-d H:i:s");
$cdate = new DateTime($mydate);
//echo $cdate;
//$date1=date_create("2013-03-15 21:35:55");
//$date2=date_create("2013-12-12 23:45:59");
//$diff=date_diff($d,$cdate);
//$diff=date_diff($date1,$d);

//echo $diff->format("%R%a days");
//$dStart = new DateTime('2015-12-01 21:35:55');
$dEnd = new DateTime('2015-12-05 22:45:59');
$dDiff = $cdate->diff($dEnd);
//echo $dDiff->format('%d days');
$y=$dDiff->format('%y');
$month=$dDiff->format('%m');
$day=$dDiff->format('%d');
$min=$dDiff->format('%i');
$h=$dDiff->format('%h');
$s=$dDiff->format('%s');
// echo "Year is:";
// echo $y;
// echo "Month is:";
// echo $month;
// echo "Day is:";
// echo $day;
// echo "Hour  is:";
// echo $h;
// echo "Min is:";
// echo $min;

//echo "Sec is:";
//echo $s;
if($y==0&&$month==0&&$day==0&&$min==0&&$h==0)
	{
echo "Sec is:";
echo $s;
}
if($y==0&&$month==0&&$day==0&&$min>=1&&$h==0)
	{
echo "Min is:";
echo $min;
} 

if($y==0&&$month==0&&$day==0&&$min>=0&&$h>=1)
	{
echo "Hour is:";
echo $h;
} 

if($y==0&&$month==0&&$day>=1&&$min>=0&&$h>=0)
	{
echo "Day is:";
echo $day;
} 

if($y==0&&$month>0&&$day>=0&&$min>=0&&$h>=0)
	{
echo "Month is:";
echo $month;
} 
if($y>0&&$month>=0&&$day>=0&&$min>=0&&$h>=0)
	{
echo "Year is:";
echo $y;
} 

//  exit;
?>  