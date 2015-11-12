<?php

$servername = "54.254.209.190";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email=urldecode($_POST["email"]);
$password=urldecode($_POST["pasword"]);
   //$postid=(int)$postid;

	//$sql = "select * from logintable " ;
$sql="SELECT * FROM logintable where pasword='$password' and email='$email' ";
//	$result = $conn->query($sql);

$result = $conn->query($sql);

//if ($conn->query($sql) === TRUE) {

if ($result->num_rows > 0) {
echo "New record created successfully";
  //  echo "New record created successfully";
	//$result = $conn->query($sql);

//$obj=mysqli_fetch_object($result);
$em = $result->fetch_object();
$em = $em->email;
$p = $result->fetch_object();
$p = $p->pasword;


echo $em;
echo $p;
echo "mypassword";



	
$to = "zeeshanumt2790@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: zeeshanumt2790@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
}
else
{
//$em = $result->fetch_object();
//$em = $em->email;
//$p = $result->fetch_object();
//$p = $p->password;


//echo $em;
//echo $p;
echo "notsucess";
}
	$conn->close();
	exit();
?>	