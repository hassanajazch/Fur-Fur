<?php
$servername = "54.169.152.134";
$username = "root";
$password = "hassan";
$dbname = "a3214356_yikyak";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$email = $_POST["email"];
$id = $_POST["uuid"];
$password = $_POST["password"];
$univ = $_POST["univ"];

$sql = "INSERT INTO logintable (email, pasword,university)
VALUES ('$email', '$password','$univ')";

$result = $conn->query($sql);


if ($result->num_rows > 0) {


  echo "successfully";
 
$sl="UPDATE registertable SET regemailid='1',email='$email',password='$password',university='$univ', WHERE uuid='$id' ";
if ($conn->query($sl) === TRUE) {
 // echo "successfully";
}
else {
 //   echo "nosuccessfully";
}
 
} 
else {
    echo "nosuccessfully";
echo $email;
echo $password;
}

$conn->close();
exit();
?>

