<?php require "config.php" ?>

<?php

if( isset($_POST['submit'])){
$coursemark =  $_POST['coursemark'];
$finalmark =  $_POST['finalmark'];

if(!empty($coursemark)|| !empty($finalmark)){
 	$query = "INSERT INTO studentmarks (coursemark, finalmark) 
					  VALUES('$coursemark','$finalmark')";
			mysqli_query($db, $query);
   header("Location:home.php");
   $_SESSION['success'];
}else{
	echo('you cannot add nothing!');
}
}