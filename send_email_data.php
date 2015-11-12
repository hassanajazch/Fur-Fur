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
 
$email = $_POST["email"];

$id=urldecode($_POST["id"]);


   $id=(int)$id;


//$sql = "select * from logintable where email='yyy'";

//if ($conn->query($sql) === TRUE) {
  $em="yyy@gmail.com";

$sql="SELECT * FROM logintable where email='$email'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {

  echo "AlreadyRecord";
}

 else {


 $code=$id/27;
$code=(int)$code;
echo $code;

}

$conn->close();
exit();
?>

