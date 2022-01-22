<?php
require_once("server.php");
$first= $_POST['first'];
$middle= $_POST['middle'];
$last= $_POST['last'];

$course= $_POST['course'];
$studentNumber= $_POST['studentNumber'];
$Email= $_POST['Email'];
$phoneNumber= $_POST['phoneNumber'];
// $contactChoice2 = $_POST['contactChoice2'];
$contactChoice1 = $_POST['contactChoice1'];
$story= $_POST['story'];

$query = "INSERT INTO complaintdetails (first, middle,last, course, studentNo, Email, phoneNo, contact1, details) VALUES ('$first','$middle','$last','$course','$studentNumber','$Email','$phoneNumber','$contactChoice1','$story');";

mysqli_query($link,$query);
header("Location: home.php")

?>

<!-- CREATE TABLE complaintdetails (
    RegId int(11) AUTO_INCREMENT PRIMARY KEY not null,
    first varchar(50) not null, middle varchar(50), last varchar(50) not null, course varchar(255), studentNo int(50), Email varchar(255), phoneNo int(10), contact1 varchar(255), details varchar(1000)
) -->