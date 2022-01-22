<?php require "config.php" ?>

<?php

if( isset($_POST['submit'])){
$course = $_POST['coursename'];
if(!empty($course)){
 	$query = "INSERT INTO course (course) 
					  VALUES('$course')";
			mysqli_query($db, $query);
   header("Location:index.php");
}else{
	echo('you cannot register nothing!');
}
}