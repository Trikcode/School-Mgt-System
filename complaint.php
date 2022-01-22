<?php require "config.php" ?>

<?php

if( isset($_POST['submit'])){
$email = $_POST['email'];
$desc = $_POST['desc'];
$complaint = $_POST['complaint'];

if(!empty($email)&& !empty($desc)&& !empty($complaint)){
 	$query = "INSERT INTO complaints (email, description, complaint) 
					  VALUES('$email','$desc','$complaint')";
			mysqli_query($db, $query);
   $token = openssl_random_pseudo_bytes(16);
   $finaltoken = bin2hex($token);
$to_email = $email;
$subject = '<h4>Complaint Received</h4>';
$message = `We have received your complaint and here is your CASE Tracking Number ${$finaltoken}`;
$headers = 'nobert.ayesiga@cis.mak.ac.ug';
$retval = mail($to_email,$subject,$message,$headers);
  if( $retval == true ) {
            echo "Token sent successfully...";
         }else {
            echo "Tokeb could not be sent...";
         }
   header("Location:index.php");
}else{
	echo('Not successful!');
}
}