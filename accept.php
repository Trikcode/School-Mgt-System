
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- semanti-ui -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">

 <title>Reject</title>
 
</head>
<?php require_once ("header.php"); ?>
<body style=" font: 14px sans-serif;
        background: radial-gradient(
          circle,
          rgba(238, 174, 202, 1) 0%,
          rgba(148, 186, 233, 1) 100%
        );">
<?php
   include ('config.php'); 
    
    $query = "SELECT * FROM `complaints`;";
    $results = mysqli_query($db, $query);
             while ($row = mysqli_fetch_assoc($results)) {
              $desc =$row['description'];
              $complaint = $row['complaint'];
              $sql = "INSERT INTO accepted (description, complaint) 
					        VALUES('$desc','$complaint')";
			      mysqli_query($db, $sql);
         echo('forwarded back to AR dashboard');
							
            }
?>


<br/><br/>
<a href="home.php">Back</a>
</body>
</html>

